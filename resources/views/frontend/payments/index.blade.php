@extends('frontend.layouts.frontend')

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
                                        <form role="form" action="#" method="post" id="Ngo" enctype="multipart/form-data" novalidate="novalidate">
                                            <input type="hidden" id="add_more_count" value="0">
                                            <section class="">
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label>Name<span>*</span></label>
                                                        <input type="text" class="form-control" placeholder="Organization Name" name="name">
                                                        <!-- onkeypress="return Alphabets(event,this);" -->
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Category<span>*</span></label>
                                                        <input type="text" class="form-control" placeholder="Category" name="Category">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label> Information about your services<span>*</span></label>
                                                        <textarea style="height: 50px;" class="form-control" name="Sector_Engaged" placeholder="Provide brief information about your services"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label>Contact Person Name<span>*</span></label>
                                                        <input type="text" class="form-control" placeholder="Contact Person Name" name="Name_Applicant" onkeypress="return onlyAlphabets(event,this);">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Contact Person Number<span>*</span></label>
                                                        <input type="text" class="form-control numeric" placeholder="Contact Person Number" name="Number_Applicant" onkeypress="return limitcount2(this,10,event)">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Mobile No.<span>*</span></label>
                                                        <input type="text" class="form-control numeric" placeholder="Mobile No." name="Mobile" onkeypress="return limitcount2(this,10,event)">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label>Region<span></span></label>
                                                        <select class="form-control" name="Zone" id="Zone">
                                                            <option value="">Region</option>
                                                            <option value="East Region">East Region</option>
                                                            <option value="West Region">West Region</option>
                                                            <option value="North Region">North Region</option>
                                                            <option value="South Region">South Region</option>
                                                            <option value="Central Region">Central Region</option>
                                                            <option value="North East Region">North East Region</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>State<span>*</span></label>
                                                        <select name="state" id="state" class="form-control">
                                                            <option value="">State</option>
                                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                            <option value="Assam">Assam</option>
                                                            <option value="Bihar">Bihar</option>
                                                            <option value="Chandigarh">Chandigarh</option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                            <option value="Daman and Diu">Daman and Diu</option>
                                                            <option value="Delhi">Delhi</option>
                                                            <option value="Lakshadweep">Lakshadweep</option>
                                                            <option value="Puducherry">Puducherry</option>
                                                            <option value="Goa">Goa</option>
                                                            <option value="Gujarat">Gujarat</option>
                                                            <option value="Haryana">Haryana</option>
                                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                            <option value="Jharkhand">Jharkhand</option>
                                                            <option value="Karnataka">Karnataka</option>
                                                            <option value="Kerala">Kerala</option>
                                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                            <option value="Maharashtra">Maharashtra</option>
                                                            <option value="Manipur">Manipur</option>
                                                            <option value="Meghalaya">Meghalaya</option>
                                                            <option value="Mizoram">Mizoram</option>
                                                            <option value="Nagaland">Nagaland</option>
                                                            <option value="Odisha">Odisha</option>
                                                            <option value="Punjab">Punjab</option>
                                                            <option value="Rajasthan">Rajasthan</option>
                                                            <option value="Sikkim">Sikkim</option>
                                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                                            <option value="Telangana">Telangana</option>
                                                            <option value="Tripura">Tripura</option>
                                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                            <option value="Uttarakhand">Uttarakhand</option>
                                                            <option value="West Bengal">West Bengal</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>City<span>*</span></label>
                                                        <input type="text" class="form-control numeric" placeholder="District" name="District" id="District">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label>Pincode<span>*</span></label>
                                                        <input type="text" class="form-control numeric" placeholder="Pincode" name="Pincode" onkeypress="limitcount(this,6,event)">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>STD Code</label>
                                                                <input type="text" class="form-control numeric" placeholder="Std Code" name="StdCode" onkeypress="limitcount(this,4,event)">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <label>Telephone No.</label>
                                                                <input type="text" class="form-control numeric " placeholder="Telephone" name="Telephone" onkeypress="limitcount(this,8,event)">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>E-mail ID<span>*</span></label>
                                                        <input type="email" class="form-control" placeholder="Email ID" name="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>GST No/ PAN No</label>
                                                        <input type="text" name="Gst_No" class="form-control" placeholder="GST No/ PAN No" value="">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Registered Address<span>*</span></label>
                                                        <textarea class="form-control" placeholder="Address" name="Office_Address"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Address for Correspondence<span>*</span></label>
                                                        <textarea class="form-control" placeholder="Address" name="Office_Address">  </textarea>
                                                    </div>

                                                </div>
                                                <div class="part">
                                                    <h5>Company Details </h5>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>Location Of Company where you are providing your servicess</label>
                                                            <textarea name="Business_Location" class="form-control" placeholder="Location Of Company"></textarea>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Affiliations And Supports<span>*</span></label>
                                                            <textarea class="form-control" name="Affiliations_Supports" placeholder="Affiliations And Supports"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="form-group col-md-3">
                                                            <label>Name of Directors / Partners <span>*</span></label>
                                                            <input type="text" class="form-control " placeholder="Name of Directors / Partners" name="Name_Directors">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label>Year of Registration<span>*</span></label>
                                                            <select class="form-control" id="myval" name="Year_Incorporation">
                                                                <option value="">Year of Registration</option>
                                                                {{ $last= 1901 }}
                                                                {{ $now = date('Y') }}
                                                                @for ($i = $now; $i >= $last; $i--)
                                                                <option value="{{ $i }}">{{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label>Number of Employees </label>
                                                            <input type="text" class="form-control numeric" placeholder="Number of Employees" name="Permanent_Full_Time_Employees" onkeypress="limitcount(this,5,event)">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label>FQP Affiliations<span></span></label>
                                                            <input type="text" class="form-control" placeholder="FQP Memberships Number" name="Membership_Bodes_Affiliation">
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
                                                                <input type="file" name="fqp_ID" class="form-control" id="fqp_ID">
                                                            </div>
                                                            <label id="fqp_ID-error" class="error" for="fqp_ID"></label>

                                                            <input type="hidden" name="New_fqp_ID" id="New_fqp_ID" value="">
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
                                                            <input type="text" name="Member_Name" class="form-control" placeholder="Member Name">
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <label>Member Mobile No.</label>
                                                            <input type="text" name="Member_Mobile" class="form-control numeric" placeholder="Member Mobile No.">
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <label>Member Email ID</label>
                                                            <input type="email" name="Member_Email" class="form-control" placeholder="Member Email ID">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4 form-group">
                                                            <label>Member Designation</label>
                                                            <input type="text" name="Member_Designation" class="form-control" placeholder="Member Designation">
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <label>Member Organization </label>
                                                            <input type="text" name="Member_Organization" class="form-control" placeholder="Member Organization">
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

                                            <input type="checkbox" value="1" name="codeofethics" required="" aria-required="true">
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
                                        </form>
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