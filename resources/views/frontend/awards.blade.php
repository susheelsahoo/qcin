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
                                    <a href="#">Udyog Manthan</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.schemes') }}">Schemes</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-3" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.padd-schemes') }}">PADD Schemes</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.workplace-assessment-for-safety-and-hygiene') }}">WASH Scheme</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.projects') }}">Projects</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-4" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.ppid-projects') }}">PPID Projects</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.padd-projects') }}">PADD Projects</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.events') }}">Events</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-5" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.conclaves') }}">Conclaves</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.workshops') }}">Workshops</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.webinars') }}">Webinars</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.training') }}">Trainings</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.icsts') }}">ICSTS</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.other-events') }}">Other Events</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.looking-for-accreditation') }}">Accreditations</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.membership') }}">Membership</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-8" style="width:100%">
                                    <a href="{{ route('frontend.certifications') }}">Certifications</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-9" style="width:100%">
                                    <a href="{{ route('frontend.learning') }}">Learning</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-10" style="width:100%">
                                    <a href="{{ route('frontend.awards') }}">Awards</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-11" style="width:100%">
                                    <a href="#">CPGRAMS</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-12" style="width:100%">
                                    <a href="#">India PSS Platform</a>
                                </li>
                            </div>
                        </div>
                    </div>

                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Awards</h1>
                <div class="descripton mb-30">
                    <h2>PROJECT BASED AWARD</h2>
                    <h3><a href="#" target="_blank" rel="noreferrer noopener">QCI-D.L Shah Quality Award</a></h3>
                    <p>The QCI-DL Shah Quality Award was launched in 2007 and are positioned PAN-India as the recognition for successful projects of an organisation that have resulted in continuous improvement of processes, products and/or services, better/effective.</p>
                    <p><a href="#" target="_blank" rel="noreferrer noopener">Read More &gt;&gt;</a></p>
                    <hr />
                    <h1> </h1>
                    <h2>INDIVIDUAL LEVEL AWARD</h2>
                    <h3><a href="#">QCI - Quality Champion Award</a></h3>
                    <p>QCI -Quality Champion Award aims to honour outstanding individuals who have demonstrated significant contribution in the field of quality (for example outstanding promotional activities, innovation in approach, promotion, effective application of quality tools etc.) in any sector.</p>
                    <p><a href="#" target="_blank" rel="noreferrer noopener">Read More &gt;&gt;</a></p>
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