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
                                    <a href="{{ route('frontend.national-quality-conclave') }}">National Conclaves</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.regional-quality-conclave') }}">Regional Conclaves</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.virtual-quality-conclave') }}">Virtual Conclaves</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/conclaves">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>National Quality Conclaves</h1>
                <div class="descripton mb-30">
                    <ul>
                        <li>
                            <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">12th National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Leveraging Quality to drive Economic and Social Development</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 21st – 22nd September 2017</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The 12th National Quality Conclave successfully held on 21 st – 22 nd September 2017 at Hotel Le Meridien, New Delhi. Our theme being “Leveraging Quality to drive Economic and Social Development”. The conclave is organised to pay particular attention for improving the quality of public services in the fields such as health protection, education, data and transport infrastructure, through a collaborative approach among all the stakeholders</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">11th National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Improving Quality for Our 1.25 Billion Citizens</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 19th – 20<sup>th</sup> August 2016</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The conclave is organised to pay particular attention for improving the quality of public services in the fields such as health protection, education, data and transport infrastructure, through a collaborative approach among all the stakeholders</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li>
                            <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">10th National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Creating an Eco system for the World Class Quality</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 7th – 8<sup>th</sup> August 2015</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The conclave is organised to pay particular attention for improving the quality of public services. It discussed the challenges and successful strategies for an effective ecosystem essential to achieve the stringent Quality targets that India needs</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li>
                            <h4 style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">9th National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: ‘Build and Sustain a Culture of Excellence through Collaborative Effort’</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 15th – 16<sup>th</sup> April 2014</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The conclave focused on the fact that results of quality initiative can only be achieved and sustained through collaboration among all stakeholders</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">8th National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: ‘Value Creation through Quality at Grassroots’</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 8th – 9<sup>th</sup> March 2013</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The Conclave focused on the challenges of taking quality initiatives at the grassroot, leading to improvement of quality of life</span><br />

                    </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">
                                <font color="#212529">
                                    <font face="Arial, serif"><b><span style="background:#ffffff;">7th National Quality Conclave</span></b></font>
                                </font>
                            </span></li>
                    </ul>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Improving Quality of Public Services: The Role of Public and Private Sectors</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 27th – 28<sup>th</sup> March 2012</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The conclave was organised to pay particular attention for improving the quality of public services in the fields such as health protection, education, data and transport infrastructure</span><br />

                    </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">6th National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Future of Quality – the National Agenda</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 11<sup>th</sup> – 12<sup>th</sup> February 2011</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The conclave focused on exploring the future role of quality in order to respond to national initiatives on key issues for ensuring national wellbeing</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li>
                            <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">5th National Quality Conclave</span></b></font>
                                    </font>
                                </span></p>
                        </li>
                    </ul>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Leveraging Quality for Good Governance</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 19<sup>th</sup> – 20<sup>th</sup> February 2010</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The objective of the Conclave was to provide a forum for sharing new ideas, deliberating on issues, challenges and the road ahead that would attempt to change the quality</span><br />

                    </p>
                    <ul>
                        <li>
                            <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">4th National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Quality for Empowering the Billion</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 5<sup>th</sup> – 6<sup>th</sup> February 2009</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The conclave focused on exploring the roles and responsibilities that quality is taking in order to respond to national initiatives</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">3th National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Quality for National Well Being</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 16<sup>th</sup> – 17<sup>th</sup> February 2008</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The conclave explored means for improving quality of life for all coupled with value system. It felt that it was essential to ensure that all the citizens</span><br />

                    </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">2nd National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Vision 2020 for Quality India</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 09<sup>th</sup> – 10<sup>th</sup> February 2007</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: The objectives of this conclave were to make Indian industry aware of its responsibilities to meet the highest international standards and compete in the world market. The Chief Guest, <b>Shri</b> <b>A P J Abdul Kalam, President of India</b> said "FQP must become an organization serving the one billion people of the country. My best wishes to all for success in the mission of promoting prosperity through quality"</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li>
                            <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">
                                    <font color="#212529">
                                        <font face="Arial, serif"><b><span style="background:#ffffff;">1st National Quality Conclave</span></b></font>
                                    </font>
                                </span></h4>
                        </li>
                    </ul>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">What: Global Competitiveness</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Where: New Delhi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">When: 2007</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: In this inaugural Conclave delegates called for a master plan to bring Quality assurance to the unorganized rural sector within the next three years.</span></p>
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