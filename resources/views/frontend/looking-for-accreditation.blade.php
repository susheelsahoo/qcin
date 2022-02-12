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
                                    <a href="#">Udyog Manthan</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.schemes') }}">Schemes</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-3" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.padd-schemes') }}">PADD Schemes</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.workplace-assessment-for-safety-and-hygiene-(wash)') }}">WASH Scheme</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.projects') }}">Projects</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-4" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.ppid-projects') }}">PPID Projects</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.padd-projects') }}">PADD Projects</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.events') }}">Events</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-5" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.conclaves') }}">Conclaves</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.workshops') }}">Workshops</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.webinars') }}">Webinars</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.training') }}">Trainings</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.icsts') }}">ICSTS</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.other-events') }}">Other Events</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.looking-for-accreditation') }}">Accreditations</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="membership{{ route('frontend.history') }}">Membership</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-8" style="width:100%">
                                    <a href="{{ route('frontend.certifications') }}">Certifications</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-9" style="width:100%">
                                    <a href="{{ route('frontend.learning') }}">Learning</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-10" style="width:100%">
                                    <a href="{{ route('frontend.awards') }}">Awards</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-11" style="width:100%">
                                    <a href="#">CPGRAMS</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-12" style="width:100%">
                                    <a href=#">India PSS Platform</a>
                                </li>
                            </div>
                        </div>
                    </div>

                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Accreditation Schemes</h1>
                <div class="descripton mb-30">
                    <h3 style="margin:0in 0in 8pt;">Accreditation Schemes of NABCB</h3>
                    <ul>
                        <li>
                            <small><big>Management Systems</big></small>
                            <ul>
                                <li>
                                    <small><big>Quality Management Systems (QMS)</big></small>
                                    <ul>
                                        <li><small><big>QMS for Medical Devices (MDQMS)</big></small></li>
                                        <li><small><big>Educational Organizations Management Systems (EOMS)</big></small></li>
                                        <li><small><big>QMS for Primary Packaging</big></small></li>
                                    </ul>
                                </li>
                                <li><small><big>Environmental Management Systems (EMS)</big></small></li>
                                <li><small><big>Occupational Health &amp; Safety Management Systems (OHSMS)</big></small></li>
                                <li>
                                    <small><big>Food Safety Management Systems (FSMS)</big></small>
                                    <ul>
                                        <li><small><big>FSSC 22000</big></small></li>
                                    </ul>
                                </li>
                                <li><small><big>Energy Management Systems (EnMS)</big></small></li>
                                <li>
                                    <small><big>Information Security Management Systems (ISMS)</big></small>
                                    <ul>
                                        <li><small><big>Privacy Information Management Systems (PIMS)</big></small></li>
                                    </ul>
                                </li>
                                <li><small><big>Information Technology Service Management Systems (ITSMS)</big></small></li>
                                <li><small><big>Trustworthy Digital Repository Management Systems (TDRMS)</big></small></li>
                                <li><small><big>Road Traffic Safety Management Systems (RTSMS)</big></small></li>
                                <li><small><big>Business Continuity Management Systems (BCMS)</big></small></li>
                                <li><small><big>Anti- Bribery Management Systems (ABMS)</big></small></li>
                                <li><small><big>Asset Management Systems (AMS)</big></small></li>
                            </ul>
                        </li>
                        <li><small><big>Inspection</big></small></li>
                        <li><small><big>Personnel Certification </big></small></li>
                        <li>
                            <small><big>Product Certification (PCB)</big></small>
                            <ul>
                                <li><small><big>Global G.A.P</big></small></li>
                                <li><small><big>Best Aquaculture Practices (B.A.P)</big></small></li>
                                <li><small><big>British Retail Consortium (BRC)</big></small></li>
                                <li><small><big>Network for Certification and Conservation of Forest (NCCF)</big></small></li>
                                <li><small><big>Greenhouse Gases (GHG) Validation and Verification</big></small><br />

                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr />
                    <h3>Accreditation Schemes of NABH</h3>
                    <ul>
                        <li>
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Hospitals</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><samp><tt><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Small Healthcare Organisations</span></span></span></a></big></tt></samp></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Blood Banks</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Blood Storage Centre</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Medical Imaging Services</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Dental Health Care Service Providers</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Oral Substitution Therapy (OST) Centre</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Allopathic Clinics</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for AYUSH Hospitals</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Community Health Centres</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Primary Health Centres</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Wellness Centre</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Clinical Trial (Ethics Committees)</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Panchakarma Clinics</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Eye Care Organisations</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation Integrated Rehabilitation Centres For Addicts (IRCAs)</span></span></span></a></big></p>
                        </li>
                    </ul>
                    <hr />
                    <h3>Accreditation Schemes of NABET</h3>
                    <ul>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for School (Quality School Governance)</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation for Environmental Impact Assessment (EIA) Consultant Organizations</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation Scheme for Ground Water Consultant Organizations (GWCO)</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Accreditation of Consultant Organisation</span></span></span></a></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>MSME Lean Manufacturing Scheme</span></span></span></a></big></p>
                        </li>
                    </ul>
                    <hr />
                    <h3>Accreditation Schemes of NABL</h3>
                    <ul>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><span style="font-size:11pt;"><span style="line-height:107%;"><span><a href="#" target="_blank" rel="noreferrer noopener">Accreditation for Testing, Calibration and Medical Testing Laboratories; Proficiency Testing Providers; and Reference Material Producers</a></span></span></span></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><span style="font-size:11pt;"><span style="line-height:107%;"><span>Testing Laboratories as per ISO/IEC 17025</span></span></span></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><span style="font-size:11pt;"><span style="line-height:107%;"><span>Calibration Laboratories as per ISO/IEC 17025</span></span></span></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><span style="font-size:11pt;"><span style="line-height:107%;"><span>Medical Testing Laboratories as per ISO 15189</span></span></span></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><span style="font-size:11pt;"><span style="line-height:107%;"><span>Proficiency Testing Provider(PTP) as per ISO/IEC 17043</span></span></span></big></p>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><span style="font-size:11pt;"><span style="line-height:107%;"><span>Reference Material Producers (RMP) as per ISO 17034</span></span></span></big></p>
                        </li>
                    </ul>
                    <hr />
                    <h3>Registration Schemes of NBQP</h3>
                    <ul>
                        <li style="margin:0in 0in 8pt;">
                            <h3><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Management Systems Course Registration Scheme</span></span></span></a></big></h3>
                        </li>
                        <li style="margin:0in 0in 8pt;">
                            <p><big><a href="#" target="_blank" rel="noreferrer noopener"><span style="font-size:11pt;"><span style="line-height:107%;"><span>Auditor/Consultant Registration Scheme</span></span></span></a></big></p>
                        </li>
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