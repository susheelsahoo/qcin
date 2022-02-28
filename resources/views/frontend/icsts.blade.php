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
                                    <a href="workshops{{ route('frontend.virtual-quality-conclave') }}">Workshops</a>
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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.icsts') }}">ICSTS</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="other-events{{ route('frontend.icsts') }}">Other Events</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/events">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>ICSTS</h1>
                <div class="descripton mb-30">
                    <p class="western" style="margin-top:0.07cm;margin-bottom:0cm;text-align:justify;"><span style="line-height:107%;"><span><span>The International Convention on Sustainable Trade and Standards (ICSTS) is convened by the Quality Council of India in collaboration with the United Nations Forum on Sustainability Standards, and with a request for patronage to the Ministry of Commerce &amp; Industry, Government of India. It was first of its kind multi-stakeholder Convention in the world dedicated solely to the practical questions of leveraging trade, standards, and global value chains as engines of sustainable development. The ICSTS has been convened on 17 and 18 September 2018 at the Andaz, New Delhi, India.</span></span></span></p>
                    <p style="margin-bottom:0.28cm;text-align:justify;"><span style="line-height:107%;"><span><span>The Convention has committed participation from the Steering Committee members of the UNFSS, which include the UNCTAD, ITC, UNIDO, FAO, and UNE. Participation of high-level governmental and intergovernmental participation from SAARC, ASEAN, AU, OECD, EU, WTO, members of state governments in India, stakeholders from international and national businesses, policy-making, research institutions and think-tanks, standards organizations &amp; alliances, national standards bodies, major industry associations from around the world, producers and MSMEs who form different parts of value chains, smallholders, civil society and major group stakeholders is also due at the Convention. Know more:<a href="http://icsts.fqp.org.in/" target="_blank" rel="noreferrer noopener"> https://icsts.fqp.org.in/</a></span></span></span></p>
                    <p style="margin-bottom:0.28cm;text-align:justify;"><span style="line-height:107%;"><span><span>Glimplses: </span></span></span></p>
                    <p style="margin-bottom:0.28cm;text-align:justify;"><span style="line-height:107%;"><span><span><a href="https://drive.google.com/drive/folders/14rVzXC9NnMK6reNCyQ5-GxZi4rdzJ1B7" style="color:#0563c1;" target="_blank" rel="noreferrer noopener">https://drive.google.com/drive/folders/</a></span></span></span></p>
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