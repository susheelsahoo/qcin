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
                                        <li class="submenu-xcb "><a href="#">Office Orders/Internal Circulars</a></li>
                                        <li class="submenu-xcb "><a href="#">HR &amp; Admin KRA</a></li>
                                        <li class="submenu-xcb "><a href="#">Annual Reports</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="#">Finance and Accounts</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="#">RTI Cell</a>
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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
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
                <h1>ICC for Sexual Harassment</h1>
                <div class="descripton mb-30">
                    <p>FQP has constituted internal complaints committee to address to the matters related to sexual harassment at workplace. The composition of the committee is as under;</p>
                    <table border="1" cellpadding="1" cellspacing="1" style="width:750px;">
                        <tbody>
                            <tr>
                                <td style="text-align:center;"><strong>Sl.No. </strong></td>
                                <td style="text-align:justify;"><strong>Name</strong></td>
                                <td style="text-align:center;"><strong>Designation</strong></td>
                                <td style="text-align:justify;"><strong> Email ID</strong></td>
                            </tr>
                            <tr>
                                <td style="border:solid 1pt;width:21.25pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="28">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">1.</span></span></span></span></span></p>
                                </td>
                                <td style="border:solid 1pt;width:255.2pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="340">
                                    <p style="margin:0in 0in 8pt;text-align:justify;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Ms. Madhu Ahluwalia, Sr. Advisor, NABET </span></span></span></span></span></p>
                                </td>
                                <td style="border:solid 1pt;width:85.05pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="113">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Chairperson</span></span></span></span></span></p>
                                </td>
                                <td style="border:solid 1pt;width:155.9pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="208">
                                    <p style="margin:0in 0in 8pt;"><span style="font-size:11pt;"><span style="line-height:107%;"><span style="font-family:Calibri, sans-serif;"><span style="color:#0070c0;"><a style="color:#0000FF;text-decoration:underline;"><span style="color:#0070c0;">madhu@fqpn.org</span></a></span></span></span></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:solid 1pt;width:21.25pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="28">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">2.</span></span></span></span></span></p>
                                </td>
                                <td style="border:solid 1pt;width:255.2pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="340">
                                    <p style="margin:0in 0in 8pt;text-align:justify;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Dr. Punam Bajaj, Director NABH</span></span></span></span></span></p>
                                </td>
                                <td style="border:solid 1pt;width:85.05pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="113">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Member</span></span></span></span></span></p>
                                </td>
                                <td style="border:solid 1pt;width:155.9pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="208">
                                    <p style="margin:0in 0in 8pt;"><span style="font-size:11pt;"><span style="line-height:107%;"><span style="font-family:Calibri, sans-serif;"><span style="color:#0070c0;"><a style="color:#0000FF;text-decoration:underline;"><span style="color:#0070c0;">punam@nabh.co </span></a></span></span></span></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:solid 1pt;width:21.25pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="28">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">3.</span></span></span></span></span></p>
                                </td>
                                <td style="border:solid 1pt;width:255.2pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="340">
                                    <p style="margin:0in 0in 8pt;text-align:justify;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Ms. Mallika Gope, Director, NABL</span></span></span></span></span></p>
                                </td>
                                <td style="border:solid 1pt;width:85.05pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="113">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Member</span></span></span></span></span></p>
                                </td>
                                <td style="border:solid 1pt;width:155.9pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="208">
                                    <p style="margin:0in 0in 8pt;"><span style="font-size:11pt;"><span style="line-height:107%;"><span style="font-family:Calibri, sans-serif;"><span style="color:#0070c0;"><a style="color:#0000FF;text-decoration:underline;"><span style="color:#0070c0;">mallika@nabl.fqpn.org</span></a></span></span></span></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:solid 1pt;width:21.25pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="28">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">4.</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:255.2pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="340">
                                    <p style="margin:0in 0in 8pt;text-align:justify;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Dr. Hari Prakash, Director, PPID</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:85.05pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="113">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Member</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:155.9pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="208">
                                    <p style="margin:0in 0in 8pt;"><span style="font-size:11pt;"><span style="line-height:107%;"><span style="font-family:Calibri, sans-serif;"><span style="color:#0070c0;"><a style="color:#0000FF;text-decoration:underline;"><span style="color:#0070c0;">hari@fqpn.org</span></a></span></span></span></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:solid 1pt;width:21.25pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="28">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">5.</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:255.2pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="340">
                                    <p style="margin:0in 0in 8pt;text-align:justify;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Ms. Poonam Gupta, Assistant Director, NABCB </span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:85.05pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="113">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Member</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:155.9pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="208">
                                    <p style="margin:0in 0in 8pt;"><span style="font-size:11pt;"><span style="line-height:107%;"><span style="font-family:Calibri, sans-serif;"><span style="color:#0070c0;"><a style="color:#0000FF;text-decoration:underline;"><span style="color:#0070c0;">poonam.nabcb@fqpn.org </span></a></span></span></span></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:solid 1pt;width:21.25pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="28">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">6.</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:255.2pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="340">
                                    <p style="margin:0in 0in 8pt;text-align:justify;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Ms. Aditi Malhotra, Advisor, PPID </span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:85.05pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="113">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Member</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:155.9pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="208">
                                    <p style="margin:0in 0in 8pt;"><span style="font-size:11pt;"><span style="line-height:107%;"><span style="font-family:Calibri, sans-serif;"><span style="color:#0070c0;"><a style="color:#0000FF;text-decoration:underline;"><span style="color:#0070c0;">aditimalhotra@fqpn.org </span></a></span></span></span></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:solid 1pt;width:21.25pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="28">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">7.</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:255.2pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="340">
                                    <p style="margin:0in 0in 8pt;text-align:justify;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Ms. Manju Bagai, Legal Consultant</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:85.05pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="113">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Expert Member</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:155.9pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="208">
                                    <p style="margin:0in 0in 8pt;text-align:justify;"> </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:solid 1pt;width:21.25pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="28">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">8.</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:255.2pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="340">
                                    <p style="margin:0in 0in 8pt;text-align:justify;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Dr. Aradhana Chopra, Chief Ethics Officer</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:85.05pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="113">
                                    <p style="margin:0in 0in 8pt;text-align:center;"><span style="font-size:11pt;"><span style="line-height:normal;"><span style="font-family:Calibri, sans-serif;"><span style="font-family:'Lato-Regular', serif;"><span style="color:#000000;">Convenor</span></span></span></span></span></p>
                                </td>
                                <td style="border-bottom:solid 1pt;width:155.9pt;border-top:none;border-left:none;border-right:solid 1pt;padding:0in 5.4pt 0in 5.4pt;" valign="top" width="208">
                                    <p style="margin:0in 0in 8pt;"><span style="font-size:11pt;"><span style="line-height:107%;"><span style="font-family:Calibri, sans-serif;"><span style="color:#0070c0;"><a style="color:#0000FF;text-decoration:underline;"><span style="color:#0070c0;">aradhna.nabet@fqpn.org</span></a></span></span></span></span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p> </p>
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