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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
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
                                    <a href="icsts{{ route('frontend.history') }}">ICSTS</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="other-events{{ route('frontend.history') }}">Other Events</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://qcin.org/events">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Webinars</h1>
                <div class="descripton mb-30">
                    <p><strong>27th Webinar</strong><br />
                        Date: 19th December 2020<br />
                        Topic: Automations- Future of Pharma Industry
                    </p>
                    <p><strong>26th Webinar</strong><br />
                        Date: 12th November 2020<br />
                        Topic: Food Hygiene &amp; Food Safety – introduction to ISO 22000
                    </p>
                    <p><strong>25th Webinar</strong><br />
                        Date: 4th November 2020<br />
                        Topic: Webinar on Lean Manufacturing Practices for Cost Reduction and Efficiency Improvement
                    </p>
                    <p><strong>24th Webinar</strong><br />
                        Date: 2nd November 2020<br />
                        Topic: Creating Quality Mindset to sustain improvements
                    </p>
                    <p><strong>23rd Webinar</strong><br />
                        Date: 28th October 2020<br />
                        Topic: Business Continuity: Organizational Resilience through Pandemic Response Preparedness
                    </p>
                    <p><strong>22nd Webinar</strong><br />
                        Date: 23rd October 2020<br />
                        Topic: Low-Cost Automation”: Key to Post Pandemic production
                    </p>
                    <p><strong>21st Webinar</strong><br />
                        Date: 30th September 2020<br />
                        Topic: Artificial Intelligence(AI) for sustaining business after COVID-19
                    </p>
                    <p><strong>20th Webinar</strong><br />
                        Date: 28th September 2020<br />
                        Topic: Identifying the cost-based opportunity areas for performance (productivity, efficiency &amp; effectiveness) improvement.
                    </p>
                    <p><strong>19th Webinar</strong><br />
                        Date: 26th September 2020<br />
                        Topic: Automation for MSMEs
                    </p>
                    <p><strong>18th Webinar</strong><br />
                        Date: 11th September 2020<br />
                        Topic: Restore, Rethink, Redesign - Supply Chain &amp; Logistics during COVID-19 &amp; Beyond
                    </p>
                    <p><strong>17th Webinar</strong><br />
                        Date: 4th September 2020<br />
                        Topic: Give your profits a Power Boost with the Strategic Planning &amp; ‘Triple Triangle Growth’ Model used by the World’s Best Regarded Companies
                    </p>
                    <p><strong>16th Webinar</strong><br />
                        Date: 31st August 2020<br />
                        Topic: TL 9000 – Telecommunication QMS (Hardware, Software and Services).
                    </p>
                    <p><strong>15th Webinar</strong><br />
                        Date: 31st July 2020<br />
                        Topic: Implementation of SA8000:2014 in the new normal and drive towards sustainability.
                    </p>
                    <p><strong>14th Webinar</strong><br />
                        Date: 4th July 2020<br />
                        Topic: How the Risk Management and Management Systems helps the organizations to manage the COVID-19 situation.
                    </p>
                    <p><strong>13th Webinar</strong><br />
                        Date: 2nd July 2020<br />
                        Topic: Uplifting business operations through Digital transformation: Building resilient workplace for future uncertainties.
                    </p>
                    <p><strong>12th Webinar</strong><br />
                        Date: 26th June 2020<br />
                        Topic: Approach to safely relaunching the operations for returning to normalcy
                    </p>
                    <p><strong>11th Webinar</strong><br />
                        Date: 8th June 2020<br />
                        Topic: FINANCING OPTION FOR MSMEs AND ECONOMIC REVIVAL DURING COVID-19 CRISIS<br />
                        YouTube link: <a href="https://youtu.be/PR38t8NI5_0">https://youtu.be/PR38t8NI5_0</a>
                    </p>
                    <p><strong>10th Webinar</strong><br />
                        Date: 3rd June 2020<br />
                        Topic: Adopting Digital Safety in Social Distancing times
                    </p>
                    <p><strong>9th Webinar</strong><br />
                        Date: 22nd May 2020<br />
                        Topic: Ayurveda: New Harbinger of Hope in Present Health Crisis
                    </p>
                    <p><strong>8th Webinar</strong><br />
                        Date: 21st May 2020<br />
                        Topic: Insight into future of MSME’s QMS approach to Next normal<br />
                        YouTube link: <a href="https://youtu.be/jQQa23icHa4">https://youtu.be/jQQa23icHa4</a>
                    </p>
                    <p><strong>7th Webinar</strong><br />
                        Date: 15th May 2020<br />
                        Topic: DIGITAL SOLUTION TO HANDLE REGULATORY &amp; QUALITY CHALLENGES IN PHARMA INDUSTRY<br />
                        YouTube Link: <a href="https://youtu.be/ILuLf_lVo68 ">https://youtu.be/ILuLf_lVo68 </a>
                    </p>
                    <p><strong>6th Webinar</strong><br />
                        Date: 07th May 2020<br />
                        Topic: ENABLING PEAK PERFORMANCE FOR CHEMICAL INDUSTRY THROUGH DIGITAL SOLUTION<br />
                        YouTube link: <a href="https://youtu.be/-i31iz0bUo4">https://youtu.be/-i31iz0bUo4</a>
                    </p>
                    <p><strong>5th Webinar</strong><br />
                        Date: 1st May 2020<br />
                        Topic: Preparing for a new normal (Re-starting the operation and business after COVID-19)<br />
                        YouTube link: <a href="https://youtu.be/BInnncyVDtE ">https://youtu.be/BInnncyVDtE </a>
                    </p>
                    <p><strong>4th Webinar</strong><br />
                        Date: 29th April 2020<br />
                        Topic: Opportunities and challenges to integrate MSME with Industry 4.0
                    </p>
                    <p><strong>3rd Webinar</strong><br />
                        Date: 27th April 2020<br />
                        Topic: APPROPRIATE COMMUNICATION IN MEDICAL HEALTHCARE<br />
                        YouTube link: <a href="https://youtu.be/x0xTGQvS1Mo ">https://youtu.be/x0xTGQvS1Mo </a>
                    </p>
                    <p><strong>2nd Webinar</strong><br />
                        Date: 25th April 2020<br />
                        Topic: FOOD PROCESSING SECTOR IN LIGHT OF COVID-19 SCENERIO &amp; OPPORTUNITIES FOR STARTUPS<br />
                        YouTube link: <a href="https://youtu.be/VJmVN4C_fuo ">https://youtu.be/VJmVN4C_fuo </a>
                    </p>
                    <p><strong>1st Webinar</strong><br />
                        Date: 13th April 2020<br />
                        Topic: WHAT IS YOUR CHOICE POST – COVID -19?
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