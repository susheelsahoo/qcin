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
                                    <a href="{{ route('frontend.finance-and-accounts') }}">Finance and Accounts</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.rti-cell') }}">RTI Cell</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
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
                <h1>Ethics Cell</h1>
                <div class="descripton mb-30">
                    <p>The cell functions as independent entity and reports to SG, FQP. The composition of the cell is as under: </p>
                    <table style="width:750px;border:1px solid #00000a;">
                        <tbody>
                            <tr>
                                <td style="border:1px solid #00000a;padding:0cm 0.19cm 0cm 0.2cm;text-align:center;" width="185"><strong>Member</strong></td>
                                <td style="border:1px solid #00000a;padding:0cm 0.19cm 0cm 0.2cm;text-align:center;" width="186"><strong>Role</strong></td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="185">Dr. Aradhana Chopra</td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">Chief Ethics Officer</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="185">Ms. Smita Bharti </td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">Law Officer</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="185">Mr. Sanjeev Kumar</td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">Support staff</td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="185">Ms. Manju Sharma</td>
                                <td style="border:1px solid #00000a;padding-top:0cm;padding-bottom:0cm;padding-left:0.2cm;padding-right:0.19cm;" width="186">Support staff</td>
                            </tr>
                        </tbody>
                    </table>
                    <p> </p>
                    <p>For any query, drop a mail to: <a href="#">ethicscell@fqpn.org </a></p>
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