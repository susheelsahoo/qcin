@extends('frontend.layouts.frontend')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
<section>
    <div class="container mycon">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-12 bg-color">
                    <div class="col-md-12 bg-color-con">
                        <div class="row ml-0 mr-0"> <a class="col-md-8 col-md-offset-2" href="#"><img src="https://nbqpmembership.qci.org.in/front-assets/images/nbqp_logo.jpg" alt="logo" class="img-responsive"></a> </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 small">
                        {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                        <h3>Login</h3>
                        <div class="form-group">
                            {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                            {{ html()->email('email')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.email'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                        </div>
                        <div class="form-group">
                            {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                            {{ html()->password('password')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.password'))
                                ->required() }}
                        </div>

                        @if(config('access.captcha.login'))
                        <div class="row">
                            <div class="col">
                                @captcha
                                {{ html()->hidden('captcha_status', 'true') }}
                            </div>
                            <!--col-->
                        </div>
                        <!--row-->
                        @endif
                        <div class="checkbox">
                            {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                        </div>
                        <div class="row ml-0 mr-0">
                            <div class="col-md-6 p-0">
                                <div class="form-group">
                                    <input type="submit" name="login" class="btn btn-block btn-success" value="Login">
                                </div>
                                <!-- <div class="form-group clearfix">
                                    {{ form_submit(__('labels.frontend.auth.login_button')) }}
                                </div> -->
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('frontend.auth.password.reset') }}">@lang('labels.frontend.passwords.forgot_password')</a>
                            </div>
                        </div>
                        {{ html()->form()->close() }}
                    </div>
                    <div class="row ml-0 mr-0">
                        <div class="col-md-8 col-md-offset-2 copyright"> <small>© 2022 All Rights Reserved</small> </div>
                        <div class="col-md-12 footer">
                            <div class="col-md-10 col-md-offset-1 mobile-padding-0"> <small style="font-size: 82%;">Don't have an account?
                                    <a href="{{ route('frontend.auth.register') }}">@lang('labels.frontend.auth.register_now')</a>
                                    <a href="#" class="">Terms &amp; Conditions</a></small>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row ml-0 mr-0 bg">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-12 con">
                        <div class="col-md-12 text-justify">
                            <h3>Membership Benefits</h3>
                            <div class="scroll">
                                <ol type="1" class="text-justify">
                                    <li>Discount ranging from 10-20% for participating in the QCI programs, Events (Training, Conclave, etc) Members can avail Networking Opportunities with Quality Professionals across all sectors in the QCI events, programs &amp; conclaves.
                                    </li>
                                    <li>Advertisements invited at discounted rates up to 10% in Quality India Magazine.
                                    </li>
                                    <li>QCI members can avail up to 25% discount on the online courses on E-Quest (An E-Learning platform of QCI).</li>
                                    <li>Members can quote their valid QCI membership number along with validity in their Publicity Material <strong>Note:</strong> Members will be given an online generated Membership card / Certificate (In case of corporate).</li>
                                    <li>Entitled to receive quarterly QCI “Quality India” Magazine.</li>
                                    <li>Contribute articles in Quality India Magazine with under 1000 words (Only selected articles will be published).</li>
                                    <li>Opportunity to speak at the QCI organized Conclave, Seminars and Workshops &amp; share the best practices with other members.</li>
                                    <li>Referral Benefits to the members offered for introducing new members in significant numbers.</li>
                                    <li>Free Webinars for all the members.</li>

                                </ol>
                            </div>
                        </div>
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









@push('after-scripts')
@if(config('access.captcha.login'))
@captchaScripts
@endif
@endpush