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
                                    <a href="{{ route('frontend.special-projects-groups') }}">Special Projects Groups</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.hr-administration') }}">HR &amp; Administration</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-3" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="#">Service and Finance Manual</a></li>
                                        <li class="submenu-xcb "><a href="#">Manual on Ethical Practices</a></li>
                                        <li class="submenu-xcb "><a href="#">Weeding out Policy</a></li>
                                        <li class="submenu-xcb "><a href="#">Retention policy</a></li>
                                        <li class="submenu-xcb "><a href="#">Categories of documents</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.office-orders-internal-circulars') }}">Office Orders/Internal Circulars</a></li>
                                        <li class="submenu-xcb "><a href="#">HR &amp; Admin KRA</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.annual-reports') }}">Annual Reports</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.finance-and-accounts') }}">Finance and Accounts</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.rti-cell') }}">RTI Cell</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.ethics-cell') }}">Ethics Cell</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.icc-for-sexual-harassment') }}">ICC for Sexual Harassment</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-8" style="width:100%">
                                    <a href="{{ route('frontend.minutes-of-gb') }}">Minutes of GB</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-9" style="width:100%">
                                    <a href="{{ route('frontend.minutes-of-gc') }}">Minutes of GC</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Minutes of GB</h1>
                <div class="descripton mb-30">
                    <ul>
                        <li>
                            <h4><a href="#">47th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">48th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">49th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">50th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">51st Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">52nd Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">53rd Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">54th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">55th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#" target="_blank" rel="noreferrer noopener">56th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#" target="_blank" rel="noreferrer noopener">57th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="$" target="_blank" rel="noreferrer noopener">58th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">59th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">60th Governing Body Minutes</a></h4>
                        </li>
                        <li>
                            <h4><a href="#">61st Governing Body Minutes</a></h4>
                        </li>
                        <li><a href="#">62nd Governing Body Minutes</a></li>
                        <li><a href="#">63rd Governing Body Minutes</a></li>
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