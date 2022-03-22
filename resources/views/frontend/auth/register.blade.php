@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')
<section class="basic-inner-page">
    <div class="container">
        <div class="inner-grp clearfix">
            <div id="sticky-anchor"></div>
            <div class="container">
                <div class="row justify-content-md-center">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>
                                    @lang('labels.frontend.auth.register_box_title')
                                </strong>
                            </div>
                            <!--card-header-->

                            <div class="card-body">
                                {{ html()->form('POST', route('frontend.auth.register.post'))->open() }}
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            {{ html()->label(__('validation.attributes.frontend.first_name'))->for('first_name') }}

                                            {{ html()->text('first_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.first_name'))
                                        ->attribute('maxlength', 191)
                                        ->required()}}
                                        </div>
                                        <!--col-->
                                    </div>
                                    <!--row-->

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            {{ html()->label(__('validation.attributes.frontend.last_name'))->for('last_name') }}

                                            {{ html()->text('last_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.last_name'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                            {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Mobile Number</label>
                                            <input class="form-control" type="text" name="mobile" placeholder="Your Mobile Number" maxlength="10" required="">
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Passwrod</label>
                                            <input class="form-control" type="text" name="password" placeholder="Your Password">
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Confirm Password</label>
                                            <input class="form-control" type="text" name="password_confirmation" placeholder="confirmation password">
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Membership Type</label>
                                            <select class="form-control valid" name="Membership_Type" id="Membership_Type" style="color: black;" aria-required="true" aria-invalid="false">
                                                <option value="0">Membership Type</option>
                                                <option value="1">Individual Membership</option>
                                                <option value="2">Corporate Membership</option>
                                                <option value="3">Healthcare Membership</option>
                                                <option value="4">Educational Institutions Membership</option>
                                                <option value="5">NGO Membership</option>
                                                <option value="6">Laboratories Membership</option>
                                                <option value="7">PSU Membership</option>
                                            </select>
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="category_drop">Category</label>
                                            <select class="form-control" name="category" id="category_0" style="color:black;">
                                                <option value="">Category</option>
                                                <option value="1">Member</option>
                                                <option value="2">Life Member (10 Years)</option>
                                                <option value="3">Student</option>
                                                <option value="4">International Membership</option>
                                            </select>
                                            <select class="form-control" name="category" id="category_2" style="color: black;display:none;">
                                                <option value="">Category</option>
                                                <option value="5">Micro/Small</option>
                                                <option value="6">Medium</option>
                                                <option value="7">Large</option>
                                                <option value="8">Corporate International</option>
                                            </select>
                                            <select class="form-control" name="category" id="category_3" style="color: black;display:none;">
                                                <option value="">Category</option>
                                                <option value="9">Healthcare (<50 Beds)</option>
                                                <option value="10">Healthcare (>50 Beds)</option>
                                                <option value="11">Big Hospital(Above 200 Beds)</option>
                                                <option value="12">Clonic & DayCare</option>
                                            </select>
                                            <select class="form-control" name="category" id="category_4" style="color: black;display:none;">
                                                <option value="">Category</option>
                                                <option value="13">School</option>
                                                <option value="14">College</option>
                                                <option value="15">University / Professional Institutions</option>
                                            </select>
                                            <select class="form-control" name="category" id="category_5" style="color: black;display:none;">
                                                <option value="">Category</option>
                                                <option value="16">All</option>
                                            </select>
                                            <select class="form-control" name="category" id="category_6" style="color: black;display:none;">
                                                <option value="">Category</option>
                                                <option value="17">All</option>
                                            </select>
                                            <select class="form-control" name="category" id="category_7" style="color: black;display:none;">
                                                <option value="">Category</option>
                                                <option value="18">Miniratna</option>
                                                <option value="19">Navratna</option>
                                                <option value="20">Miniratna-1</option>
                                                <option value="21">Miniratna-2</option>
                                            </select>
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <div class="row" id="year" style="display:none">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Year</label>

                                            <select class="form-control" name="select_year" id="select_year">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                <!-- <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">User Type</label>

                                            <select class="form-control" name="UserType" style="color: black;">
                                                <option value="">--Select User Type--</option>
                                                <option value="New User">New User</option>
                                                <option value="Existing User">Existing User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                                <!--row-->


                                @if(config('access.captcha.registration'))
                                <div class="row">
                                    <div class="col">
                                        @captcha
                                        {{ html()->hidden('captcha_status', 'true') }}
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                @endif

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-0 clearfix">
                                            {{ form_submit(__('labels.frontend.auth.register_button')) }}
                                        </div>
                                        <!--form-group-->
                                    </div>
                                    <!--col-->
                                </div>
                                <!--row-->
                                {{ html()->form()->close() }}

                                <div class="row">
                                    <div class="col">
                                        <div class="text-center">
                                            @include('frontend.auth.includes.socialite')
                                        </div>
                                    </div>
                                    <!--/ .col -->
                                </div><!-- / .row -->
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div>

                </div>
            </div>


        </div>
    </div>

</section>
<!--row-->
@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
@captchaScripts
@endif
@endpush