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
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-2" style="width:100%">
                                    <a href="{{ route('frontend.history') }}">History</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.mission') }}">Mission</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.vision') }}">Vision</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                <a href="{{ route('frontend.moa') }}">MOA</a>
                            </li>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo" style="padding:0px;">
                            <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                <a href="{{ route('frontend.rules-regulation') }}">Rules And Regulations</a>
                            </li>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo" style="padding:0px;">
                            <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                <a href="{{ route('frontend.key-objectives') }}">Key Objectives</a>
                            </li>
                        </div>
                    </div>
            </div>
            <!-- <p><a class="blue-btn" href="https://qcin.org/about-us">Back</a></p> -->
            <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
            </ul>
        </div>
        <div class="right-side">
            <h1>Mission</h1>
            <div class="descripton mb-30">
                <p style="text-align:justify;">To lead nationwide quality movement in India by involving all stakeholders for emphasis on adherence to quality standards in all spheres of activities primarily for promoting and protecting interests of the nation and its citizens.</p>
                <p style="text-align:justify;"><img alt="" src="public/uploads/ck-images/1580463515.apjkalam.jpg" /></p>
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