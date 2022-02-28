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
                                    <a href="{{ route('frontend.special-projects-groups') }}">Special Projects Groups</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.hr-administration') }}">HR &amp; Administration</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-3" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="#">Service and Finance Manual</a></li>
                                        <li class="submenu-xcb "><a href="#">Manual on Ethical Practices</a></li>
                                        <li class="submenu-xcb "><a href="#">Weeding out Policy</a></li>
                                        <li class="submenu-xcb "><a href="#">Retention policy</a></li>
                                        <li class="submenu-xcb "><a href="#">Categories of documents</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.office-orders-internal-circulars') }}">Office Orders/Internal Circulars</a></li>
                                        <li class="submenu-xcb "><a href="#">HR &amp; Admin KRA</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.annual-reports') }}">Annual Reports</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.finance-and-accounts') }}">Finance and Accounts</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.rti-cell') }}">RTI Cell</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.ethics-cell') }}">Ethics Cell</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.icc-for-sexual-harassment') }}">ICC for Sexual Harassment</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-8" style="width:100%">
                                    <a href="{{ route('frontend.minutes-of-gb') }}">Minutes of GB</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-9" style="width:100%">
                                    <a href="{{ route('frontend.minutes-of-gc') }}">Minutes of GC</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://fqpn.org/fqp-secretariat">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>RTI Cell</h1>
                <div class="descripton mb-30">
                    <p><strong>As per the provisions of RTI Act, FQP has constituted RTI Cell mandated with the following activities:</strong></p>
                    <ul>
                        <li>Coordinate all the work relating to implementation of RTI Act in FQP.</li>
                        <li>Serve as the nodal point for receiving applications and appeals physically as well as online and forward it to the concerned Board / Division / Department / Appellate Authority within FQP.</li>
                        <li>Serve as the nodal point for responding the application(s) / appeal(s) after receiving the required information from concerned Board / Division / Department.</li>
                        <li>Coordinate matters relating to Central Information Commission (CIC) in terms of hearing, orders and other matters related to FQP.</li>
                        <li>Any other work related to the RTI Act.</li>
                    </ul>
                    <p><strong>The composition of the cell is as under</strong></p>
                    <table border="1" cellpadding="1" cellspacing="1" style="width:750px;">
                        <tbody>
                            <tr>
                                <td style="border:1px solid rgb(0,0,10);padding:0cm 0.19cm 0cm 0.2cm;text-align:center;" width="485"><strong>Member</strong></td>
                                <td style="border:1px solid rgb(0,0,10);padding:0cm 0.19cm 0cm 0.2cm;text-align:center;" width="186"><strong>Role</strong></td>
                                <td style="border:1px solid rgb(0,0,10);padding:0cm 0.19cm 0cm 0.2cm;text-align:center;" width="186"><strong>Email </strong></td>
                                <td style="border:1px solid rgb(0,0,10);padding:0cm 0.19cm 0cm 0.2cm;text-align:center;" width="886"><strong>Contact </strong></td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="185">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Dr. R. P. Singh, Secretary General</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Appellate Authority</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">faafqp@fqpn.org</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Indian Council for Child Welfare Building(ICCW), 4, Pandit Deen Dayal Upadhyaya Marg, Mata Sundari Railway Colony, Mandi House, New Delhi - 110002. </font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                    Tel: +91-11-2323 5736
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="185">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Dr. Hari Prakash, Director, PPID-FQP</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                    <font face="Calibri, serif">
                                                        <font size="2">
                                                            <font style="font-size:11pt;">CPIO</font>
                                                        </font>
                                                    </font>
                                                </span></span></span></span></td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">hari@fqpn.org</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Indian Council for Child Welfare Building(ICCW), 4, Pandit Deen Dayal Upadhyaya Marg, Mata Sundari Railway Colony, Mandi House, New Delhi - 110002. </font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                    Tel: +91-11-2323 8736
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="185">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Sh. Jagminder Kataria, Deputy Director</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Assistant CPIO</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">jagminder.nabet@fqpn.org</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">ITPI Building , 6th Floor , 4-A, I P Estate, New Delhi – 110002.</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                    Tel: +91-11-23323416
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="185">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Ms. Shilpa Khanna, AO, NABET-FQP</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">Support Staff</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">shilpa.nabet@fqpn.org</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">
                                    <p class="western" style="margin-top:0cm;margin-bottom:0.18cm;text-align:left;"><span style="font-size:12pt;"><span style="line-height:100%;"><span><span>
                                                        <font face="Calibri, serif">
                                                            <font size="2">
                                                                <font style="font-size:11pt;">ITPI Building , 6th Floor , 4-A, I P Estate, New Delhi – 110002.</font>
                                                            </font>
                                                        </font>
                                                    </span></span></span></span></p>
                                    Tel: +91-11-23323416
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3> </h3>
                    <h3>RTI Information</h3>
                    <ul>
                        <li><a href="#">Mandatory Disclosure under Section 4 (1) of RTI Act, 2005:</a></li>
                        <li><a href="#">Record Retention Policy of RTI Cell</a></li>
                    </ul>
                    <h3>RTI Quarterly Return Information System</h3>
                    <ul>
                        <li><a href="#">RTI Quarterly Return report for Quarter 3 (October 2021- December 2021)</a></li>
                        <li><a href="#">RTI Quarterly Return report fo<wbr />r Quarter 2 (July 2021- September 2021)</a></li>
                        <li><a href="#">RTI Quarterly Return report for Quarter 1 (April 2021- June 2021)</a></li>
                        <li><a href="#">RTI Quarterly Return Report for Quarter 4 (January2021- March 2021)</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">Quarterly Return-3rd Quarter (October- December 2020)</a></li>
                        <li><a href="#">Quarterly Return- 2nd Quarter (July - September 2020)</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">Quarterly Return 1st Quarter (April- June 2020)</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">Quarterly Return 4th Quarter (January 2020-March 2020)</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">RTI Quarterly Return report for Quarter 3 (October 2019- December 2019)</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">RTI Quarterly Return report for Quarter 2 (July 2019- September 2019)</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">RTI Quarterly Return Report for Quarter 1 (April 2019 to June 2019)</a></li>
                        <li><a href="#" target="_blank" rel="noreferrer noopener">RTI Quarterly Return Report (April 2018 to March 2019)</a></li>
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