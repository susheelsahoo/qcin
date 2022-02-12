@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<!--row-->
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
                                    <a href="{{ route('frontend.about') }}">About QCI</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-2" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.history') }}">History</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.mission') }}">Mission</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.vision') }}">Vision</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.moa') }}">MOA</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.key-objectives') }}">Key Objectives</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="#">Our People</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-3" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.our-leadership') }}">Our Leadership</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.members') }}">Members</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><a class="blue-btn" href="index{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>About QCI</h1>
                <div class="descripton mb-30">
                    <p style="text-align:justify;">Quality Council of India (QCI) was established as a National body for Accreditation on recommendations of Expert Mission of EU after consultations in Inter-ministerial Task Force, Committee of Secretaries and Group of Ministers through a Cabinet decision in 1996. Accordingly, QCI was set up through a PPP model as an independent autonomous organization with the support of Government of India and the Indian Industry represented by the three premier industry associations, (i) Associated Chambers of Commerce and Industry of India (ASSOCHAM), (ii) Confederation of Indian Industry (CII) and (iii) Federation of Indian Chambers of Commerce and Industry (FICCI). </p>
                    <p style="text-align:justify;">QCI is a non-profit organization registered under the Societies Registration Act XXI of 1860. The Department of Industrial Policy and Promotion, Ministry of Commerce and Industry was designated as the nodal point for all matters connected with quality and QCI to structure and help implementation of the Cabinet decision. </p>
                    <p style="text-align:justify;">QCI has been established to create a mechanism for independent third party assessment of products, services and processes. It plays a pivotal role at the national level in propagating, adoption and adherence to quality standards in all important spheres of activities including education, healthcare, environment protection, governance, social sectors, infrastructure sector and such other areas of organized activities that have significant bearing in improving the quality of life and wellbeing of the citizens of India.</p>
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