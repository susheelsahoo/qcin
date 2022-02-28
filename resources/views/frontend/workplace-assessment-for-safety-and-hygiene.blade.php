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
                                    <a href="{{ route('frontend.padd-schemes') }}">PADD Schemes</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
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
                <h1>Workplace Assessment for Safety and Hygiene (WASH)</h1>
                <div class="descripton mb-30">
                    <h3 style="font-size:150%;color:rgb(0,0,0);">A Scheme by Quality Council of India to help any organisation assess its preparedness to restart and run operations safely against COVID-19</h3>
                    <h3 style="text-align:justify;">Introduction</h3>
                    <p style="text-align:justify;">The post-virus business landscape will clearly include a larger focus on health, safety and hygiene conditions of employees, customers and public at large. India’s decision to start opening up the economy in a staggered manner, while laudable, requires a plan to make sure that exceptions are minimized and recurrences of spread are strategically isolated. The positives of the lockdown cannot be afforded to be negated and therefore, there is a need to bring specific standards/protocols for the business organizations, institutions etc. to ensure that they are able to operate safely with little or no instances of recurrence. This requires a few imperative priorities for the organizations/institutions as mentioned below:</p>
                    <ul>
                        <li style="text-align:justify;">Ensuring safe operations and workplace for safeguarding health and safety of employees, customers and public.</li>
                        <li style="text-align:justify;">Complying with all new COVID-19 related requirements from regulatory/health authorities and/or other Government bodies.</li>
                        <li style="text-align:justify;">Ensuring business continuity in operations to serve customers and protect businesses.</li>
                    </ul>
                    <p style="text-align:justify;">For the benefit of citizens and industry, FQP, along with industry stakeholders, has developed a harmonized standard “Workplace Assessment for Safety and Hygiene” (WASH)” to help the organizations assess their preparedness to restart and run their operations safely.</p>
                    <p style="text-align:justify;">This standard is applicable for assessment at any workplace which has been allowed to operate.</p>
                    <p style="text-align:justify;">The assessment can be done as an on-site assessment or remotely through a virtual system of assessment by trained assessors. The assessment report generated will provide the applicant with an objective assessment of the safety and hygiene measures undertaken by them to mitigate the risk of COVID-19 infection.</p>
                    <p style="text-align:justify;">DOCUMENTS RELATED TO WASH SCHEME<br />
                        The applicant organization(s) desirous of getting their workplace assessed under this scheme can contact any of the registered Assessment Agencies from the list given below for the assessment. The assessment agency shall guide the applicant organization(s) through the process. The documents given below shall be used for reference, application and assessment:
                    </p>
                    <ul>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">WASH Scheme Document</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Standard and Guidance Document</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Scheme Process-Flow Document</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Workplace Assessment Application Form</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Self-Assessment Checklist</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Site-Assessment Checklist &amp; Report</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Fee Structure</a></li>
                    </ul>
                    <h4 style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">“Online Training on Workplace Assessment for Safety and Hygiene (WASH) Standard to mitigate COVID-19 risks” – Click to Register</a></h4>
                    <h4 style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">List of Assessed Organisations (Government and Private) under WASH Scheme</a></h4>
                    <p style="text-align:justify;"><br />
                        List of Registered Assessment Agencies <a href="#" target="_blank" rel="noreferrer noopener"> Click Here</a>
                    </p>
                    <p style="text-align:justify;">For prospective Assessment Agencies<br />
                        NABCB accredited CBs/IBs interested to apply for the registration under this scheme as an Assessment Agency may send the filled application form to wash@fqpn.org
                    </p>
                    <ul>
                        <li style="text-align:justify;">Application Form for Registration of Assessment Agencies <a href="#" target="_blank" rel="noreferrer noopener">Click Here</a></li>
                        <li style="text-align:justify;">Assessor Competence Criteria <a href="#" target="_blank" rel="noreferrer noopener">Click Here</a></li>
                    </ul>
                    <p>For more information please write to <a href="#">wash@fqpn.org</a></p>
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