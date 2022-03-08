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
                                    <a href="{{ route('frontend.fqp-in-news') }}">FQP in news</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
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
                    <p><a class="blue-btn" href="#">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>FQP in News</h1>
                <div class="descripton mb-30"></div>
                <div class="row new-secc">
                    <ul>
                        <li>
                            <div class="news-box">
                                <h3> FQP has announced Prof. S.K. Joshi Laboratory Excellence Award</h3>
                                <a class="news-a" href="{{ route('frontend.news/prof') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> FQP has announced the 3rd edition of FQP Quality Champion Award</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> FQP has announced the 14th FQP-D.L. Shah Quality Award.</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> #Unite2FightCorona</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> Call for Proposal/EOI-Protection of Child Right</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> FQP has been awarded Grade A (93%) by Central Information Commission for the year 2019-20</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> NABET has been conducting online Workshops for schools across India to skill teachers to sail through the COVID-19 induced closure of schools</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> Quality Council of India, with support from the National Medicinal Plants Board Quality Council of India</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> 7th National Conclave for Laboratories on 23rd-24th Jan, 2018 at Hotel Hyatt Regency, Ahmedabad (video clippings)</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> FSSAI launches food regulatory portal on eve of World Food India 2017</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> Ayush Mark Publication</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> Traditional Knowledge system losing significance due to modernization</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> Swachh Survekshan Gramin 2016</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> Over 8,000 yoga professionals register with FQP in one year</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> Online Portal for EIA Consultant Organisations</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> First Mango Farm to Get Certified under INDGAP Scheme</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-box">
                                <h3> Adil Zainulbhai on Uber&#039;s global advisory panel</h3>
                                <a class="news-a" href="{{ route('frontend.history') }}">Read more</a>
                            </div>
                        </li>
                    </ul>
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