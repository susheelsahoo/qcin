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
                                    <a href="{{ route('frontend.chairperson') }}">Chairperson</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.sg') }}">Secretary General</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.ceos-and-hods') }}">Leadership - Boards/Divisions</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="https://qcin.org/our-leadership">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Secretary General</h1>
                <div class="descripton mb-30">
                    <p style="text-align:justify;">Dr. Ravi P. Singh is the 4th Secretary General of Quality Council of India an independent organization under Department for Promotion of Industry and Internal Trade, Government of India. He heads the National Accreditation body which has the mandate to improve the quality of products, processes and services in all sectors including education, healthcare, skills training, manufacturing etc.</p>
                    <p style="text-align:justify;"><img alt="" class="sg-general" src="public/uploads/ck-images/1610942242.SG.jpg" style="width:400px;height:300px;margin:5px;float:left;border-width:1px;border-style:solid;" /></p>
                    <p style="text-align:justify;">Prior to being appointed as Secretary General, Dr. Singh served IGNOU as the Director of Regional Services Division and then as the Senior Regional Director in Delhi. Dr. Singh was formerly the founder Vice Chancellor of Sharda University at Greater Noida. He joined this position on lien from Punjab Technical University where he worked as Dean from 2003-2009.</p>
                    <p style="text-align:justify;">Dr. Singh started his career as an Assistant Director in All India Council for Technical Education in 1996 and continued as Deputy Director till 2003. He held various important positions like Regional Officer of the Northern Regional Office at Kanpur during 1996-1999 and later as the Regional Officer of Eastern Regional Office at Kolkata during 2000-2001. He has been an academic administrator since 1996 and has made exceptional contributions in policy planning, accreditation, use of ICT in classroom learning, flexible credit-based system implementation, research and development.</p>
                    <p style="text-align:justify;">In QCI since September 2014, Dr. Singh has initiated various innovative schemes and projects for quality intervention at grassroots level. Under his leadership, QCI has grown more than 10 times in revenue and human resource. He has been instrumental in bringing all Accreditation bodies under one roof. He has also initiated many schemes and projects, notable amongst them being role in Swachch Sarvekshan, Ayushman Bharat, virtual assessments in GeM, Coal testing to non-power customers, Zero Defect, Zero Effect Maturity Model, school accreditation and many more. Dr. Singh is known for his institution building skills, oratory, frank ideas and administrative capabilities. He is member of various Boards and Committees in Government as well as Industry and travels extensively.</p>
                    <p style="text-align:justify;">Born in Varanasi, Dr. Singh completed his Bachelors and Masters in Physics from Banaras Hindu University. He was the Gold Medal winner at Masters level in Physics and pursued his Ph.D and Post-doctoral work in Condensed Matter from University of Western Ontario, Canada during 1989-1995.</p>
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