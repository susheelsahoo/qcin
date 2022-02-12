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
                                    <a href="{{ route('frontend.the-governing-council') }}">The Governing Council</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.the-governing-body') }}">The Governing Body</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.finance-committee') }}">Finance Committee</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.boards') }}">Boards</a>
                                </li>
                            </div>
                        </div>
                    </div>

                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Boards</h1>
                <div class="descripton mb-30">
                    <p style="text-align:justify;">As depicted in the Governance structure above, QCI coordinates its activities through five constituent Boards briefed below</p>
                    <h3 style="text-align:justify;">NABCB</h3>
                    <p style="text-align:justify;">The National Accreditation Board for Certification Bodies provides accreditation to Certification and Inspection Bodies based on assessment of their competence as per the Board's criteria and in accordance with International Standards and Guidelines. NABCB is internationally recognized and represents the interests of the Indian industry at international forums through membership and active participation.....<a href="{{ route('frontend.nabcb') }}">Read more</a></p>
                    <h3 style="text-align:justify;">NABET</h3>
                    <p style="text-align:justify;">At its inception, NABET began life as the National Accreditation Board for Auditors and Training (NABAT), which was set up in response to the emerging challenges in the conformity assessment arena with the mandate to establish and monitor the training and auditor’s registration process. National Accreditation Board for Auditors and Training (NABAT) started working as registrar for auditors and training courses operating in arena of conformity assessment area such as QMS and EMS.......<a href="{{ route('frontend.nabet') }}">Read more</a></p>
                    <h3 style="text-align:justify;">NABL</h3>
                    <p style="text-align:justify;">National Accreditation Board for Testing and Calibration of Laboratories (NABL) grants Accreditation (Recognition) of Technical competence of a Testing, Calibration, Medical Laboratory; Proficiency Testing Provider (PTP); and Reference Material Producer (RMP) for a specific scope following the international standards.....<a href="#">Read more</a></p>
                    <h3 style="text-align:justify;">NABH </h3>
                    <p style="text-align:justify;">National Accreditation Board for Hospitals &amp; Healthcare Providers (NABH) operates accreditation programme for healthcare organisations. The board is structured to cater to much desired needs of the consumers and to set benchmarks for progress of healthcare organizations......<a href="{{ route('frontend.nabh') }}">Read more</a></p>
                    <h3 style="text-align:justify;">NBQP</h3>
                    <p style="text-align:justify;">National Board for Quality Promotion (NBQP) works on the mission of promoting quality of life of the Citizens of India. The Board organizes events i.e., Quality Conclaves (National/Regional/Virtual) and Quality Month Competitions......<a href="{{ route('frontend.nbqp') }}">Read more</a></p>
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