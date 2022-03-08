@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<section class="basic-banner">
    <div class="full-width">
        <img class="img-responsive" src="public/uploads/pageimages/1573034619{{ route('frontend.history') }}" alt="Training">
    </div>
</section>
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
                                    <a href="{{ route('frontend.conclaves') }}">Conclaves</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-2" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.national-quality-conclave') }}">National Conclaves</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.regional-quality-conclave') }}">Regional Conclaves</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.virtual-quality-conclave') }}">Virtual Conclaves</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.workshops') }}">Workshops</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.webinars') }}">Webinars</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.training') }}">Trainings</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.icsts') }}">ICSTS</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.other-events') }}">Other Events</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/events">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Training</h1>
                <div class="descripton mb-30">
                    <h2 style="margin:0cm 0cm 8pt;"> </h2>
                    <h2 style="margin:0cm 0cm 8pt;">Trainings by NABH</h2>
                    <h2 style="margin:0cm 0cm 8pt;"><a href="#" target="_blank" rel="noreferrer noopener">Click Here</a></h2>
                    <hr />
                    <p> </p>
                    <div class="left_"></div>
                    <div class="descripton1 mb-30">
                        <h2>Trainings by NBQP</h2>
                        <h2><a href="{{ route('frontend.trainings-by-nbqp') }}" target="_blank" rel="noreferrer noopener">Click Here</a></h2>
                        <hr />
                        <p> </p>
                    </div>
                    <div class="descripton2 mb-30">
                        <h2 style="margin:0cm 0cm 8pt;">Trainings by NABL </h2>
                        <h2 style="margin:0cm 0cm 8pt;"><a href="#" target="_blank" rel="noreferrer noopener">Click Here</a></h2>
                        <hr />
                        <h2> </h2>
                        <h2>Trainings by TCB</h2>
                        <h2><a href="#" target="_blank" rel="noreferrer noopener">Click Here</a></h2>
                        <h2> </h2>
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