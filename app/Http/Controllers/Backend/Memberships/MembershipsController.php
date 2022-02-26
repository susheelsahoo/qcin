<?php

namespace App\Http\Controllers\Backend\Memberships;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Memberships\ManageMembershipsRequest;
use App\Http\Requests\Backend\Memberships\StoreMembershipRequest;
use App\Http\Requests\Backend\Memberships\UpdateMembershipRequest;
use App\Http\Responses\Backend\Blog\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Repositories\Backend\MembershipsRepository;
use Illuminate\Support\Facades\View;

class MembershipsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\MembershipsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\MembershipsRepository $blog
     */
    public function __construct(MembershipsRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['Membership']);
    }

    /**
     * @param \App\Http\Requests\Backend\Memberships\ManageMembershipsRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageMembershipsRequest $request)
    {
        return new ViewResponse('backend.Memberships.index');
    }

    /**
     * @param \App\Http\Requests\Backend\MembershipsManageMembershipsRequest $request
     *
     * @return ViewResponse
     */
    public function create(ManageMembershipsRequest $request, Blog $blog)
    {
        $blogTags = BlogTag::getSelectData();
        $blogCategories = BlogCategory::getSelectData();

        return new ViewResponse('backend.Memberships.create', ['status' => $blog->statuses, 'blogCategories' => $blogCategories, 'blogTags' => $blogTags]);
    }

    /**
     * @param \App\Http\Requests\Backend\Memberships\ManageMembershipsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(ManageMembershipsRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.Membership.index'), ['flash_success' => __('alerts.backend.Memberships.created')]);
    }

    /**
     * @param \App\Http\Requests\Backend\Memberships\ManageMembershipsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function import(ManageMembershipsRequest $request)
    {
        return new ViewResponse('backend.Memberships.index');
    }

    /**
     * @param \App\Models\Blog $blog
     * @param \App\Http\Requests\Backend\MembershipsManageMembershipsRequest $request
     *
     * @return \App\Http\Responses\Backend\Blog\EditResponse
     */
    public function edit(Blog $blog, ManageMembershipsRequest $request)
    {
        $blogCategories = BlogCategory::getSelectData();
        $blogTags = BlogTag::getSelectData();

        return new EditResponse($blog, $blog->statuses, $blogCategories, $blogTags);
    }

    /**
     * @param \App\Models\MembershipsBlog $blog
     * @param \App\Http\Requests\Backend\MembershipsUpdateMembershipRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Blog $blog, UpdateMembershipRequest $request)
    {
        $this->repository->update($blog, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.Membership.index'), ['flash_success' => __('alerts.backend.Memberships.updated')]);
    }

    /**
     * @param \App\Models\Blog $blog
     * @param \App\Http\Requests\Backend\MembershipsManageMembershipsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Blog $blog, ManageMembershipsRequest $request)
    {
        $this->repository->delete($blog);

        return new RedirectResponse(route('admin.Membership.index'), ['flash_success' => __('alerts.backend.Memberships.deleted')]);
    }
}
