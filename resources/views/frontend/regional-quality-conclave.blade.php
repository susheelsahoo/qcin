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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.regional-quality-conclave') }}">Regional Conclaves</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.virtual-quality-conclave') }}">Virtual Conclaves</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/conclaves">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Regional Quality Conclave</h1>
                <div class="descripton mb-30">
                    <h2>Regional Quality Conclaves</h2>
                    <hr />
                    <ul>
                        <li>
                            <p><strong>13thRegional Quality Conclave</strong></p>
                        </li>
                    </ul>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Sustainable Strategies for Make in India, Digital India and Smart Manufacturing</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Bhubaneshwar</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 28<sup>th</sup> February 2020</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Partners</u>: PHD Chambers</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><u>Regional Partners</u>: NSIC, CTTC Bhubaneswar, WTC Bhubaneswar, ICC<br />
                        Description: Quality Council of India (FQP) jointly with PHD Chambers organized the Regional Quality Conclave (RQC) on Sustainable Strategies for Make in India, Digital India and Smart Manufacturing on 28th February 2020 at Hotel Swosti Premium, Bhubaneswar. The primary objective of the Conclave was to create awareness about sustainable strategies for smart manufacturing, deliberate on how organizations could continuously improve and innovate and share the technological advancement like Industry 4.0, how digital transformation is important for the acceleration of business activities and importance of Make in India.<br />
                        Link: - <a href="http://rqc2019.fqp.org.in/rqc2019.php">http://rqc2019.fqp.org.in/rqc2019.php</a>
                    </p>
                    <p> </p>
                    <ul>
                        <li><strong>12th Regional Quality Conclave</strong></li>
                    </ul>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Leveraging Quality for Manufacturing Competitiveness</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Kochi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 23rd January 2020</span></p>
                    <p><u>Partners</u>: Federation of Indian Chambers of Commerce and Industry (FICCI)<br />
                        Description: Quality Council of India (FQP) jointly with FICCI organized the Regional Quality Conclave (RQC) on Leveraging Quality for Manufacturing Competitiveness on 23rd January 2020, Hotel Taj Gateway, Kochi. The primary objective of the Conclave was to discuss quality systems and practices to achieve the competitiveness in Manufacturing.<br />
                        Link: : <a href="#">http://rqc2019.fqp.org.in/12th/home.php</a>
                    </p>
                    <p><img alt="" src="{{url('/img/frontend/homeimages/1591612567.12 rqc.png') }}" style="width:400px;height:400px;" /></p>
                    <ul>
                        <li><strong>11th Regional Quality Conclave</strong></li>
                    </ul>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Advance Manufacturing with Quality, Innovations &amp; Technology Interventions</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Rudrapur</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 20th December 2019</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Partners</u>: PHD Chambers</span><br />
                        Description: Quality Council of India (FQP) jointly with PHD Chambers organized the Regional Quality Conclave (RQC) on Advance Manufacturing with Quality, Innovations &amp; Technology Interventions on 20th December 2019 at Hotel Radisson Blu, Rudrapur. The primary objective of the Conclave was to create awareness about significance of quality culture in businesses, deliberate on how organizations could continuously improve and innovate and share the technological advancement like Industry 4.0 and predictive maintenance.<br />
                        Link: : <a href="#">http://rqc2019.fqp.org.in/11th/home.php</a>
                    </p>
                    <p><img alt="" src="{{url('/img/frontend/homeimages/1591612551.11 rqc.png')}}" style="width:400px;height:400px;" /></p>
                    <ul>
                        <li><strong>10th Regional Quality Conclave</strong></li>
                    </ul>
                    <p>What: Quality &amp; Manufacturing Excellence for Sustainable Growth </p>
                    <p>Where: Kolkata</p>
                    <p>When: 29th November 2019</p>
                    <p><u>Partners</u>: Federation of Small &amp; Medium Industries (FOSMI)</p>
                    <p>Description: Quality Council of India (FQP) jointly with FOSMI organized the Regional Quality Conclave (RQC) on Quality &amp; Manufacturing Excellence for Sustainable Growth on 29th November 2019, Hotel The Park, Kolkata. The primary objective of the Conclave was to highlight the importance of best practices of quality &amp; manufacturing in manufacturing industries as critical change agents for sustainable growth. Quality &amp; Manufacturing being two cardinal areas in a manufacturing industry developing a culture of continuous improvements in both these functions is fundamental to increased customer satisfaction and potential business growth.</p>
                    <p>Link: <a href="#">http://rqc2019.fqp.org.in/10thRQC/home.php</a><br />
                        <img alt="" src="{{url('/img/frontend/homeimages/1591612530.10 rqc.png')}}" style="width:400px;height:400px;" />
                    </p>
                    <ul>
                        <li><strong>9th Regional Quality Conclave</strong></li>
                    </ul>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Quality Enablers for Manufacturing Competitiveness &amp; Trade</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Ahmedabad</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 28th November 2019</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>National Partners</u>: Federation of Indian Chambers of Commerce and Industry (FICCI)</span><br />
                        Description: Quality Council of India (FQP) jointly with FICCI organized the Regional Quality Conclave (RQC) on Quality Enablers for Manufacturing Competitiveness &amp; Trade on 8th November 2019, Hotel Crowne Plaza, Ahmedabad. The primary objective of the Conclave was to discuss enablers of competitiveness and excellence in Manufacturing sector and enabling policy framework.<br />
                        Link: <a href="#">http://rqc2019.fqp.org.in/9th/home.php</a>
                    </p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><img alt="" src="{{url('/img/frontend/homeimages/1591612512.9 rqc.png')}}" style="width:400px;height:400px;" /></p>
                    <ul>
                        <li><strong>8th Regional Quality Conclave</strong></li>
                    </ul>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Leading Change with Quality, Innovation and Technology</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Bengaluru</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 18th October 2019</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Partners</u>: American Society for Quality (ASQ)</span><br />
                        Description: Quality Council of India (FQP) jointly with American Society for Quality (ASQ) organized the Regional Quality Conclave (RQC) on Leading Change with Quality, Innovation and Technology on 18th October 2019 at Hotel Taj, Yeshwantpur, Bengaluru. The primary objective of the Conclave was to showcase the next generation developments in innovation and technology leadership and quality levels zeroing in to near perfection in the manufacturing sector, with special reference to the role start-ups play in bringing agility in manufacturing.<br />
                        Link: : <a href="#">http://rqc2019.fqp.org.in/8th/home.php</a>
                    </p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><img alt="" src="{{url('/img/frontend/homeimages/1591612331.8 rqc.png')}}" style="width:400px;height:400px;" /></p>
                    <ul>
                        <li><span style="line-height:107%;"><b>7</b><sup><b>th</b></sup><b> Regional Quality Conclave</b></span></li>
                    </ul>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Gaining Competitive Edge through Best Quality Practices</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Lucknow</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 26<sup>th</sup> September 2019</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Partners</u>: PHD Chambers</span></p>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;">Description: Quality Council of India (FQP) jointly with PHD Chambers organized the Regional Quality Conclave (RQC) on <b>Gaining Competitive Edge through Best Quality Practices</b> on 26<sup>th</sup> September 2019 at Hotel Hilton Garden Inn, Lucknow. The primary objective of the Conclave was to create awareness about significance of quality culture in businesses, deliberate on how organizations could continuously improve and innovate and share the technological advancement like Industry 4.0 and predictive maintenance.</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Link:<a href="{{ route('frontend.history') }}" target="_blank" rel="noreferrer noopener"> http://rqc2019.fqp.org.in/rqc2019.php</a></span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;"><b>6</b><sup><b>th</b></sup><b> Regional Quality Conclave</b></span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Creating and Sustaining a Quality Culture</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Ranchi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 30<sup>th</sup> August 2019</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Partners</u>: PHD Chambers</span></p>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;">Description: Quality Council of India (FQP) jointly with PHD Chambers organized the Regional Quality Conclave (RQC) on <b>Creating and Sustaining a Quality Culture</b> on 30<sup>th</sup> August 2019 at Hotel Le Lac Sarovar Portico, Ranchi. The primary objective of the Conclave was to create awareness about creating quality culture for advanced manufacturing, share the technological advancement like Industrial IoT and create awareness about new technologies like AR, VR, AI for the manufacturing sector.</span></p>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;">Link: - <a href="#" style="color:#0563c1;" target="_blank" rel="noreferrer noopener">http://rqc2019.fqp.org.in/6th/rqc2019.php</a></span></p>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"> </p>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"> </p>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><img align="bottom" alt="1586513265.quality.jpg" src="{{url('/img/frontend/homeimages/1586513265.quality.jpg')}}" style="width:400px;height:400px;" /></span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;"><b>5</b><sup><b>th</b></sup><b> Regional Quality Conclave</b></span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Excellence through Smart Manufacturing</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Chandigarh.</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 31<sup>st</sup> July 2019</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Partners</u>: PHD Chambers</span></p>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;">Description: Quality Council of India (FQP) jointly with PHD Chambers organized the Regional Quality Conclave (RQC) on Excellence through Smart Manufacturing on 31<sup>st</sup> July 2019 at Hotel Taj, Chandigarh. The primary objective of the Conclave was to create awareness about Smart Manufacturing, share the technological advancement and best quality practices on process, products and maintenance in the manufacturing sector.</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Link: - <a href="#" style="color:#0563c1;" target="_blank" rel="noreferrer noopener">http://rqc2019.fqp.org.in/5th/rqc2019.php</a></span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><img align="bottom" alt="1586513298.excellent.jpg" src="{{url('/img/frontend/homeimages/1586513298.excellent.jpg')}}" style="width:500px;height:500px;" /></span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><br />

                    </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;"><b>4</b><sup><b>th</b></sup><b> Regional Quality Conclave</b></span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Quality for Manufacturing Competitiveness</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Guwahati</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 26<sup>th</sup> June 2019</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Partners</u>: <span style="background:#ffffff;">Federation of Indian Chambers of Commerce and Industry (FICCI)</span></span></p>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;">Description: Quality Council of India (FQP) jointly with FICCI organized the Regional Quality Conclave (RQC) on Quality for Manufacturing Competitiveness on 26<sup>th</sup> June 2019 at NEDFi Convention Centre, Guwahati. The primary objective of the Conclave was to discuss and identify some of the best practices and technologies that are shaping the future of manufacturing.</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Link: - <a href="#" style="color:#0563c1;" target="_blank" rel="noreferrer noopener">http://rqc2019.fqp.org.in/4th/rqc2019.php</a></span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><img align="bottom" alt="1586513438.26th.jpg" src="{{url('/img/frontend/homeimages/1586513438.26th.jpg')}}" style="width:500px;height:510px;" /></span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li>
                            <h4 style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><b>3</b><sup><b>rd</b></sup><b> Regional Quality Conclave</b></span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;"><u>What</u>: Manufacturing Excellence for Increasing Productivity and Competitiveness</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Jaipur</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 27<sup>th</sup> March 2019</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Partners</u>: <span style="background:#ffffff;">Federation of Indian Chambers of Commerce and Industry (FICCI)</span></span></p>
                    <p align="justify" style="margin-bottom:0cm;text-align:left;"><span style="line-height:100%;">Description: Quality Council of India (FQP) and <span style="background:#ffffff;">Federation of Indian Chambers of Commerce and Industry (FICCI)</span> have joined together in organizing Regional Quality Conclave on the theme “Manufacturing Excellence for Increasing Productivity and Competitiveness” on 27<sup>th</sup> March 2019, at Hotel Holiday Inn, Jaipur. The primary objective of this Conclave was to discuss and identify policy measures, best manufacturing/operational practices to be followed for sustainable growth of the manufacturing sector.</span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Link: <a href="#" style="color:#0563c1;" target="_blank" rel="noreferrer noopener">http://rqc2019.fqp.org.in/3rd/rqc2019.php</a></span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;"><b>2</b><sup><b>nd</b></sup><b> Regional Quality Conclave</b></span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>What</u>: NextGeN Mobility</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Pune</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 12<sup>th</sup> February 2019</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>National Partners</u>: <em><span style="background:#ffffff;">Confederation of Indian Industry (CII)</span></em></span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Knowledge Partners</u>: Siemens</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Regional Partners</u>: ACMA/NIQR/MCCIA/ARAI</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: Quality Council of India (FQP) and <em><span style="background:#ffffff;">Confederation of Indian Industry</span></em> (CII) have joined together in organizing Regional Quality Conclave on the theme “NextGeN Mobility” on 12 February 2019, at Hotel Hyatt Regency, Pune. <font color="#000000">The primary objective of this Conclave was to share the technological advancement and best quality practices on process, products and services in the manufacturing sector, with special reference to future developments in the automotive sector. During the programme, D.L. Shah awards were also distributed to the organizations recognizing their quality contribution to the sector</font></span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Link: <a href="#" style="color:#0563c1;" target="_blank" rel="noreferrer noopener">http://rqc2019.fqp.org.in/2ndrqc/rqc2019.php</a></span></p>
                    <p style="margin-bottom:0.28cm;text-align:left;"> </p>
                    <ul>
                        <li style="margin-bottom:0.28cm;text-align:left;">
                            <h4><span style="line-height:107%;"><b>1</b><sup><b>st</b></sup><b> Regional Quality Conclave</b></span></h4>
                        </li>
                    </ul>
                    <h4 align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>What</u>: Universal Health Coverage through Ayushman Bharat: Assisting Implementation</span></h4>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Where</u>: Varanasi</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>When</u>: 8<sup>th</sup> – 10<sup>th</sup> August 2018</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;"><u>Partners</u>: N/A</span></p>
                    <p align="justify" style="margin-bottom:0.28cm;text-align:left;"><span style="line-height:107%;">Description: Quality Council of India (FQP) organized Regional Quality Conclave on the theme “Universal Health Coverage through Ayushman Bharat: Assisting Implementation” on 8-10<sup>th</sup> August 2018, at Shatabdi Krishi Bhawan, BHU, Varanasi. The primary objective of this Conclave was to discuss on the lessons learnt from the pilot project and cover four important healthcare verticals viz. (i) Making Ayushman Bharat Quality Centric (ii) Strengthening PHCs &amp; Health Wellness Centres (iii) Role of Health Insurance vs Assurance, and (iv) IEC Activities &amp; Robust Patient Feedback Mechanism.</span></p>
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