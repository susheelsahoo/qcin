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
                                    <a href="{{ route('frontend.governance-structure') }}">Governance Structure</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.administrative-structure') }}">Administrative Structure</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.bodies-of-fqp') }}">Bodies of FQP</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-4" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.the-governing-council') }}">The Governing Council</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.the-governing-body') }}">The Governing Body</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.finance-committee') }}">Finance Committee</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.boards') }}">Boards</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.fqp-secretariat') }}">FQP Secretariat</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-5" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.special-projects-groups') }}">Special Projects Groups</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.hr-administration') }}">HR &amp; Administration</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.finance-and-accounts') }}">Finance and Accounts</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.rti-cell') }}">RTI Cell</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.ethics-cell') }}">Ethics Cell</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.icc-for-sexual-harassment') }}">ICC for Sexual Harassment</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.minutes-of-gb') }}">Minutes of GB</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.minutes-of-gc') }}">Minutes of GC</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/#">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Administrative Structure</h1>
                <div class="descripton mb-30">
                    <p><img alt="" src="{{ url('/img/frontend/homeimages/1578902937.Administrative-Structure-2.png')}}" style="margin:5px;float:left;" /></p>
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