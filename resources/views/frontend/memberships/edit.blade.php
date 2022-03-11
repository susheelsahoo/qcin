@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<section class="basic-inner-page">
    <div class="container">
        <div class="inner-grp clearfix">
            <div id="sticky-anchor"></div>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong>
                                    <i class="fas fa-tachometer-alt"></i> Membership
                                </strong>
                            </div>
                            <!--card-header-->
                            <div class="card-body">
                                <section id="main-content">
                                    <div id="page-main">
                                        <!-- <form role="form" action="#" method="post" id="Ngo" enctype="multipart/form-data" novalidate="novalidate"> -->
                                        {{ Form::open(['route' => 'frontend.user.membership.update', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

                                        <input type="hidden" id="add_more_count" value="0">
                                        <section class="">
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label>Name<span>*</span></label>
                                                    <input type="text" class="form-control" placeholder="Organization Name" value="{{$member['name']}}" value="{{$member['name']}}" name="name">
                                                    <!-- onkeypress="return Alphabets(event,this);" -->
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Category<span>*</span></label>
                                                    <input type="text" class="form-control" placeholder="Category" value="{{$member['category']}}" name="category">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label> Information about your services<span>*</span></label>
                                                    <textarea style="height: 50px;" class="form-control" name="sector_engaged" placeholder="Provide brief information about your services">{{$member['sector_engaged']}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label>Contact Person Name<span>*</span></label>
                                                    <input type="text" class="form-control" placeholder="Contact Person Name" value="{{$member['name_applicant']}}" name="name_applicant" onkeypress="return onlyAlphabets(event,this);">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Contact Person Number<span>*</span></label>
                                                    <input type="text" class="form-control numeric" placeholder="Contact Person Number" value="{{$member['number_applicant']}}" name="number_applicant" onkeypress="return limitcount2(this,10,event)">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Mobile No.<span>*</span></label>
                                                    <input type="text" class="form-control numeric" placeholder="Mobile No." value="{{$member['mobile']}}" name="mobile" onkeypress="return limitcount2(this,10,event)">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label>Region<span></span></label>
                                                    @php
                                                    $zone = $member['zone'];
                                                    @endphp
                                                    <select class="form-control" name="zone" id="Zone">

                                                        <option {{ $zone == 'East' ? 'selected' : '' }} value="">Region</option>
                                                        <option {{ $zone == 'East Region' ? 'selected' : '' }} value="East Region">East Region</option>
                                                        <option {{ $zone == 'West Region' ? 'selected' : '' }} value="West Region">West Region</option>
                                                        <option {{ $zone == 'North Region' ? 'selected' : '' }} value="North Region">North Region</option>
                                                        <option {{ $zone == 'South Region' ? 'selected' : '' }} value="South Region">South Region</option>
                                                        <option {{ $zone == 'Central Region' ? 'selected' : '' }} value="Central Region">Central Region</option>
                                                        <option {{ $zone == 'North East Region' ? 'selected' : '' }} value="North East Region">North East Region</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>State<span>*</span></label>
                                                    @php
                                                    $state = $member['state'];
                                                    @endphp
                                                    <select name="state" id="state" class="form-control">
                                                        <option {{ $state == '' ? 'selected' : '' }} value="">State</option>
                                                        <option {{ $state == 'Andhra Pradesh' ? 'selected' : '' }} value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option {{ $state == 'Andaman and Nicobar Islands' ? 'selected' : '' }} value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                        <option {{ $state == 'Arunachal Pradesh' ? 'selected' : '' }} value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option {{ $state == 'Assam' ? 'selected' : '' }} value="Assam">Assam</option>
                                                        <option {{ $state == 'Bihar' ? 'selected' : '' }} value="Bihar">Bihar</option>
                                                        <option {{ $state == 'Chandigarh' ? 'selected' : '' }} value="Chandigarh">Chandigarh</option>
                                                        <option {{ $state == 'Chhattisgarh' ? 'selected' : '' }} value="Chhattisgarh">Chhattisgarh</option>
                                                        <option {{ $state == 'Dadar and Nagar Haveli' ? 'selected' : '' }} value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                        <option {{ $state == 'Daman and Diu' ? 'selected' : '' }} value="Daman and Diu">Daman and Diu</option>
                                                        <option {{ $state == 'Delhi' ? 'selected' : '' }} value="Delhi">Delhi</option>
                                                        <option {{ $state == 'Lakshadweep' ? 'selected' : '' }} value="Lakshadweep">Lakshadweep</option>
                                                        <option {{ $state == 'Puducherry' ? 'selected' : '' }} value="Puducherry">Puducherry</option>
                                                        <option {{ $state == 'Goa' ? 'selected' : '' }} value="Goa">Goa</option>
                                                        <option {{ $state == 'Gujarat' ? 'selected' : '' }} value="Gujarat">Gujarat</option>
                                                        <option {{ $state == 'Haryana' ? 'selected' : '' }} value="Haryana">Haryana</option>
                                                        <option {{ $state == 'Himachal Pradesh' ? 'selected' : '' }} value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option {{ $state == 'Jammu and Kashmir' ? 'selected' : '' }} value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                        <option {{ $state == 'Jharkhand' ? 'selected' : '' }} value="Jharkhand">Jharkhand</option>
                                                        <option {{ $state == 'Karnataka' ? 'selected' : '' }} value="Karnataka">Karnataka</option>
                                                        <option {{ $state == 'Kerala' ? 'selected' : '' }} value="Kerala">Kerala</option>
                                                        <option {{ $state == 'Madhya Pradesh' ? 'selected' : '' }} value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option {{ $state == 'Maharashtra' ? 'selected' : '' }} value="Maharashtra">Maharashtra</option>
                                                        <option {{ $state == 'Manipur' ? 'selected' : '' }} value="Manipur">Manipur</option>
                                                        <option {{ $state == 'Meghalaya' ? 'selected' : '' }} value="Meghalaya">Meghalaya</option>
                                                        <option {{ $state == 'Meghalaya' ? 'selected' : '' }} value="Mizoram">Mizoram</option>
                                                        <option {{ $state == 'Nagaland' ? 'selected' : '' }} value="Nagaland">Nagaland</option>
                                                        <option {{ $state == 'Odisha' ? 'selected' : '' }} value="Odisha">Odisha</option>
                                                        <option {{ $state == 'Punjab' ? 'selected' : '' }} value="Punjab">Punjab</option>
                                                        <option {{ $state == 'Rajasthan' ? 'selected' : '' }} value="Rajasthan">Rajasthan</option>
                                                        <option {{ $state == 'Sikkim' ? 'selected' : '' }} value="Sikkim">Sikkim</option>
                                                        <option {{ $state == 'Tamil Nadu' ? 'selected' : '' }} value="Tamil Nadu">Tamil Nadu</option>
                                                        <option {{ $state == 'Telangana' ? 'selected' : '' }} value="Telangana">Telangana</option>
                                                        <option {{ $state == 'Tripura' ? 'selected' : '' }} value="Tripura">Tripura</option>
                                                        <option {{ $state == 'Uttar Pradesh' ? 'selected' : '' }} value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option {{ $state == 'Uttarakhand' ? 'selected' : '' }} value="Uttarakhand">Uttarakhand</option>
                                                        <option {{ $state == 'West Bengal' ? 'selected' : '' }} value="West Bengal">West Bengal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>City<span>*</span></label>
                                                    <input type="text" class="form-control numeric" placeholder="District" value="{{$member['district']}}" name="district" id="District">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label>Pincode<span>*</span></label>
                                                    <input type="text" class="form-control numeric" placeholder="Pincode" value="{{$member['pincode']}}" name="pincode" onkeypress="limitcount(this,6,event)">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>STD Code</label>
                                                            <input type="text" class="form-control numeric" placeholder="Std Code" value="{{$member['stdCode']}}" name="stdCode" onkeypress="limitcount(this,4,event)">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label>Telephone No.</label>
                                                            <input type="text" class="form-control numeric " placeholder="Telephone" value="{{$member['telephone']}}" name="telephone" onkeypress="limitcount(this,8,event)">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>E-mail ID<span>*</span></label>
                                                    <input type="email" class="form-control" placeholder="Email ID" value="{{$member['email']}}" name="email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>GST No/ PAN No</label>
                                                    <input type="text" value="{{$member['gst_no']}}" name="gst_no" class="form-control" placeholder="GST No/ PAN No">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Registered Address<span>*</span></label>
                                                    <textarea class="form-control" placeholder="Address" name="office_address">{{$member['office_address']}}</textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Address for Correspondence<span>*</span></label>
                                                    <textarea class="form-control" placeholder="Address" name="correspondence_office_address"> {{$member['correspondence_office_address']}} </textarea>
                                                </div>

                                            </div>
                                            <div class="part">
                                                <h5>Company Details </h5>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Location Of Company where you are providing your servicess</label>
                                                        <textarea name="business_location" class="form-control" placeholder="Location Of Company"> {{$member['business_location']}}</textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Affiliations And Supports<span>*</span></label>
                                                        <textarea class="form-control" name="affiliations_supports" placeholder="Affiliations And Supports">{{$member['affiliations_supports']}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="form-group col-md-3">
                                                        <label>Name of Directors / Partners <span>*</span></label>
                                                        <input type="text" class="form-control " placeholder="Name of Directors / Partners" value="{{$member['name_directors']}}" name="name_directors">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Year of Registration<span>*</span></label>
                                                        <select class="form-control" id="myval" name="year_incorporation">
                                                            <option value="">Year of Registration</option>
                                                            {{ $last= 1901 }}
                                                            {{ $now = date('Y') }}
                                                            @for ($i = $now; $i >= $last; $i--)
                                                            <option {{ $member["year_incorporation"] == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Number of Employees </label>
                                                        <input type="text" class="form-control numeric" placeholder="Number of Employees" value="{{$member['permanent_full_Time_Employees']}}" name="permanent_full_Time_Employees" onkeypress="limitcount(this,5,event)">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>FQP Affiliations<span></span></label>
                                                        <input type="text" class="form-control" placeholder="FQP Memberships Number" value="{{$member['membership_affiliation']}}" name="membership_affiliation">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                            </div>
                                            <div class="part">
                                                <h5>Upload Documents</h5>
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-4 form-group">
                                                        <label>Upload Your FQP Document<span style="color:#F00;"><br>(File size should not exceed 2 MB)</span><span style="color:#F00;">(Upload only pdf,doc,docx file)</span></label>
                                                        <div class="input-group">
                                                            <input type="file" name="fqp_id" class="form-control" id="fqp_id">
                                                        </div>
                                                        <label id="fqp_id-error" class="error" for="fqp_id"></label>

                                                        <input type="hidden" name="new_fqp_id" id="new_fqp_id">
                                                    </div>
                                                    <input type="hidden" name="sub_category" value="15">
                                                </div>
                                            </div>
                                        </section>
                                        <section class="">
                                            <!--<span class="participant_details">Participant Details</span>-->
                                            <h5>Provide names of personal to whom membership card to be issued.</h5>

                                            <div class="NGO_Membership mydiv">

                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                        <label>Member Name</label>
                                                        <input type="text" value="{{$member['member_name']}}" name="member_name" class="form-control" placeholder="Member Name">
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label>Member Mobile No.</label>
                                                        <input type="text" value="{{$member['member_mobile']}}" name="member_mobile" class="form-control numeric" placeholder="Member Mobile No.">
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label>Member Email ID</label>
                                                        <input type="email" value="{{$member['member_email']}}" name="member_email" class="form-control" placeholder="Member Email ID">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4 form-group">
                                                        <label>Member Designation</label>
                                                        <input type="text" value="{{$member['member_designation']}}" name="member_designation" class="form-control" placeholder="Member Designation">
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <label>Member Organization </label>
                                                        <input type="text" value="{{$member['member_organization']}}" name="member_organization" class="form-control" placeholder="Member Organization">
                                                    </div>
                                                </div>
                                            </div>

                                        </section>
                                        <h5>Code of Ethics.</h5>
                                        <p style="text-align: justify;">FQP membership is a testimony for a quality professional's/organisation's involvement in quality related activities in his/her/their work domain. Professional membership scheme does not imply membership to the FQP board. The certificate is only to ensure the appropriate use of FQP membership for individual/ organisational growth as well as Quality promotion activities. There shall be no misinterpretation of facts to demean FQP, or inappropriate promotion for concerned interest.</p>
                                        <p>
                                        </p>
                                        <p><strong>FQP members are expected to promote the dignity of the profession and solemnly
                                                affirm to abide by the following Do and Don’t;</strong></p>

                                        <h3>Do</h3>
                                        <ul>
                                            <li>Use only valid FQP membership status and number for promotional purpose.
                                            </li>
                                            <li>Send only valid documents to support the membership application.
                                            </li>
                                            <li>Strive to increase the competence and prestige quality of profession.
                                            </li>
                                            <li>Maintain membership as a means for quality allegiance and professional growth and avoid the use of such membership for the sole purpose of solicitation of business or for personal financial gains.
                                            </li>
                                            <li>Continue with professional development as well as facilitate the same for others.
                                            </li>
                                            <li>Offer feedback with suggestions for improvement or involvement and contribute to the quarterly magazine.
                                            </li>
                                        </ul>
                                        <h3>Don’ts</h3>
                                        <ul>
                                            <li>Use FQP/NBQP logo through any means.</li>
                                            <li>Do not use any phrase other than that quoted in bold in the certificate issued while quoting the membership category in any document or media.
                                            </li>
                                            <li>Send any Project report/ data to FQP unless asked for
                                            </li>
                                            <li>Involve in fraudulent, illegal criminal activities or unethical conduct as it may call for debarring of membership/ cancellation of membership.
                                            </li>
                                            <li>Criticize or use hate languages/ speech while interacting with other members.
                                            </li>
                                            <li>Engage in unethical, unprofessional practices or political dialogues with other FQP registered members.
                                            </li>
                                        </ul>
                                        <br>

                                        <input type="checkbox" value="1" name="codeofethics" required="" {{$member['codeofethics'] == 1 ? 'checked' : ''}}>
                                        <bold>I/we Accept.</bold><br>
                                        1. The information given above by me is true to the best of my knowledge.<br>
                                        2. I agree to abide by the code of ethics as above.<br>
                                        3. The information submitted in the form above is true to the best of my/our knowledge.<br>
                                        4. I/we have read and understood the ‘Terms &amp; Conditions’ of the FQP Professional Membership Scheme.<br>
                                        5. I/We agree to abide by the ‘code of ethics’ of the FQP Professional Membership Scheme and understand that my/our membership shall be suspended/cancelled if there is a breach of 'Code of Ethics’ at any given point of time.<br>
                                        6. I/We agree to submit the ‘Undertaking’ in the prescribed format once the membership number is issued (for Educational Institutions/NGOs) <a href="../uploads/Undertaking_Affidavit_NBQP.docx">(format enclosed)</a>
                                        <br><br>
                                        <a href="../uploads/2.pdf">
                                            <h5><b><u>Non-compliance</u></b></h5>
                                        </a>
                                        <br> <br>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <button class="btn btn-success btn-sm pull-right" type="submit">Send Information</button>
                                            </div>
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div> <!-- card-body -->
            </div><!-- card -->
        </div><!-- row -->
    </div><!-- row -->

</section>
@endsection