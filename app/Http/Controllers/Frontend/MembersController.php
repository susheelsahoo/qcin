<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class MembersController.
 */
class MembersController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.memberships.create');
    }
    public function about()
    {
        return view('frontend.index');
    }
}
