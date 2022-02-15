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
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.mission') }}">Mission</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.vision') }}">Vision</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
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
                <h1>Vision</h1>
                <div class="descripton mb-30">
                    <h3 style="text-align:center;">Creating an eco-system for Quality</h3>
                    <h3 style="text-align:center;"><img alt="" src="{{ url('/img/frontend/homeimages/vision_1.jpg') }}" /></h3>
                    <p> </p>
                    <p style="text-align:justify;"><strong>Excerpts from the speech of Dr. A.P.J. Abdul Kalam, Honorable President of India inaugurating the 2nd National Quality Conclave on February 9, 2007 at New Delhi</strong></p>
                    <p style="text-align:justify;">"My definition of nation prosperity index is equal to GDP including quality of life for all coupled with value system. It is essential to ensure that all the citizens are empowered with good quality of life encompassing nutritious foods, good habitat, clean environment, affordable health care, quality education with value system and productive employment leading to the comprehensive qualitative development of the nation.</p>
                    <p style="text-align:justify;">There is a strong urge in our society to come out century old "Developing Country" brand name to “Developed Country" status. To become developed country, we must have competitive edge in the international market. Quality is very essential to achieve this. We must use competition as an opportunity to improve our quality and to transform from a technology importer to technology exporter."</p>
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