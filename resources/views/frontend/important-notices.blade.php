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
                                    <a href="{{ route('frontend.annual-reports') }}">Annual Reports</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="#">Publications</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-3" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="#">QCI in news</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.qci-magazines') }}">QCI Magazines</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.quality-best-practices') }}">Quality Best Practices</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.editorial') }}">Editorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="#">Gallery</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-4" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.gallery') }}">Image Gallery</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.video-gallery') }}">Video Gallery</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.important-notices') }}">Important Notices/Circulars</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.histachievementsory') }}">Achievements</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.updates-%26-alerts') }}">Updates &amp; Alerts</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-8" style="width:100%">
                                    <a href="{{ route('frontend.media-communications') }}">Media Communications</a>
                                </li>
                            </div>
                        </div>
                    </div>

                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Important Notices / Circulars</h1>
                <div class="descripton mb-30">
                    <ul>
                        <li style="text-align:justify;"><a href="#">Public notice for QCI</a></li>
                        <li style="text-align:justify;"><a href="#">An Illustrative Guide on COVID Appropriate Behaviours</a></li>
                        <li style="text-align:justify;">In view of the fire incidence in QCI Office in Engineers Bhawan, 2nd Floor, 2 Bahadur Shah Zafar Marg, New Delhi – 110002, the office of the (Secretary General, HR &amp; Admn. dept., Finance dept. &amp; NABCB) have been shifted to Indian Council for Child Welfare (ICCW) Building , 2nd Floor, 4-Deen Dayal Upadhyaya Marg New Delhi - 110002, till further orders and the phone lines/EPBX numbers are currently not working.</li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">List of hospitals that are AB PMJAY Quality Certified</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">List of NABET Accredited Ground Water Consultant Organizations</a></li>
                        <li>
                            <p style="text-align:justify;">Swachhata Pakhwada- 2020 from 1.11.2020 to 15.11.2020</p>
                            <ul>
                                <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Pledge</a></li>
                                <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Messages</a></li>
                                <li style="text-align:justify;"><a href="{{ route('frontend.name-of-the-winners-of-slogan-competition') }}" target="_blank" rel="noreferrer noopener">Result of Slogan Competition</a></li>
                            </ul>
                        </li>
                        <li style="text-align:justify;">Dr. Ravi Prakash Singh has rejoined at the post of Secretary General, QCI w.e.f. 29.9.2020 (forenoon)</li>
                        <li style="text-align:justify;"><a href="#">List of Assessed Organisations (Government and Private) under WASH Scheme </a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Education Survey: Blended and Online Learning- Future of Education: Insights on School &amp; Household Survey on Education in Times of COVID_19.</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">MoC Gazette Notification Mineral Concession (Amendment) Rule 2020 </a></li>
                        <li style="text-align:justify;"><a href=#" target="_blank" rel="noreferrer noopener">“Online Training on Workplace Assessment for Safety and Hygiene (WASH) Standard to mitigate COVID-19 risks” – Click to Register</a></li>
                        <li style="text-align:justify;"><a href="{{ route('frontend.workplace-assessment-for-safety-and-hygiene-(wash)') }}" target="_blank" rel="noreferrer noopener">Launch of Workplace Assessment for Safety and Hygiene (WASH) Scheme to help any organisation assess its preparedness to restart and run operations safely against COVID-19</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Mahamana Declarations &amp; Action Plan of The International Seminar on The Role of Ayush And COVID-19 Pandemic 2020.</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">NABET-FEED Online Workshops - Register Here</a></li>
                        <li style="text-align:justify;"><a href="#">Accreditation Scheme for Ground Water Consultant Organizations (GWCO)</a></li>
                    </ul>
                    <p style="text-align:justify;"> </p>
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