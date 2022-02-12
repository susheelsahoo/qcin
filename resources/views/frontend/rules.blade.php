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
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.rules-regulation') }}rules-regulation">Rules And Regulations</a>


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
                    <!-- <p><a class="blue-btn" href="{{ route('frontend.members') }}about-us">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.members') }}">Back</a></p>
                </ul>

            </div>

            <div class="right-side">

                <h1>Rules &amp; Regulation</h1>


                <div class="descripton mb-30">
                    <ul>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">Rules and Regulations</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">Rules and Regulations.</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">Extract of minutes of meeting of Cabinet</a></li>
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