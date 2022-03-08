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
                                    <a href="{{ route('frontend.padd-schemes') }}">PADD Schemes</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.workplace-assessment-for-safety-and-hygiene') }}">WASH Scheme</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/schemes">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>PADD SCHEMES</h1>
                <div class="descripton mb-30">
                    <p><strong>Schemes for Agriculture</strong></p>
                    <ul>
                        <li><a href="{{ route('frontend.india-good-agriculture-practices') }}" target="_blank" rel="noreferrer noopener">India Good Agricultural Practices Certification Scheme (IndG.A.P.)</a></li>
                        <li><a href="{{ route('frontend.voluntary-certification-scheme-for-medicinal-plant-produce-vcsmpp') }}" target="_blank" rel="noreferrer noopener">Voluntary Certification Scheme for Medicinal Plant Produce (VCS-MPP)</a></li>
                    </ul>
                    <p><strong>Schemes for Food</strong></p>
                    <ul>
                        <li><a href="{{ route('frontend.HRAA') }}" target="_blank" rel="noreferrer noopener">Hygiene Rating Audit Agency_ HRS (Owned by FSSAI)</a></li>
                        <li><a href="{{ route('frontend.indiaghp-indiahaccp-schemes') }}" target="_blank" rel="noreferrer noopener">IndiaGHP &amp; IndiaHACCP Schemes </a></li>
                    </ul>
                    <p><strong>Schemes for Healthcare Practices, Products, and Professionals</strong></p>
                    <ul>
                        <li><a href="{{ route('frontend.voluntary-certification-scheme-for-ayush-products') }}" target="_blank" rel="noreferrer noopener">Voluntary Certification Scheme for AYUSH Products (AYUSH Mark)</a></li>
                        <li><a href="{{ route('frontend.voluntary-certification-scheme-for-traditional-community-healthcare-providers-tchp') }}" target="_blank" rel="noreferrer noopener">Voluntary Certification Scheme for Traditional Community Healthcare Providers (VCS-TCHP)</a></li>
                    </ul>
                    <p><strong>Schemes for Industry and Infrastructure</strong></p>
                    <ul>
                        <li><a href="{{ route('frontend.certification-scheme-for-unmanned-aircraft-systems') }}" target="_blank" rel="noreferrer noopener">Certification Scheme for Unmanned Aircraft Systems (UAS)</a></li>
                        <li><a href="{{ route('frontend.indian-certification-for-medical-devices-icmed-scheme') }}" target="_blank" rel="noreferrer noopener">Indian Certification for Medical Devices (ICMED) Scheme</a></li>
                        <li><a href="{{ route('frontend.ready-mix-concrete-plant-certification-scheme-rmcpcs') }}" target="_blank" rel="noreferrer noopener">Ready Mix Concrete Plant Certification Scheme (RMCPCS)</a></li>
                        <li><a href="{{ route('frontend.security-star-agencies-rating-scheme') }}" target="_blank" rel="noreferrer noopener">Security sTar Agencies Rating Scheme</a></li>
                    </ul>
                    <p> </p>
                    <div class="left_"></div>
                    <div class="descripton1 mb-30">
                        <h2> </h2>
                        <div class="col-md-12">
                            <p> </p>
                        </div>
                        <p><br />

                        </p>
                        <p> </p>
                    </div>
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