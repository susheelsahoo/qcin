@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<section class="basic-inner-page">
    <div class="container">
        <div class="inner-grp clearfix">
            <div id="sticky-anchor"></div>
            <div class="left-menu" id="sticky">
                <ul id="test" style="margin-bottom: 20px;" class="nav nav-pills">
                    <div class="accordion my-accord" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-2" style="width:100%">
                                    <a href="{{ route('frontend.careers') }}">Careers</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.tenders') }}">Tenders</a>
                                </li>
                            </div>
                        </div>
                    </div>

                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Careers</h1>
                <div class="descripton mb-30">
                    <p><big><strong style="font-size:18px;">Career opportunities in QCI</strong></big></p>
                    <p><strong>Last date to submit the online application against the Advt. No. QCI/1/2021 dated 12.12.2021 is 20.1.2022, 5:30 pm. In case of any issue /difficulty in submission of application, the applicant is advised to inform the same immediately at email <a href="mailto:hr@qcin.org" target="_blank" rel="noreferrer noopener">hr@qcin.org</a> or <a href="mailto:support@7techies.com" target="_blank" rel="noreferrer noopener">support@7techies.com</a> for its resolution in timely manner.</strong></p>
                    <ul>
                        <li>
                            <a href="#"><big><strong>Advertisement for recruitment (Dec. 2021)</strong> </big></a>
                            <ul>
                                <li><a href="#">Other details &amp; General terms &amp; conditions</a></li>
                                <li><a href="#">Post details </a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Registration/login to fill application form</a></li>
                            </ul>
                        </li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">Hiring of Professionals</a></li>
                    </ul>
                    <div class="left_"></div>
                    <div class="descripton1 mb-30"></div>
                    <div class="descripton2 mb-30"></div>
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