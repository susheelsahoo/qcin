@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        <li data-target="#myCarousel" data-slide-to="5" class=""></li>
        <li data-target="#myCarousel" data-slide-to="6" class=""></li>
        <!-- <li data-target="#myCarousel" data-slide-to="7" class=""></li>
        <li data-target="#myCarousel" data-slide-to="8" class=""></li>
        <li data-target="#myCarousel" data-slide-to="9" class=""></li>
        <li data-target="#myCarousel" data-slide-to="10" class=""></li>
        <li data-target="#myCarousel" data-slide-to="11" class=""></li> -->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1618045147-Post-1-04.jpg') }}" style="width:100%;margin-top: 36px;" alt="Corona Hoarding"></a>
        </div>
        <div class="carousel-item ">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1618035337-Post-1-01.jpg') }}" style="width:100%;margin-top: 36px;" alt="Corona Hoarding"></a>
        </div>
        <div class="carousel-item ">
            <a href="https://swachhsurvekshan2021.org/" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1614944838-website-header.jpg') }}" style="width:100%;margin-top: 36px;" alt="SS2021"></a>
        </div>
        <div class="carousel-item ">
            <a href="https://udyogmanthan.fqpn.org/" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1609409346-1500x500.jpg') }}" style="width:100%;margin-top: 36px;" alt="udyog manthan"></a>
        </div>
        <div class="carousel-item ">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1611577415-WEB%20BANNER-01%20(1)%20(3).jpg') }} " style="width:100%;margin-top: 36px;" alt="AB PMJAY"></a>
        </div>
        <div class="carousel-item ">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1580714902-banner%20mission.jpg') }}" style="width:100%;margin-top: 36px;" alt="INQ"></a>
        </div>
        <div class="carousel-item ">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1581079847-piyush-goyal.jpg') }}" style="width:100%;margin-top: 36px;" alt="Piyush Goyal"></a>
        </div>
        <!--<div class="carousel-item ">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages//1628761117-b6dec78f-1a66-4d7f-b84f-eed789b8a9be.jpg') }}" style="width:100%;margin-top: 36px;" alt="Fit India Freedom Run"></a>
        </div>
        <div class="carousel-item ">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1641798321-WhatsApp%20Image%202022-01-10%20at%2011.57.45%20AM.jpg') }}" style="width:100%;margin-top: 36px;" alt="Hindi Diwas"></a>
        </div>
        <div class="carousel-item ">
            <a href="https://labexcellenceaward.fqpn.org/Home.aspx" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1631096424-Laboratory%20Excellence%20Award%20banner%202.jpg') }}" style="width:100%;margin-top: 36px;" alt="Prof. S.K Joshi Laboratory Excellence Award"></a>
        </div>
        <div class="carousel-item ">
            <a href="https://www.fqpn.org/nbqp/dsa/home/home.aspx" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1630655422-2%20copy%208%402x-100.jpg') }}" style="width:100%;margin-top: 36px;" alt="FQP has announced the 3rd edition of  FQP Quality Champion Award"></a>
        </div>
        <div class="carousel-item ">
            <a href="https://www.fqpn.org/nbqp/dsa/home/home.aspx" target="_blank" rel="noopener noreferrer">
                <img src="{{ url('/img/frontend/sliderimages/1629800932-social%20media%20artwork.png') }}" style="width:100%;margin-top: 36px;" alt="Call for Applications : 14th FQP - D.L. Shah Quality Award(Project based)"></a>
        </div> -->
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<section class="h-about-bg">
    <div class="container">
        <div class="h-about-inner">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-ms-12 col-xs-12 col-md-8">
                    <h2>About FQP</h2>
                    <p style="text-align:justify;">Quality Council of India (FQP) was established as a National body for Accreditation on recommendations of Expert Mission of EU after consultations in Inter-ministerial Task Force, Committee of Secretaries and Group of Ministers through a Cabinet decision in 1996<b> </b>....</p>
                    <a href="about-us{{ route('frontend.history') }}" class="btn btn-dark">Read More</a>
                </div>
                <div class="col-lg-4 col-sm-12 col-ms-12 col-xs-12 col-md-4 h-about-img">
                    <div class="abou-event upcoming-event-border">
                        <h2 style="text-align:center;color:#FF0000;background-color:#FFF;margin-top:20px;"><u>Important Notice</u></h2>
                        <p style="color:#0000FF;">In view of the fire incidence in FQP Office in Engineers Bhawan, 2nd Floor, 2 Bahadur Shah Zafar Marg, New Delhi – 110002, the office of the (Secretary General, HR &amp; Admn. dept., Finance dept. &amp; NABCB) have been shifted to Indian Council for Child Welfare (ICCW) Building , 2nd Floor, 4-Deen Dayal Upadhyaya Marg New Delhi - 110002, till further orders and the phone lines/EPBX numbers are currently not working.</p>
                        <p> </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="h-fqp-board">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>FQP BOARDS</h2>
            </div>
            <div class="col-md-9">
                <div class="hr-line"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 pd-0">
                <div class="fqp-box fqp-box-1">
                    <a href="nbqp/{{ route('frontend.index') }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ url('/img/frontend/homeimages/1629872120.NBQP-03%20(1).png') }}" alt="NBQP" />
                    </a>
                    <h5>National Board for Quality Promotion</h5>
                    <p> </p>
                </div>
            </div>
            <div class="col-md-4 pd-0">
                <div class="fqp-box fqp-box-2">
                    <a href="nabcb/{{ route('frontend.index') }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ url('/img/frontend/homeimages/1629880224.NABCB-05.png') }}" alt="NABCB" />
                    </a>
                    <h5>National Accreditation Board for Certification Bodies</h5>
                </div>
            </div>
            <div class="col-md-4 pd-0">
                <div class="fqp-box fqp-box-3">
                    <a href="nabet/{{ route('frontend.index') }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ url('/img/frontend/homeimages/1629880115.NABET-04.png') }}" alt="NABET" />
                    </a>
                    <h5>National Accreditation Board for Education and Training</h5>
                </div>
            </div>
            <div class="col-md-4 pd-0">
                <div class="fqp-box fqp-box-4">
                    <a href="nabh/{{ route('frontend.index') }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ url('/img/frontend/homeimages/1629880152.NABH-06.png') }}" alt="NABH" />
                    </a>
                    <h5>National Accreditation Board for Hospitals &amp; Healthcare Providers</h5>
                </div>
            </div>
            <div class="col-md-4 pd-0">
                <div class="fqp-box fqp-box-5">
                    <a href="https://nabl-india.org/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ url('/img/frontend/homeimages/1574668175.nabl.jpg') }}" alt="NABL" />
                    </a>
                    <h5>National Accreditation Board for Testing and Calibration Laboratories</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="h-division-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>DIVISIONS</h2>
            </div>
            <div class="col-md-9">
                <div class="hr-line"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 pt-30 pb-30 text-center">
                <!--col-md-offset-2-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="divimg">
                            <div class="img-hover-zoom">
                                <a href="zed{{ route('frontend.history') }}" target="_blank" rel="noopener noreferrer"><img src="{{ url('/img/frontend/homeimages/1629882957.ZED-08.png') }}" alt="ZED" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="divimg">
                            <div class="img-hover-zoom">
                                <a href="project-planning-and-implementation-division{{ route('frontend.history') }}"><img src="{{ url('/img/frontend/homeimages/1574668175.PPID.png') }}" alt="PPID" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="divimg">
                            <div class="img-hover-zoom">
                                <a href="project-analysis-and-documentation-division{{ route('frontend.history') }}">
                                    <img src="{{ url('/img/frontend/homeimages/1611332114.1601022998.output-onlinejpgtools%20(1).jpg') }}" alt="PADD" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="h-equest-bg">
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-md-6 equest-cl">
                <div class="equest-inner">
                    <div class="img-hover-zoom">
                        <a href="training-and-capacity-building{{ route('frontend.history') }}" target="_blank" rel="noopener noreferrer">
                            <img src="{{ url('/img/frontend/homeimages/1610367839.1609500844.imageedit_2_3264141636%20(1).jpg') }}" alt="equest">
                        </a>
                    </div>
                    <h3>TCB</h3>
                    <p>The vision of the TCB is to contribute to the society through the pursuit of training, education, learning and garnering awareness to the highest international levels of excellence.</p>
                </div>
            </div>
            <div class="col-md-6 icsts-cl">
                <div class="equest-inner">
                    <div class="img-hover-zoom">
                        <a href="https://equest.co.in/" target="_blank" rel="noopener noreferrer">
                            <img src="{{ url('/img/frontend/homeimages/1629883413.eQuest-07.png') }}" alt="icsts">
                        </a>
                    </div>
                    <h3>EQuest</h3>
                    <p>eQuest is an Online learning portal by FQP designed to help Indian professionals to strengthen their skills sets and knowledge thereby enhancing their career prospects.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="servicesection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <div class="imgbox-hover-zoom"><a href="find-accredited-organizations{{ route('frontend.history') }}"><img alt="NBQP" class="img-circle circleimg" src="{{ asset('/img/stamp-2.png') }}" /></a></div>
                <div class="text-center"><a class="btn btn-primary servicebtn col-sm-12" href="find-accredited-organizations{{ route('frontend.history') }}">Accredited &amp; Certified Organizations</a></div>
            </div>
            <div class="col-md-4 text-center">
                <div class="imgbox-hover-zoom"><a href="looking-for-accreditation{{ route('frontend.history') }}"><img alt="NBQP" class="img-circle circleimg" src="{{ asset('/img/accreditation.jpg') }}" /></a></div>
                <div class="text-center"><a class="btn btn-primary servicebtn col-sm-12" href="looking-for-accreditation{{ route('frontend.history') }}">Looking for Accreditation</a></div>
            </div>
            <div class="col-md-4 text-center">
                <div class="imgbox-hover-zoom"><a href="training{{ route('frontend.history') }}"><img alt="NBQP" class="img-circle circleimg" src="{{ asset('/img/Training-Indian.jpg') }}" /></a></div>
                <div class="text-center"><a class="btn btn-primary servicebtn col-sm-12" href="training{{ route('frontend.history') }}">Training </a></div>
            </div>
        </div>
    </div>
