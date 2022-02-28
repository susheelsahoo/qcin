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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
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
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.other-events') }}">Other Events</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/events">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Workshops</h1>
                <div class="descripton mb-30">
                    <table cellpadding="7" cellspacing="0" class="table-responsive" width="601">
                        <tbody>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>Gujrat - <a>03 days Awareness workshop on Accreditation Standard for Quality School Governance</a></b></p>
                                    <ul>
                                        <li>When: 16th Oct 2019 – 18<sup>th</sup> Oct 2019</li>
                                        <li>Where: Gujrat</li>
                                        <li>Details: <a href="#" target="_blank" rel="noreferrer noopener">Gujarat 16th to 18th October.pdf</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>Delhi - 03 days Awareness workshop on Accreditation Standard for Quality School Governance</b></p>
                                    <ul>
                                        <li>When: 10th Oct 2019 – 12<sup>th</sup> Oct 2019</li>
                                        <li>Where: New Delhi</li>
                                        <li>Details: <a href="#" target="_blank" rel="noreferrer noopener">Delhi 10th to 12th October</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>How to reduce cost of quality using Industry 4.0</b></p>
                                    <ul>
                                        <li>When: 1st Oct 2019</li>
                                        <li>Where: Online</li>
                                        <li>Details: <a href="#" target="_blank" rel="noreferrer noopener">http://nbqp.fqp.org.in/workshop-event.php</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>Enhancing Eﬃciency &amp; Mitigating Risks at Workplace</b></p>
                                    <ul>
                                        <li>When: To be announced</li>
                                        <li>Where: New Delhi</li>
                                        <li>Details: <a href="#" target="_blank" rel="noreferrer noopener">http://nbqp.fqp.org.in/workshop-event.php</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>One-day awareness workshop on Energy Management System ISO 50001 :2018</b></p>
                                    <ul>
                                        <li>When: 23<sup>rd</sup> Nov 2019 (planned)</li>
                                        <li>Where: Delhi/NCR</li>
                                        <li>Details: <a href="#" target="_blank" rel="noreferrer noopener">http://nbqp.fqp.org.in/workshop-event.php</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>One day awareness workshop on Occupational Health &amp; Safety Management System, OHSMS, ISO 45000: 2018</b></p>
                                    <ul>
                                        <li>When: 30<sup>th</sup> Nov 2019 (planned)</li>
                                        <li>Where: Delhi/NCR</li>
                                        <li>Details: <a href="#" target="_blank" rel="noreferrer noopener">http://nbqp.fqp.org.in/workshop-event.php</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>Half day awareness program on Road Safety management</b></p>
                                    <ul>
                                        <li>When: December 2019 (planned)</li>
                                        <li>Where: To be announced</li>
                                        <li>Details: <a href="#" target="_blank" rel="noreferrer noopener">http://nbqp.fqp.org.in/workshop-event.php</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>Low cost automation on Quality function deployment</b></p>
                                    <ul>
                                        <li>When: January 2020 (planned)</li>
                                        <li>Where: Gurugram</li>
                                        <li>Details: <a href="#">http://nbqp.fqp.org.in/workshop-event.php</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>Understanding core technique of TS 16949)</b></p>
                                    <ul>
                                        <li>When: February 2020 (planned)</li>
                                        <li>Where: Gurugram</li>
                                        <li>Details: <a href="#">http://nbqp.fqp.org.in/workshop-event.php</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" width="585">
                                    <p><b>TRIZ</b></p>
                                    <ul>
                                        <li>When: March 2020 (planned)</li>
                                        <li>Where: Pune</li>
                                        <li>Details: <a href="#" target="_blank" rel="noreferrer noopener">http://nbqp.fqp.org.in/workshop-event.php</a></li>
                                    </ul>
                                    <p> </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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