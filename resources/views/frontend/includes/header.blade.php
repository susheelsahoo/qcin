<header id="header">
    <div class="bg-headerTop">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mobile-phone">
                    <a class="top-phone" href="tel:+91-11-2337 9321">Helpline number: +91-11-2337 9321</a>
                </div>
                <div class="col-md-8 pull-right">
                    <!-- <div class="lang-change pull-right">
                        <ul class="lang-list">
                            <li>
                                Language
                                <ul class="lang-dropdown">
                                    <li><a href="https://hindi.qcin.org/">हिंदी</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                    <div class="searcharea text-white pull-right">
                        <div class="search_bar">
                            <form method="get" action="https://qcin.org/search">
                                <input type="search" placeholder="search" class="form-control ml-auto" value="" name="searchterm">
                                <input type="hidden" name="_token" value="yXOKRbiPNqAKg7FiPQMFliB3DJIDcrQO3TDbyaLJ">
                                <span class="search">
                                    <button type="submit"><i class="fa fa-search" style="position: absolute; top: 5px;"></i></button>
                                </span>
                            </form>
                        </div>
                        <a href="#" class="search_link"><i class="fa fa-search"></i></a>
                    </div> -->
                    <div class="social_icon pull-right">
                        <ul class="d-flex align-items-center mb-0 text-align">
                            <li><a href="https://www.facebook.com/QualityCouncilofIndia" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/qualitycouncil" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCnweuDB5aFL3HkP7wg-_8rA" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/quality-council-of-india-qci-/" target="_blank" rel="noopener noreferrer"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://instagram.com/qualitycouncilofindia?igshid=g8fy7zpychy0" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a></li>
                            <li class="koo-link-header">
                                <a href="https://www.kooapp.com/profile/QualityCouncilofIndia" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('/img/Koo_Logo.png') }}" class="koo" alt="koo icon" style="height: 22px;">
                                    <img src="{{ asset('/img/Koo_Logo_white.png') }}" alt="koo icon" class="koo-hover" style="height: 22px;">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="bg-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg nv-main px-0" data-spy="affix" data-offset-top="197">
                <a class="navbar-brand" href="{{ route('frontend.index') }}">
                    <img src="{{ url('/img/QCI-Logo.png') }}" alt="QCI-Logo" />
                </a>
                <div class="menu-toggle"><i class="fa fa-bars"></i></div>
                <div class="navbar-collapse justify-content-end" id="navbarNav">
                    <div class="main-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown ">
                                <a class="toggle-lnk " href="#">Who We Are</a>
                                <ul class="sub-menu 2nd">
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="{{ route('frontend.about') }}" class="">About QCI</a>
                                        <ul class="sub-menu 3rd">
                                            <li class=""><a class="" href="{{ route('frontend.history') }}">History</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.mission') }}">Mission</a>
                                            <li>
                                            <li class=""><a class="" href="vision{{ route('frontend.vision') }}">Vision</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.moa') }}">MOA</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.moa') }}">Rules And Regulations</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.key-objectives') }}">Key Objectives</a>
                                            <li>
                                        </ul>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="#" class="">Our People</a>
                                        <ul class="sub-menu 3rd">
                                            <li class="dropdown ">
                                                <a class="toggle-lnk " href="{{ route('frontend.our-leadership') }}" class="">Our Leadership</a>
                                                <ul class="sub-menu 4th">
                                                    <li class=""><a class="" href="{{ route('frontend.chairperson') }}">Chairperson</a> </li>
                                                    <li class=""><a class="" href="{{ route('frontend.sg') }}">Secretary General</a> </li>
                                                    <li class=""><a class="" href="{{ route('frontend.ceos-and-hods') }}">Leadership - Boards/Divisions</a> </li>
                                                </ul>
                                            </li>
                                            <li class=""><a class="" href="{{ route('frontend.members') }}">Members</a>
                                            <li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="toggle-lnk " href="{{ route('frontend.index') }}">The Organisation</a>
                                <ul class="sub-menu 2nd">
                                    <li class="">
                                        <a class="" href="{{ route('frontend.governance-structure') }}" class="">Governance Structure</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.administrative-structure') }}" class="">Administrative Structure</a>
                                    <li>
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="{{ route('frontend.bodies-of-qci') }}" class="">Bodies of QCI</a>
                                        <ul class="sub-menu 3rd">
                                            <li class=""><a class="" href="{{ route('frontend.the-governing-council') }}">The Governing Council</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.the-governing-body') }}">The Governing Body</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.finance-committee') }}">Finance Committee</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.boards') }}">Boards</a>
                                            <li>
                                        </ul>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="{{ route('frontend.qci-secretariat') }}" class="">QCI Secretariat</a>
                                        <ul class="sub-menu 3rd">
                                            <li class=""><a class="" href="{{ route('frontend.special-projects-groups') }}">Special Projects Groups</a>
                                            <li>
                                            <li class="dropdown ">
                                                <a class="toggle-lnk " href="{{ route('frontend.hr-administration') }}" class="">HR &amp; Administration</a>
                                                <ul class="sub-menu 4th">
                                                    <li class=""><a class="" href="#">Service and Finance Manual</a> </li>
                                                    <li class=""><a class="" href="#">Manual on Ethical Practices</a> </li>
                                                    <li class=""><a class="" href="#">Weeding out Policy</a> </li>
                                                    <li class=""><a class="" href="#">Retention policy</a> </li>
                                                    <li class=""><a class="" href="#">Categories of documents</a> </li>
                                                    <li class=""><a class="" href="{{ route('frontend.office-orders-internal-circulars') }}">Office Orders/Internal Circulars</a> </li>
                                                    <li class=""><a class="" href="">HR &amp; Admin KRA</a> </li>
                                                    <li class=""><a class="" href="{{ route('frontend.annual-reports') }}">Annual Reports</a> </li>
                                                </ul>
                                            </li>
                                            <li class=""><a class="" href="{{ route('frontend.finance-and-accounts') }}">Finance and Accounts</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.rti-cell') }}">RTI Cell</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.ethics-cell') }}">Ethics Cell</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.icc-for-sexual-harassment') }}">ICC for Sexual Harassment</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.minutes-of-gb') }}">Minutes of GB</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.minutes-of-gc') }}">Minutes of GC</a>
                                            <li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="toggle-lnk " href="#">What We Do</a>
                                <ul class="sub-menu 2nd">
                                    <li class="">
                                        <a class="" href="https://udyogmanthan.qcin.org/" class="">Udyog Manthan</a>
                                    <li>
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="{{ route('frontend.schemes') }}" class="">Schemes</a>
                                        <ul class="sub-menu 3rd">
                                            <li class=""><a class="" href="{{ route('frontend.padd-schemes') }}">PADD Schemes</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.workplace-assessment-for-safety-and-hygiene') }}">WASH Scheme</a>
                                            <li>
                                        </ul>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="{{ route('frontend.projects') }}" class="">Projects</a>
                                        <ul class="sub-menu 3rd">
                                            <li class=""><a class="" href="{{ route('frontend.ppid-projects') }}">PPID Projects</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.padd-projects') }}">PADD Projects</a>
                                            <li>
                                        </ul>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="{{ route('frontend.events') }}" class="">Events</a>
                                        <ul class="sub-menu 3rd">
                                            <li class="dropdown ">
                                                <a class="toggle-lnk " href="{{ route('frontend.conclaves') }}" class="">Conclaves</a>
                                                <ul class="sub-menu 4th">
                                                    <li class=""><a class="" href="{{ route('frontend.national-quality-conclave') }}">National Conclaves</a> </li>
                                                    <li class=""><a class="" href="{{ route('frontend.regional-quality-conclave') }}">Regional Conclaves</a> </li>
                                                    <li class=""><a class="" href="{{ route('frontend.virtual-quality-conclave') }}">Virtual Conclaves</a> </li>
                                                </ul>
                                            </li>
                                            <li class=""><a class="" href="{{ route('frontend.workshops') }}">Workshops</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.webinars') }}">Webinars</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.training') }}">Trainings</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.icsts') }}">ICSTS</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.other-events') }}">Other Events</a>
                                            <li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.looking-for-accreditation') }}" class="">Accreditations</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.membership') }}" class="">Membership</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.certifications') }}" class="">Certifications</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.learning') }}" class="">Learning</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.awards') }}" class="">Awards</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="#" class="">CPGRAMS</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="#" class="">India PSS Platform</a>
                                    <li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="toggle-lnk " href="#">Media</a>
                                <ul class="sub-menu 2nd">
                                    <li class="">
                                        <a class="" href="{{ route('frontend.annual-reports') }}" class="">Annual Reports</a>
                                    <li>
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="#" class="">Publications</a>
                                        <ul class="sub-menu 3rd">
                                            <li class=""><a class="" href="{{ route('frontend.qci-in-news') }}">QCI in news</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.qci-magazines') }}">QCI Magazines</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.quality-best-practices') }}">Quality Best Practices</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.editorial') }}">Editorials</a>
                                            <li>
                                        </ul>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="#" class="">Gallery</a>
                                        <ul class="sub-menu 3rd">
                                            <li class=""><a class="" href="{{ route('frontend.gallery') }}">Image Gallery</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.video-gallery') }}">Video Gallery</a>
                                            <li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.important-notices') }}" class="">Important Notices/Circulars</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.achievements') }}" class="">Achievements</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.updates-alerts') }}" class="">Updates &amp; Alerts</a>
                                    <li>
                                    <li class="">
                                        <a class="" href="{{ route('frontend.media-communications') }}" class="">Media Communications</a>
                                    <li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="toggle-lnk " href="#">Connect With Us</a>
                                <ul class="sub-menu 2nd">
                                    <li class="dropdown workwith">
                                        <a class="toggle-lnk worrmenu" href="{{ route('frontend.work-with-us') }}" class="">Work With Us</a>
                                        <ul class="sub-menu 3rd">
                                            <li class=""><a class="" href="{{ route('frontend.careers') }}">Careers</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.tenders') }}">Tenders</a>
                                            <li>
                                        </ul>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="toggle-lnk " href="{{ route('frontend.reach-us') }}" class="">Reach Us</a>
                                        <ul class="sub-menu 3rd">
                                            <li class=""><a class="" href="{{ route('frontend.important-contacts') }}">Important Contacts</a>
                                            <li>
                                            <li class=""><a class="" href="{{ route('frontend.faq') }}">FAQs</a>
                                            <li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a class="" href="#" class="">Grievances - CPGRAMS</a>
                                    <li>
                                </ul>
                            </li>
                            <li>
                                <a class="btn btn-primary btn-header loginbtn" href="{{ route('frontend.auth.login') }}"><i class="fa fa-sign-in"></i>Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div>
            <marquee behavior="scroll" direction="left">
                <ul id="marquee_new" style="margin-bottom: 0;">
                    <li>
                        <a href="{{ route('frontend.monographs') }}">QCI Silver Jubilee Celebration Event Page</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.update-alerts') }}">Submission of the Monographs has been extended till 31st January 2022.</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.update-alerts') }}">Call for Monographs</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.careers') }}">Advertisment For Recruitment (Dec. 2021)- <b>Last date to submit the online application against the Advt. No. QCI/1/2021 dated 12.12.2021 is 20.1.2022, 5:30 pm. In case of any issue /difficulty in submission of application, the applicant is advised to inform the same immediately at email <a href="mailto:hr@qcin.org">hr@qcin.org</a> or <a href="mailto:support@7techies.com">support@7techies.com</a> for its resolution in timely manner.</b></a>
                    </li>
                </ul>
            </marquee>
        </div>
    </div>
</header>