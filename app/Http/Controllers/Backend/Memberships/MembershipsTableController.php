<?php

namespace App\Http\Controllers\Backend\Memberships;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Memberships\ManageMembershipsRequest;
use App\Repositories\Backend\MembershipsRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class MembershipsTableController.
 */
class MembershipsTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\MembershipsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\MembershipsRepository $repository
     */
    public function __construct(MembershipsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Memberships\ManageMembershipsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageMembershipsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['name'])
            ->addColumn('status', function ($blogs) {
                return $blogs->status;
            })
            ->addColumn('publish_datetime', function ($blogs) {
                return $blogs->publish_datetime->format('d/m/Y h:i A');
            })
            ->addColumn('created_by', function ($blogs) {
                return $blogs->user_name;
            })
            ->addColumn('created_at', function ($blogs) {
                return $blogs->created_at->toDateString();
            })
            ->addColumn('actions', function ($blogs) {
                return $blogs->action_buttons;
            })
            ->make(true);
    }
}
