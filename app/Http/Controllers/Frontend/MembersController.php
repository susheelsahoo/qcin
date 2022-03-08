<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\Models\MembersModel;
use App\Http\Responses\RedirectResponse;

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
        $user_id  = Auth::user()->id;
        //dd($user_id);
        return view('frontend.memberships.create');
    }
    public function store(Request $request)
    {
        $user_id  = Auth::user()->id;

        $members = new MembersModel();
        $members->name = request('name');
        $members->category = request('category');
        $members->sector_engaged = request('sector_engaged');
        $members->name_applicant = request('name_applicant');
        $members->number_applicant = request('number_applicant');
        $members->mobile = request('mobile');
        $members->zone = request('zone');
        $members->state = request('state');
        $members->pincode = request('pincode');
        $members->stdCode = request('stdCode');
        $members->telephone = request('telephone');
        $members->email = request('email');
        $members->gst_no = request('gst_no');
        $members->office_address = request('office_address');
        $members->correspondence_office_address = request('correspondence_office_address');
        $members->business_location = request('business_location');
        $members->affiliations_supports = request('affiliations_supports');
        $members->name_directors = request('name_directors');
        $members->year_incorporation = request('year_incorporation');
        $members->permanent_full_Time_Employees = request('permanent_full_Time_Employees');
        $members->membership_affiliation = request('membership_affiliation');
        $members->new_fqp_id = request('new_fqp_id');
        $members->user_id = $user_id;
        // $members->member_name = request('member_name');
        // $members->member_mobile = request('member_mobile');
        // $members->member_email = request('member_email');
        // $members->member_designation = request('member_designation');
        // $members->member_organization = request('member_organization');
        $members->codeofethics = request('codeofethics');

        $members->save();
        return redirect()->back()->withFlashSuccess(__('Membership created successfully'));
        //return new RedirectResponse(route('frontend.user.payment'), ['flash_success' => __('MemberShip created successfully')]);
    }
    public function about()
    {
        return view('frontend.index');
    }
}
