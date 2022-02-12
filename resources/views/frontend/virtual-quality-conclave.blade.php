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
                                    <a href="{{ route('frontend.national-quality-conclave') }}">National Conclaves</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.regional-quality-conclave') }}">Regional Conclaves</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.virtual-quality-conclave') }}">Virtual Conclaves</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://qcin.org/conclaves">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Virtual Quality Conclave</h1>
                <div class="descripton mb-30">
                    <ul>
                        <li>
                            <h4>4th Virtual Quality Conclave</h4>
                        </li>
                    </ul>
                    <p>What: Reconﬁguration of School Education in the Light of National Education Policy (NEP) - 2020<br />
                        Where: Virtual<br />
                        When: 29th January 2021<br />
                        Partner: National Accreditation Board for Education &amp; Training (NABET)<br />
                        Supported by: South Delhi Municipal Corporation (SDMC), Horticulture Department
                    </p>
                    <p>Description: Quality Council of India (QCI) organised the Virtual Quality Conclave (VQC) on “Reconﬁguration of School Education in the Light of National Education Policy (NEP) - 2020<br />
                        ”on 29th January 2021. The primary objective of the conclave was to bring awareness and share insights on the Develop broad template for guiding concerned Government(s) to create Ecosystem of School Accreditation, define tentative quality framework for school accreditation, evolve action plan to implement Competency-based Education in schools and Identify core areas to reconfigure teacher preparation programmes for Competency-based Education<br />
                        Link:<a href="#"> http://vqc2020.qci.org.in/</a>
                    </p>
                    <p><img alt="" src="public/uploads/ck-images/1612513347.im1.jpg" style="width:500px;height:868px;" /></p>
                    <p><img alt="" src="public/uploads/ck-images/1612513467.image22.jpg" style="width:500px;height:281px;" /> <img alt="" src="public/uploads/ck-images/1612513514.image23.jpg" style="width:500px;height:281px;" /></p>
                    <p><img alt="" src="public/uploads/ck-images/1612513540.image24.jpg" style="width:500px;height:281px;" /> <img alt="" src="public/uploads/ck-images/1612513564.image25.jpg" style="width:500px;height:281px;" /></p>
                    <hr />
                    <ul>
                        <li>
                            <h4>3rd Virtual Quality Conclave</h4>
                        </li>
                    </ul>
                    <p>What: Commitment to Quality-Sustaining a Culture of Improvement<br />
                        Where: Virtual<br />
                        When: 17th December 20<br />
                        Partner: D.L. SHAH<br />
                        Supported by: South Delhi Municipal Corporation (SDMC), Horticulture Department
                    </p>
                    <p>Description: Quality Council of India (QCI) organised the Virtual Quality Conclave (VQC) on “Commitment to Quality-Sustaining a Culture of Improvement” on17th December 2020<br />
                        The event acknowledged the outstanding projects of the 13th cycle of the QCI-D.L. Shah Quality Award and awardees of the 2ndCycle of the QCI Quality Champion Award . The 3rd VQC also showcased some of the award-winning technical case study presentations of various industry, sectors that demonstrated their incessant efforts and commitment to Quality that have transformed people, processes and organizational culture, to make a significant difference. <br />
                        Link: <a href="#" target="_blank" rel="noreferrer noopener">http://vqc2020.qci.org.in/</a>
                    </p>
                    <p><img alt="" src="public/uploads/ck-images/1609239192.Screenshot%202020-12-29%20162218.png" style="width:500px;height:451px;" /></p>
                    <p><img alt="" src="public/uploads/ck-images/1609239222.Screenshot%202020-12-29%20162249.png" style="width:500px;height:304px;" /></p>
                    <hr />
                    <ul>
                        <li>
                            <h4>2nd Virtual Quality Conclave</h4>
                        </li>
                    </ul>
                    <p>What: ATMANIRBHAR BHARAT: LEVERAGING MSME<br />
                        Where: Virtual<br />
                        When: 27th November 2020<br />
                        Partner: Foundation for MSME Clusters (FMC)<br />
                        Supported by: GIZ, South Delhi Municipal Corporation (SDMC), Horticulture Department <br />
                        Description: Quality Council of India (QCI) jointly with Foundation for MSME Clusters (FMC) organized the Virtual Quality Conclave (VQC) on ATMANIRBHAR BHARAT: LEVERAGING MSME on 27th November 2020. The primary objective of the conclave was to discuss about how Micro, Small and Medium Enterprise (MSME) sector in India can play a crucial role in achieving the vision of self-reliant India by understanding the current operations of the ecosystem, and pool in the necessary resources available. Making in India and supporting those who ‘Make in India’ can build and boost the economy enabling Atmanirbhar Bharat.<br />
                        Link: <a href="#" target="_blank" rel="noreferrer noopener">http://vqc2020.qci.org.in/v2/</a>
                    </p>
                    <p><img alt="" src="public/uploads/ck-images/1609239495.1.jpg" style="width:500px;height:954px;" /> <img alt="" src="public/uploads/ck-images/1609239527.4.jpg" style="width:500px;height:500px;" /></p>
                    <p><img alt="" src="public/uploads/ck-images/1609239561.2.png" style="width:500px;height:281px;" /> <img alt="" src="public/uploads/ck-images/1609239578.3.jpg" style="width:500px;height:281px;" /></p>
                    <p><br />

                    </p>
                    <hr />
                    <ul>
                        <li>
                            <h4>1st Virtual Quality Conclave</h4>
                        </li>
                    </ul>
                    <p>What: Accreditation - Increasing Credibility of the Consultants<br />
                        Where: Virtual<br />
                        When: 17th October 2020<br />
                        Partners: National Accreditation Board for Education &amp; Training<br />
                        Supported By: South Delhi Municipal Corporation (SDMC), Horticulture Department <br />
                        Description: Quality Council of India (QCI) organised the 1st Virtual Quality Conclave (VQC) on Accreditation - Increasing Credibility of the Consultants on 17th October 2020. The primary objective of the conclave was to bring awareness and share insights on the importance of Accreditation under the EIA Scheme, Ground Water and Exploration &amp; Mining Schemes and its accreditation process, industrial safety &amp; risk management and importance of Socio- Economic aspect in developmental project.
                    </p>
                    <p>Link: <a href="#" target="_blank" rel="noreferrer noopener">http://vqc2020.qci.org.in/v1/</a> </p>
                    <p><img alt="" src="public/uploads/ck-images/1609239774.6.jpg" style="width:500px;height:707px;" /></p>
                    <p><img alt="" src="public/uploads/ck-images/1609239819.7.jpg" style="width:500px;height:250px;" /></p>
                    <p><img alt="" src="public/uploads/ck-images/1609239836.8.jpg" style="width:500px;height:249px;" /></p>
                    <p> </p>
                    <p><img alt="" src="public/uploads/ck-images/1609239852.9.jpg" style="width:500px;height:281px;" /><br />

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