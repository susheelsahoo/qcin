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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.key-objectives') }}">Key Objectives</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://qcin.org/about-us">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Key Objectives</h1>
                <div class="descripton mb-30">
                    <p style="text-align:justify;">To achieve the Mission of QCI by playing a pivotal role in propagating, adoption and adherence to quality standards in all important spheres of activities including education, healthcare, environment protection, governance, social sectors, infrastructure sector and such other areas of organized activities that have significant bearing in improving the quality of life and well being of the citizens of India and without restricting its generality shall inter-alia include:</p>
                    <ol>
                        <li style="text-align:justify;">To lead nationwide quality movement in the country through National Quality Campaign aimed at creating awareness amongst citizens, empowering them to demand quality in all spheres of activities, and promoting and protecting their well being by encouraging manufacturers and suppliers of goods and service providers for adoption of and adherence to quality standards and tools.</li>
                        <li style="text-align:justify;">To develop apropos capacities at the level of Governments, Institutions and enterprises for implementing &amp; institutionalizing continuous quality improvement.</li>
                        <li style="text-align:justify;">To develop, establish &amp; operate National Accreditation programmes in accordance with the relevant international standards &amp; guides for the conformity assessment bodies certifying products, personnel, management systems, carrying out inspection testing, calibration &amp; medical laboratories, proficiency testing providers, reference material producers &amp; test facilities adhering to OECD Principles of Good Laboratory Practices and such other areas of organized activities that have significant bearing in improving the quality of life and well being of the citizens of India.</li>
                        <li style="text-align:justify;">To develop, establish and operate National Accreditation Programmes for various service sectors such as education, healthcare, environment protection, governance, social sectors, infrastructure sector, vocational training etc., to site a few, as may be required, based on national/ international standards and guidelines and where such standards are not available, to develop accreditation standards to support accreditation programmes.</li>
                        <li style="text-align:justify;">
                            To build capacities in the areas of regulation, conformity assessment and accreditation to overcome TBT/SPS constraints;
                            <ul>
                                <li>To establish and maintain strong linkages with international and regional fora such as International Laboratory Accreditation Cooperation (ILAC), International Accreditation Forum (IAF), Asia Pacific Laboratory Accreditation (APLAC), Pacific Accreditation Cooperation (PAC), International Society for Quality in Healthcare (ISQua), Organization for Economic Cooperation and Development (OECD) etc. and to participate in Plenary Sessions, Committee Meeting etc. in order to keep pace with the latest development and for promoting Multi-lateral Recognition Arrangements/Mutual acceptance of Data and</li>
                                <li>To undertake all the activities which promote Bi-lateral/ Multi-lateral Recognition Arrangements between QCI/ Constituent Boards and Accreditation Bodies in other countries.</li>
                            </ul>
                        </li>
                        <li style="text-align:justify;">To encourage development &amp; application of third party assessment model for use in government, regulators, organizations and society.</li>
                        <li style="text-align:justify;">To promote quality competitiveness of India’s enterprises especially MSMEs through adoption of and adherence to quality management standards and quality tools.</li>
                        <li style="text-align:justify;">Promoting the establishment of quality improvement and benchmarking centre, as a repository of best international / national practices and their dissemination among the industry in all the sectors.</li>
                        <li style="text-align:justify;">
                            To encourage industrial / applied research and development in the field of quality and dissemination of its result in relevant publication and trade journals;
                            <ul>
                                <li>To Publish books, literature &amp; periodicals and disseminate information related to the objectives of QCI and</li>
                                <li>To organize / participate in trade fairs, exhibitions, seminars etc. at National &amp; International fora.</li>
                            </ul>
                        </li>
                        <li style="text-align:justify;">To build capacities including development of appropriate quality accreditation mechanism for other emerging areas that have significant bearing in improving the quality of life and well being of the citizens of India such as food sector, oil &amp; gas, forestry, agriculture /animal husbandry, warehouse, pharmacy etc. or as the need may arise from time to time.</li>
                        <li style="text-align:justify;">To facilitate effective functioning of a National Information &amp; Enquiry Services on standards &amp; quality including an appeal mechanism to deal with unresolved complaints.</li>
                        <li style="text-align:justify;">To develop and operate an appeal mechanism to deal with unresolved complaints;<br />

                        </li>
                    </ol>
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