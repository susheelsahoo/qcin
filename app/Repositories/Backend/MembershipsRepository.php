<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Memberships\MembershipCreated;
use App\Events\Backend\Memberships\MembershipDeleted;
use App\Events\Backend\Memberships\MembershipUpdated;
use App\Exceptions\GeneralException;
use App\Models\Membership;
use App\Models\MembershipCategory;
use App\Models\MembershipMapCategory;
use App\Models\MembershipMapTag;
use App\Models\MembershipTag;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MembershipsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Membership::class;

    protected $upload_path;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'name',
        'slug',
        'publish_datetime',
        'content',
        'meta_title',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Storage Class Object.
     *
     * @var \Illuminate\Support\Facades\Storage
     */
    protected $storage;

    public function __construct()
    {
        $this->upload_path = 'img' . DIRECTORY_SEPARATOR . 'Membership' . DIRECTORY_SEPARATOR;
        $this->storage = Storage::disk('public');
    }

    /**
     * Retrieve List.
     *
     * @var array
     * @return Collection
     */
    public function retrieveList(array $options = [])
    {
        $perPage = isset($options['per_page']) ? (int) $options['per_page'] : 20;
        $orderBy = isset($options['order_by']) && in_array($options['order_by'], $this->sortable) ? $options['order_by'] : 'created_at';
        $order = isset($options['order']) && in_array($options['order'], ['asc', 'desc']) ? $options['order'] : 'desc';
        $query = $this->query()
            ->with([
                'owner',
                'updater',
            ])
            ->orderBy($orderBy, $order);

        if ($perPage == -1) {
            return $query->get();
        }

        return $query->paginate($perPage);
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin('users', 'users.id', '=', 'Memberships.created_by')
            ->select([
                'Memberships.id',
                'Memberships.name',
                'Memberships.publish_datetime',
                'Memberships.status',
                'Memberships.created_by',
                'Memberships.created_at',
                'users.first_name as user_name',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        $tagsArray = $this->createTags($input['tags']);
        $categoriesArray = $this->createCategories($input['categories']);

        unset($input['tags'], $input['categories']);

        return DB::transaction(function () use ($input, $tagsArray, $categoriesArray) {
            $input['slug'] = Str::slug($input['name']);
            $input['publish_datetime'] = Carbon::parse($input['publish_datetime']);
            $input['created_by'] = auth()->user()->id;

            $input = $this->uploadImage($input);

            if ($Membership = Membership::create($input)) {
                // Inserting associated category's id in mapper table
                if (count($categoriesArray)) {
                    $Membership->categories()->sync($categoriesArray);
                }

                // Inserting associated tag's id in mapper table
                if (count($tagsArray)) {
                    $Membership->tags()->sync($tagsArray);
                }

                event(new MembershipCreated($Membership));

                return $Membership;
            }

            throw new GeneralException(__('exceptions.backend.Memberships.create_error'));
        });
    }

    /**
     * @param \App\Models\Membership $Membership
     * @param array $input
     */
    public function update(Membership $Membership, array $input)
    {
        $tagsArray = $this->createTags($input['tags']);
        $categoriesArray = $this->createCategories($input['categories']);

        unset($input['tags'], $input['categories']);

        $input['slug'] = Str::slug($input['name']);
        $input['updated_by'] = auth()->user()->id;
        $input['publish_datetime'] = Carbon::parse($input['publish_datetime']);

        // Uploading Image
        if (array_key_exists('featured_image', $input)) {
            $this->deleteOldFile($Membership);
            $input = $this->uploadImage($input);
        }

        return DB::transaction(function () use ($Membership, $input, $tagsArray, $categoriesArray) {
            if ($Membership->update($input)) {
                // Updateing associated category's id in mapper table
                if (count($categoriesArray)) {
                    $Membership->categories()->sync($categoriesArray);
                }

                // Updating associated tag's id in mapper table
                if (count($tagsArray)) {
                    $Membership->tags()->sync($tagsArray);
                }

                event(new MembershipUpdated($Membership));

                return $Membership->fresh();
            }

            throw new GeneralException(__('exceptions.backend.Memberships.update_error'));
        });
    }

    /**
     * Creating Tags.
     *
     * @param array $tags
     *
     * @return array
     */
    public function createTags($tags)
    {
        //Creating a new array for tags (newly created)
        $tags_array = [];

        foreach ($tags as $tag) {
            if (is_numeric($tag)) {
                $tags_array[] = $tag;
            } else {
                $newTag = MembershipTag::firstOrCreate(
                    [
                        'name' => $tag,
                    ],
                    [
                        'name' => $tag,
                        'status' => 1,
                        'created_by' => auth()->user()->id,
                    ]
                );
                $tags_array[] = $newTag->id;
            }
        }

        return $tags_array;
    }

    /**
     * Creating Categories.
     *
     * @param array $categories
     *
     * @return array
     */
    public function createCategories($categories)
    {
        //Creating a new array for categories (newly created)
        $categories_array = [];

        foreach ($categories as $category) {
            if (is_numeric($category)) {
                $categories_array[] = $category;
            } else {
                $newCategory = MembershipCategory::firstOrCreate(
                    [
                        'name' => $category,
                    ],
                    [
                        'name' => $category,
                        'status' => 1,
                        'created_by' => auth()->user()->id,
                    ]
                );

                $categories_array[] = $newCategory->id;
            }
        }

        return $categories_array;
    }

    /**
     * @param \App\Models\Memberships\Membership $Membership
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Membership $Membership)
    {
        DB::transaction(function () use ($Membership) {
            if ($Membership->delete()) {
                MembershipMapCategory::where('Membership_id', $Membership->id)->delete();
                MembershipMapTag::where('Membership_id', $Membership->id)->delete();

                event(new MembershipDeleted($Membership));

                return true;
            }

            throw new GeneralException(__('exceptions.backend.Memberships.delete_error'));
        });
    }

    /**
     * Upload Image.
     *
     * @param array $input
     *
     * @return array $input
     */
    public function uploadImage($input)
    {
        if (isset($input['featured_image']) && !empty($input['featured_image'])) {
            $avatar = $input['featured_image'];
            $fileName = time() . $avatar->getClientOriginalName();

            $this->storage->put($this->upload_path . $fileName, file_get_contents($avatar->getRealPath()));

            $input = array_merge($input, ['featured_image' => $fileName]);
        }

        return $input;
    }

    /**
     * Destroy Old Image.
     *
     * @param int $id
     */
    public function deleteOldFile($model)
    {
        $fileName = $model->featured_image;

        return $this->storage->delete($this->upload_path . $fileName);
    }
}
