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
                                    <a href="{{ route('frontend.our-leadership') }}">Our Leadership</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-2" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.chairperson') }}">Chairperson</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.sg') }}">Secretary General</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.ceos-and-hods') }}">Leadership - Boards/Divisions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="members{{ route('frontend.history') }}">Members</a>
                                </li>
                            </div>
                        </div>
                    </div>

                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Members</h1>
                <div class="descripton mb-30">
                    <p>QCI is governed by a Council comprising of 38 members including the Chairperson and Secretary General. The Council has an equal representation of Government, Industry and other Stakeholders. The composition of the Council is :-</p>
                    <ol>
                        <li>Chairperson (Nominated by Prime Minister of India)</li>
                        <li>Secretary, Department of Industrial Policy &amp; Promotion (DIPP), Ministry of Commerce &amp; Industry</li>
                        <li>Secretary, Department of Commerce, Ministry of Commerce &amp; Industry</li>
                        <li>Secretary, Department of Science &amp; Technology (DST)</li>
                        <li>Secretary, Ministry of Civil Supplies, Department of Consumer Affairs &amp; PD</li>
                        <li>Secretary, Department of Telecommunication (DOT)</li>
                        <li>Secretary, Ministry of Health &amp; Family Welfare (MHFW)</li>
                        <li>Chairperson, Railway Board</li>
                        <li>Director General, Director General of Quality Assurance (DGQA) Ministry of Defence.</li>
                        <li>Director General, Bureau of Indian Standards (BIS)</li>
                        <li>Director General, Council of Scientific &amp; Industrial Research (CSIR)</li>
                        <li>Director General, Standardization, Testing Quality Certification (STQC), Ministry of Communication and IT </li>
                        <li>Director, National Physical Laboratory (NPL)</li>
                        <li>President, Confederation of Indian Industry (CII)</li>
                        <li>President, Federation of Indian Chamber of Commerce &amp; Industry (FICCI)</li>
                        <li>President, Associated Chambers of Commerce &amp; Industry of India (ASSOCHAM)</li>
                        <li>President, Indian Merchants’ Chambers (IMC)</li>
                        <li>President, Federation of Indian Exporters Organizations (FIEO)</li>
                        <li>President, Indian Industries Associations (IIA)</li>
                        <li>Chairperson of NABCB, NABET, NABH, NBQP &amp; NABL</li>
                        <li>
                            Representative from Quality professional bodies;
                            <ul>
                                <li>President, Indian Society for Quality (ISQ)</li>
                                <li>President, National Institute for Quality and Reliability (NIQR)</li>
                            </ul>
                        </li>
                        <li>
                            Six representatives from Manufacturing Sectors, specific associations (Alternate Term – 6 at a time) :
                            <ul>
                                <li>Automobiles</li>
                                <li>Automotive Component,</li>
                                <li>Machine Tools</li>
                                <li>Chemical</li>
                                <li>Electrical</li>
                                <li>Pharmaceutical</li>
                                <li>Textiles</li>
                                <li>Food Processing</li>
                            </ul>
                        </li>
                        <li>
                            Four Representatives from Service Sector (Alternate Term – 4 at a time) :
                            <ul>
                                <li>Education</li>
                                <li>Healthcare</li>
                                <li>IT &amp; ITeS (Information Technology Enabled Services)</li>
                                <li>Hospitality</li>
                                <li>Financial</li>
                                <li>Social</li>
                            </ul>
                        </li>
                        <li>Consumer Organizations</li>
                        <li>Secretary General</li>
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