</section>
<section class="h-news-bg" id="news_updates">
    <div class="container">
        <h2 class="text-white heading">News & Updates</h2>
        <div class="row justify-content-center text-center">
            <div class="col-md-6 ">
                <div class="panel panel-blue">
                    <div class="panel-heading text-white">News</div>
                    <div class="panel-body">
                        <div class="box3">
                            <ul class=" liststyle">
                                <!--<li class="">
                                 <span class="title">Vigilance Awareness Week - 2021 - 
                                 
                                 "Independent India@75 : Self Reliance with Integrity"
                                 
                                 from 26 October to 1 November 2021  </span>
                                   	<br><a  target="_blank" href="https://pledge.cvc.nic.in/" >Take a Pledge</a>
                                   	<br>
                                 
                                   	<a target="_blank" href="https://fqpn.org/public/Integrity Pledge for Citizen.pdf" >
                                   		<span class="title">Integrity Pledge for Citizen</span>
                                   		Download Now</a>
                                   	<br>
                                 
                                   	<a  target="_blank" href="https://fqpn.org/public/Integrity pledge for Organisations.pdf" >
                                   		<span class="title">Integrity pledge for Organisations</span>
                                   	Download Now</a>
                                   	<span class="title">Swachhata Pakhwada from 1 November to 15 November 2021</span>
                                   </li>-->
                                <li class="">
                                    <span class="title">FQP has announced Prof. S.K. Joshi Laboratory Excellence Award</span>
                                    <br><a target="_blank" href="https://labexcellenceaward.fqpn.org/Applyhere.aspx?url=applynow">Read more</a>
                                </li>
                                <li class="">
                                    <span class="title">FQP has announced the 3rd edition of FQP Quality Champion Award</span>
                                    <br><a target="_blank" href="https://www.fqpn.org/nbqp/dsa/home/home.aspx">Read more</a>
                                </li>
                                <li class="">
                                    <span class="title">FQP has announced the 14th FQP-D.L. Shah Quality Award.</span>
                                    <br><a target="_blank" href="https://www.fqpn.org/nbqp/dsa/home/home.aspx">Read more</a>
                                </li>
                                <li class=""><span class="title">FQP has announced Prof. S.K. Joshi Laboratory Excellence Award</span>
                                    <br><a href="news/prof.-s.-k{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">FQP has announced the 3rd edition of FQP Quality Champion Award</span>
                                    <br><a href="news/fqp-has-announced-the-3rd-edition-of-fqp-quality-champion-award{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">FQP has announced the 14th FQP-D.L. Shah Quality Award.</span>
                                    <br><a href="news/we-have-announced-the-14th-fqp-d.l.-shah-quality-award{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">#Unite2FightCorona</span>
                                    <br><a href="news/unite2fightcorona{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">Call for Proposal/EOI-Protection of Child Right</span>
                                    <br><a href="news/call-for-proposal-eoi-protection-of-child-right{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">FQP has been awarded Grade A (93%) by Central Information Commission for the year 2019-20</span>
                                    <br><a href="news/fqp-has-been-awarded-grade{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">NABET has been conducting online Workshops for schools across India to skill teachers to sail through the COVID-19 induced closure of schools</span>
                                    <br><a href="news/nabet-has-been-conducting-online-workshops-for-schools-across-india-to-skill-teachers-to-sail-through-the-covid-19-induced-closure-of-schools{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">Quality Council of India, with support from the National Medicinal Plants Board Quality Council of India</span>
                                    <br><a href="news/quality-council-of-india%2c-with-support-from-the-national-medicinal-plants-board-quality-council-of-india{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">7th National Conclave for Laboratories on 23rd-24th Jan, 2018 at Hotel Hyatt Regency, Ahmedabad (video clippings)</span>
                                    <br><a href="news/7th-national-conclave-for-laboratories-on-23rd-24th-jan%2c-2018-at-hotel-hyatt-regency%2c-ahmedabad-(video-clippings){{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">FSSAI launches food regulatory portal on eve of World Food India 2017</span>
                                    <br><a href="news/fssai-launches-food-regulatory-portal-on-eve-of-world-food-india-2017{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">Ayush Mark Publication</span>
                                    <br><a href="news/ayush-mark-publication{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">Traditional Knowledge system losing significance due to modernization</span>
                                    <br><a href="news/traditional-knowledge-system-losing-significance-due-to-modernization{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">Swachh Survekshan Gramin 2016</span>
                                    <br><a href="news/swachh-survekshan-gramin-2016{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">Over 8,000 yoga professionals register with FQP in one year</span>
                                    <br><a href="news/over-8%2c000-yoga-professionals-register-with-fqp-in-one-year{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">Online Portal for EIA Consultant Organisations</span>
                                    <br><a href="news/online-portal-for-eia-consultant-organisations{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">First Mango Farm to Get Certified under INDGAP Scheme</span>
                                    <br><a href="news/first-mango-farm-to-get-certified-under-indgap-scheme{{ route('frontend.history') }}">Read more</a>
                                </li>
                                <li class=""><span class="title">Adil Zainulbhai on Uber&#039;s global advisory panel</span>
                                    <br><a href="news/adil-zainulbhai-on-uber%27s-global-advisory-panel{{ route('frontend.history') }}">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="panel panel-blue">
                    <div class="panel-heading text-white">Events</div>
                    <div class="panel-body">
                        <div class="box2">
                            <ul class=" liststyle">
                                <li class=""><span class="title">Quality Month Competition Winners - 2020 </span> <br>November 2020<br><a href="fqp-events/quality-month-competition-winners---2020{{ route('frontend.history') }}">Read more</a></li>
                                <li class=""><span class="title">UDYOG MANTHAN </span> <br>4th January, 2021 - 2nd March, 2021 <br><a href="fqp-events/udyog-manthan{{ route('frontend.history') }}">Read more</a></li>
                                <li class=""><span class="title">Training : AS 9100 Rev D - Aerospace and Defence QMS Internal Auditor prog </span> <br>14-15 January 2021<br><a href="fqp-events/training-_-as-9100-rev-d---aerospace-and-defence-qms-internal-auditor-prog{{ route('frontend.history') }}">Read more</a></li>
                                <li class=""><span class="title">Poka-yoke: Improving Processes through Error Prevention </span> <br>20th January 2021 | 10.30 AM to 4.30 PM<br><a href="fqp-events/poka-yoke_-improving-processes-through-error-prevention{{ route('frontend.history') }}">Read more</a></li>
                                <li class=""><span class="title">4th Virtual Quality Conclave </span> <br>29th January&#039; 21 | 10AM-4PM<br><a href="fqp-events/4th-virtual-quality-conclave-{{ route('frontend.history') }}">Read more</a></li>
                                <li class=""><span class="title">03 DAYS AWARENESS WORKSHOP ON ACCREDITATION STANDARD FOR QUALITY SCHOOL GOVERNANCE- CHENNAI </span> <br>26th March-28th March-2020<br><a href="fqp-events/03-days-awareness-workshop-on-accreditation-standard-for-quality-school-governance--chennai-26th-march-28th-march-2020-{{ route('frontend.history') }}">Read more</a></li>
                                <li class=""><span class="title">12th Webinar: FINANCING OPTION FOR MSMEs AND ECONOMIC REVIVAL DURING COVID-19 CRISIS </span> <br>8th June 2020<br><a href="fqp-events/12th-webinar-date_-8th-june-2020{{ route('frontend.history') }}">Read more</a></li>
                                <li class=""><span class="title">13thRegional Quality Conclave </span> <br><br><a href="fqp-events/conclave{{ route('frontend.history') }}">Read more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mediasection">
    <div class="container">
        <h2 class="text-black heading">Media</h2>
        <div class="row justify-content-center text-center">
            <div class="col-sm-6 ">
                <div class="boxlive1">
                    <div class="" id="ex3">
                        <div class="post-container">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FQualityCouncilofIndia%2F&amp;tabs=timeline&amp;width=580&amp;height=300&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="580" height="300" style="position: absolute;
                              top:0;
                              left: 0;
                              width: 100%;
                              height: 100%;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="boxlive">
                    <div class="scrollsection_media" id="ex3">
                        <div class="content"><a class="twitter-timeline" href="https://twitter.com/QualityCouncil?ref_src=twsrc%5Etfw">Tweets by QualityCouncil</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="publishsection">
    <div class="container ">
        <h2 class="text-black heading">Publication & Articles</h2>
        <div class="box">
            <div class="col-sm-12 ">
                <div class="row justify-content-center text-center  publishcontainer ">
                    <div class="col-sm-4 pull-left dirltr">
                        <div class="imgclass"><a href="public/uploads/ck-docs/1612776695.FQP_Magazine%20(Oct-Dec%202020)_vF6_11%20Jan%202021.pdf" target="_blank" rel="noreferrer noopener"><img alt="1608536202.Screenshot 2020-12-21 130551.png" class="img-responsive" src="{{ asset('/img/1620453414.QI%20Magazine.jpg') }}" style="width:250px;height:250px;" /></a><img alt="" src="{{ asset('/img/1615287545.bestpracticesvol6.png') }}" style="width:250px;height:250px;margin-top:15px;margin-bottom:15px;" /></div>
                    </div>
                    <div class="col-sm-8">
                        <h5>FQP MAGAZINE | JAN - MAR 2021</h5>
                        <p style="text-align:justify;">The two main pillars of any manufacturing-driven economy are Quality and Productivity. Many countries have used this in the past (e.g. Japan) and even today are using this to attract world Investors and Manufacturers (e.g. Bangladesh and Vietnam). India needs to build the same pillars for manufacturing excellence. The key for India is to create awareness among the manufacturers across the chain i.e. raw material, intermediate and finished products manufacturers. Hon’ble Prime Minister has also emphasized that ‘Made in India’ products should not only meet global demand but also get greater global acceptance by building credibility. A key step in this process of improving quality and productivity is to foster a quality-driven mindset. <a href="public/uploads/ck-docs/1620453728.FQP%20Magazine%20(Jan-Mar%202021).pdf" target="_blank" rel="noreferrer noopener">Read more...</a></p>
                        <hr />
                        <h5>6th Edition</h5>
                        <p style="text-align:justify;">Quality Best Practices is a compendium of selected FQP-D.L. Shah Quality Award Winning Case Studies” of different sectors ranging from manufacturing, services to healthcare and education. This publication is brought out every year and has been acknowledged as an important resource for quality professionals and quality managers in any industry.</p>
                        <p style="text-align:justify;"><a href="quality-best-practices{{ route('frontend.history') }}">Read more...</a> Price : INR 600/-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection