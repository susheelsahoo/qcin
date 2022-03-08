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
                                    <a href="{{ route('frontend.fqp-in-news') }}">FQP in news</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.fqp-magazines') }}">FQP Magazines</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.quality-best-practices') }}">Quality Best Practices</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.editorial') }}">Editorials</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>FQP Magazines</h1>
                <div class="descripton mb-30">
                    <h5><a href="#">FQP MAGAZINE | Jul - Sep 2021</a></h5>
                    <h5><a href="#">FQP MAGAZINE | Apr - Jun 2021</a></h5>
                    <h5><a href="#">FQP MAGAZINE | JAN-MAR 20</a><a href="#">21 </a></h5>
                    <h5><a href="#">FQP MAGAZINE | OCT-DEC 2020</a></h5>
                    <p><a href="#">FQP MAGAZINE | JUL-SEP 2020</a></p>
                    <p><a href="#">FQP MAGAZINE | JAN-JUNE 2020</a></p>
                    <p><a href="#">FQP MAGAZINE | OCT-DEC 2019</a></p>
                    <p><a href="#">FQP MAGAZINE | JUL-SEP-2019</a></p>
                    <p><a href="#">FQP MAGAZINE | APRIL- JUNE 2019</a></p>
                    <p><a href="#">FQP MAGAZINE | JAN-MAR-2019</a></p>
                    <p><a href="#">FQP MAGAZINE | OCT-DEC 2018</a></p>
                    <p><a href="#">FQP MAGAZINE | JUL-SEP-2018</a></p>
                    <h5><a href="#">FQP MAGAZINE | APRIL-JUNE 2018</a><br />
                        <br />
                        <a href="#">FQP MAGAZINE | JAN-MAR-2018</a>
                    </h5>
                    <p><a href="#">FQP MAGAZINE | OCT-DEC 2017</a></p>
                    <p><a href="#">FQP MAGAZINE | JUL-SEP-2017</a></p>
                    <p><a href="#">FQP MAGAZINE | JAN-MAR-2017</a></p>
                    <p><a href="#">FQP MAGAZINE | FEB-APRIL 2016</a></p>
                    <p><a href="#">FQP MAGAZINE | SEP-OCT 2015</a></p>
                    <h5><a href="#">FQP MAGAZINE | July-Aug 2015</a><br />
                        <br />
                        <a href="#">FQP MAGAZINE | FEB-APRIL 2015</a>
                    </h5>
                    <h5><a href="#">FQP MAGAZINE | NOV 2014-JAN 2015</a></h5>
                    <p><a href="#">FQP MAGAZINE | JULY-SEP 2014</a></p>
                    <p><a href="#">FQP MAGAZINE | APR-JUNE 2014</a></p>
                    <p> </p>
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