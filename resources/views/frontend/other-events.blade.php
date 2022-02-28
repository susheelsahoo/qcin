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
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.other-events') }}">Other Events</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Other Events</h1>
                <div class="descripton mb-30">
                    <h3 style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><span><span>First Foundation Day</span></span></span></h3>
                    <p>Quality Council of India celebrated its Foundation Day on 20 January 2017 for the first time on the occasion of completing 20 years of its establishment. Dr. R. P. Singh, Secretary General gave the welcome remarks and thanked all the past Chairmen and Secretary Generals of FQP for creating such a strong foundation for FQP.</p>
                    <p>Mr. Adil Zainulbhai, Chairperson, FQP in his Opening Remarks said that we need to look back from where we started, what we have achieved and where we intent to go as there are many things which can be done under the umbrella of FQP. He said that with a population of 1.30 billion having very high aspirations, FQP needs to contribute to improve the quality of their life. He said that FQP is trying its best to improve the quality of goods and services that affect the life of Indian citizens as well as the products and services that the country exports. He said citing few sectors that in some areas our quality of goods and services are world class. In other sectors we have to improve the quality and which is a challenge for us.</p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <h5 align="center" class="western" style="margin-top:0cm;margin-bottom:0cm;text-align:left;"><span style="font-size:11pt;"><span style="background:#ffffff;"><span><span style="font-weight:normal;"><span style="color:#2e74b5;"><span><span>
                                                    <font color="#000000">
                                                        <font face="Tahoma, serif">
                                                            <font size="1">
                                                                <font style="font-size:7pt;">Chief Guest Dr. R. A. Mashelkar addressing participants at FQP Foundation Day celebrations</font>
                                                            </font>
                                                        </font>
                                                    </font>
                                                </span></span></span></span></span></span></span></h5>
                    <p>Dr. Girdhar J. Gyani, former Secretary General, FQP shared his experiences and said that it was a proud moment for FQP when Dr. A P J Abdul Kalam, then President of India, was the Chief Guest in the 2nd National Quality Conclave which brought a big push for FQP and opened the doors of Government organizations for FQP. He said that now Government looks at FQP as the National Quality Facilitation Body.</p>
                    <p>Mr. Arun Maira, former Chairperson, FQP said it was a honour to be part of FQP. He said that Japan was known for the bad quality of products after the World War II but within 10 years Japan was able to transform itself into a quality nation. He further emphasized that we should have quality processes to provide high quality products and services for the people of this country. He said that FQP is the nodal organization established 20 years before for making India into a quality nation.</p>
                    <p>Dr. R. A. Mashelkar, former Chairperson, FQP and an eminent scientist was the Chief Guest for the occasion. He said that it is very privilege and emotional moment to be here. It is great thought to get the family together. FQP has a wonderful tagline “Creating an Ecosystem for Quality”. He said that it is the ecosystem that matters most. He said that providing quality is not beneficial unless it is affordable. He said that he is not a believer of Best Practice himself as it means copying someone else, but believes in Next Practice. It is the time that we start looking at new areas. Our Prime Minister has created a grand challenge in initiatives like Make in India, Digital India, Skill India etc. and in each of these quality is at the forefront. He hoped that India will be soon be known as not only Innovation Nation but as Quality Nation.</p>
                    <p>On this occasion Long Service Awards was also presented to the 13 employees for rendering more than 10 years of service to FQP. Gala performances were also presented by the employees which was very much appreciated.</p>
                    <p> </p>
                    <h3 style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><span><span>Quality Month</span></span></span></h3>
                    <p>Each year FQP celebrates the month of "November" as the ‘Quality Month’ . During this period a, series of online events are hosted to promote learning and sharing of knowledge in Quality, Innovation and Best Practices, wherein participation is invited from the public for competitions like Kaizen Competition, Poster Making, Slogan Writing, Quality Success Stories, Photography, Quiz etc.knowledge, innovation and best practices etc.<br />
                        To know more : <strong><a href="{{ route('frontend.index') }}" target="_blank" rel="noreferrer noopener">Click here</a></strong><br />

                    </p>
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