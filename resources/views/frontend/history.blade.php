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
                                    <a href="{{ route('frontend.history') }}">History</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.mission') }}">Mission</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.vision') }}">Vision</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.moa') }}">MOA</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.rules-regulation') }}">Rules And Regulations</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.key-objectives') }}">Key Objectives</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/about-us">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>History</h1>
                <div class="descripton mb-30">
                    <p style="text-align:justify;margin:0in 0in 10pt;"><span style="font-size:11pt;"><span style="background:#FFFFFF;"><span style="vertical-align:baseline;"><span style="line-height:115%;"><span style="font-family:Calibri, sans-serif;"><span style="font-size:10pt;"><span style="line-height:115%;"><span style="color:#000000;">The Quality Council of India (FQP) is a pioneering experiment of the Government of India in setting up organizations in partnership with the Indian industry.</span></span></span></span></span></span></span></span></p>
                    <p style="margin-bottom:3.75pt;text-align:justify;margin:0in 0in 10pt;"><span style="font-size:11pt;"><span style="background:#FFFFFF;"><span style="vertical-align:baseline;"><span style="line-height:115%;"><span style="font-family:Calibri, sans-serif;"><b><span style="font-size:10pt;"><span style="line-height:115%;"><span style="color:#000000;">Background</span></span></span></b></span></span></span></span></span></p>
                    <p style="text-align:justify;margin:0in 0in 10pt;"><span style="font-size:11pt;"><span style="background:#FFFFFF;"><span style="vertical-align:baseline;"><span style="line-height:115%;"><span style="font-family:Calibri, sans-serif;"><span style="font-size:10pt;"><span style="line-height:115%;"><span style="color:#000000;">Since 1992 a need had been felt for the establishment of an accreditation body in the country to establish internationally acceptable mechanism for recognition of conformity assessment results. With regards to laboratories, an accreditation body under the Ministry of Science &amp; Technology was already functioning. A committee which included various interested ministries and stakeholders including industries was established to make suitable recommendations. The work was coordinated by the then Department of Industrial Policy &amp; Promotion - DIPP ( now "Department for Promotion of Industries and Internal Trade" - DPIIT) and the recommendations were submitted to the Cabinet in 1996. Key recommendations included "the need for establishing an organization jointly by the Government and the industry" and "the need for the organization to be self-sustaining and be away from the government".</span></span></span></span></span></span></span></span></p>
                    <p style="text-align:justify;margin:0in 0in 10pt;"><span style="font-size:11pt;"><span style="background:#FFFFFF;"><span style="vertical-align:baseline;"><span style="line-height:115%;"><span style="font-family:Calibri, sans-serif;"><span style="font-size:10pt;"><span style="line-height:115%;"><span style="color:#000000;">Accepting the recommendations, the Cabinet Committee decided to set up Quality Council of India as a non-profit autonomous society registered under Societies Registration Act XXI of 1860 to establish an accreditation structure in the country and spread the quality movement in India by undertaking a National Quality Campaign.</span></span></span></span></span></span></span></span></p>
                    <p style="text-align:justify;margin:0in 0in 10pt;"><strong><span style="font-size:11pt;"><span style="background:#FFFFFF;"><span style="vertical-align:baseline;"><span style="line-height:115%;"><span style="font-family:Calibri, sans-serif;"><span style="font-size:10pt;"><span style="line-height:115%;"><span style="color:#000000;">The Chairperson of Quality Council of India since inception:</span></span></span></span></span></span></span></span></strong></p>
                    <table style="width:600px;">
                        <tbody>
                            <tr>
                                <td>Mr. Ratan N. Tata</td>
                                <td>1997 - 1999</td>
                            </tr>
                            <tr>
                                <td>Mr. Venu Srinivasan</td>
                                <td>1999 – 2001</td>
                            </tr>
                            <tr>
                                <td>Dr. R. A. Mashelkar</td>
                                <td>2001 – 2007</td>
                            </tr>
                            <tr>
                                <td>Mr. Ajay Shankar</td>
                                <td>2007 – 2010</td>
                            </tr>
                            <tr>
                                <td>Mr. Arun Maira</td>
                                <td>2010 – 2013 (Sept)</td>
                            </tr>
                            <tr>
                                <td>Mr. Saurabh Chandra</td>
                                <td>2013 (Oct 2013) – 2014 (Feb)</td>
                            </tr>
                            <tr>
                                <td>Mr. Amitabh Kant</td>
                                <td>2014 (March) – 2014 (Sep)</td>
                            </tr>
                            <tr>
                                <td>Mr. Adil Zainulbhai</td>
                                <td>2014 (Sep) till date</td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="text-align:justify;margin:0in 0in 10pt;"> </p>
                    <p><strong><span style="font-size:11pt;"><span style="background:#FFFFFF;"><span style="vertical-align:baseline;"><span style="line-height:115%;"><span style="font-family:Calibri, sans-serif;"><span style="font-size:10pt;"><span style="line-height:115%;"><span style="color:#000000;">The Secretary General of Quality Council of India since inception:</span></span></span></span></span></span></span></span></strong></p>
                    <table style="width:600px;">
                        <tbody>
                            <tr>
                                <td>Mr. Vijay Kumar Mediratta</td>
                                <td>18th Oct. 1998 to 14th Nov. 2003</td>
                            </tr>
                            <tr>
                                <td>Dr. Girdhar J. Gyani</td>
                                <td>3rd Dec. 2003 to 21st May 2012</td>
                            </tr>
                            <tr>
                                <td>Mr. B. Venkataraman</td>
                                <td>22nd May 2013 to 31st Aug. 2014</td>
                            </tr>
                            <tr>
                                <td>Dr. Ravi P. Singh</td>
                                <td>29th Sept. 2014 till date</td>
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