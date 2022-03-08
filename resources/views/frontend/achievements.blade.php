@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.about.box_title'))

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
                                        <li class="submenu-xcb "><a href="{{ route('frontend.fqp-in-news') }}">FQP in news</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.fqp-magazines') }}">FQP Magazines</a></li>
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
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.important-notices') }}">Important Notices/Circulars</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.achievements') }}">Achievements</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.updates-alerts') }}">Updates &amp; Alerts</a>
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
                <h1>Achievements</h1>
                <div class="descripton mb-30">
                    <p style="text-align:justify;"><strong>FQP’s Initiatives during COVID-19</strong></p>
                    <ul>
                        <li style="text-align:justify;"> PPE requirements of about 600 hospitals was consolidated and shared with CII for swift delivery through e-marketplace</li>
                        <li style="text-align:justify;">FQP team at DARPG has helped in fast tracking redressal of COVID-19 related grievances. More than 7000 grievances across various ministries have been cleared at an average disposal time of 1.57 days</li>
                    </ul>
                    <p style="text-align:justify;"><strong>Laboratories</strong></p>
                    <ul>
                        <li style="text-align:justify;">Worked with ICMR to expand COVID-19 related testing labs across India. </li>
                        <li style="text-align:justify;">1103 NABL accredited labs are listed now by ICMR for testing of COVID-19.</li>
                        <li style="text-align:justify;">More than 1125 labs accredited for RNA virus testing using RT-PCR to help the nation in fight against COVID-19.</li>
                        <li style="text-align:justify;">Accredited 87 food testing labs under integrated assessment with EIC, APEDA and FSSAI that will support in improving the quality of food testing in the country.</li>
                    </ul>
                    <p style="text-align:justify;"><strong>Hospitals,&amp; Healthcare</strong></p>
                    <ul>
                        <li style="text-align:justify;">Launched ABPMJAY quality certification programme with NHA for its empanelled hospitals across India. Bronze, Silver, Gold certification introduced</li>
                        <li style="text-align:justify;">Partnered with MoHFW to assess and first-time award of Kayakalp Certification to 653 private hospitals</li>
                    </ul>
                    <p style="text-align:justify;"><strong>Education</strong></p>
                    <ul>
                        <li style="text-align:justify;">Comprehensive assessment and evaluation of 5475 schools administered, aided and regulated by Govt. of NCT of Delhi, SDMC, EDMC, NDMC, NorthDMC and Delhi Cantonment Board under School Development Index</li>
                        <li style="text-align:justify;">Quality Assessment of 42 Navyug and NDMC Schools under New Delhi Municipal Council</li>
                        <li style="text-align:justify;">Assessment of 250 schools in Jhunjhunu and Sikar districts of Rajasthan under District Transformation Program of Piramal Foundation for Education Leadership (PFEL)</li>
                        <li style="text-align:justify;">Assessment &amp; evaluation of 1000 + residential school hostels across 12 districts of Odisha under ST &amp; SC Development, Minorities &amp; Backward Classes Welfare Department, Odisha</li>
                        <li style="text-align:justify;">Assessment &amp; Evaluated of Teaching practices of teachers against pertinent domains of Teaching Learning Process – Indian Schools in Oman </li>
                        <li style="text-align:justify;">Collaborations with Ministry of Education (MOE), National Commission for Protection of Child Rights (NCPCR), Municipal Corporation of Greater Mumbai(MCGM )and various State Education Departments towards Quality Intervention in the field of school education</li>
                        <li style="text-align:justify;">Carried teacher – learning process assessment of 2500 schools in states of Rajasthan, Delhi, and Maharashtra</li>
                        <li style="text-align:justify;">Launched FQP’s eLearning platform [eQuest: E-Quality Platform for Employability through Skill and Training]</li>
                        <li style="text-align:justify;">Conducted evaluation for Technical Education Quality Improvement Program by performing assessment covering 174 technical education institutes and 12 Affiliating Technical Universities across the nation against pre-defined indicators.</li>
                        <li style="text-align:justify;">Evaluation of 5475 schools administered, aided and regulated by Government of NCT of Delhi and its allied agencies</li>
                    </ul>
                    <p style="text-align:justify;"><strong>Environment &amp; Sustainability</strong></p>
                    <ul>
                        <li style="text-align:justify;">To ensure the accessibility of clean and functional toilets to all its citizens and to make the country Open Defecation Free, FQP certified 4204 ULBs as ODF, 1306 ULBs as ODF+, and 489 ULBs as ODF++.</li>
                        <li style="text-align:justify;">Assessed sites such as Statue of Unity and Gujarat Yatradhams on cleanliness and solid waste management to bring major changes in terms of sanitation.</li>
                        <li style="text-align:justify;">54 AAI Airports assessed on cleanliness, sanitation and single-use plastic ban parameters</li>
                    </ul>
                    <p style="text-align:justify;"><strong>Economy</strong></p>
                    <ul>
                        <li style="text-align:justify;">Contributed a chapter in this year’s Economic survey - Targeting Ease of Doing Business in India' which highlights systemic issues through case studies and illustrations. The chapter has interesting insights and data gathered through on-ground survey and secondary research. </li>
                        <li style="text-align:justify;">Third party sampling and testing of 20% of Coal produced in India by Coal India Limited. This has helped in standardizing the cost of coal mined in India based on its calorific value to non power customers.</li>
                        <li style="text-align:justify;">Partnered with GeM to sanitize the sellers providing products and services through a sophisticated video based assessment of OEMs ensuring high quality standards on the platform</li>
                    </ul>
                    <p style="text-align:justify;"><strong>Startups</strong></p>
                    <ul>
                        <li style="text-align:justify;">Conducted a three-layer evaluation of the Start-Up Village Entrepreneurship Programme in partnership with Ministry of Rural Development</li>
                        <li style="text-align:justify;">Conducted process, quality and impact assessment of 12 Atal Incubation Centres, 6 Established Incubation Centres and 285 Atal Tinkering Labs</li>
                    </ul>
                    <p style="text-align:justify;"><strong>MSMEs</strong></p>
                    <ul>
                        <li style="text-align:justify;">Financial support provided to 332 MSMEs, including 43 MSMEs owned by Women entrepreneurs under ZED Certification Scheme</li>
                        <li style="text-align:justify;">Formed 243 Lean Clusters; 93 Lean Clusters Successfully Completed under Lean Manufacturing Competitiveness Scheme</li>
                    </ul>
                    <p style="text-align:justify;"><strong>Infrastructure</strong></p>
                    <ul>
                        <li style="text-align:justify;">Ranked 720 railway stations across India to monitor cleanliness and sanitation initiatives to fulfill the Ministry of Railways mission of Swachh Rail, Swachh Bharat.</li>
                    </ul>
                    <p style="text-align:justify;"><strong>Agriculture/Farmers</strong></p>
                    <ul>
                        <li style="text-align:justify;">Food and Agriculture Organization (FAO), UN awarded FQP a 2-year project for “Development of Standards and Scheme for Good Agriculture Practice (GAP) Implementation and Certification in countries of SAARC</li>
                    </ul>
                    <p style="text-align:justify;"><strong>Poor and Vulnerable</strong></p>
                    <ul>
                        <li style="text-align:justify;">Partnered with NCST and conducted a diagnostic study in 3 districts of Jharkhand, Odisha, and Chhattisgarh. The data collected from these 20303 households was analyzed to frame policy recommendations towards increasing financial inclusion of Scheduled Tribes in India</li>
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