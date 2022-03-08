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
                                    <a href="{{ route('frontend.fqp-in-news') }}">FQP in news</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.fqp-magazines') }}">FQP Magazines</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.quality-best-practices') }}">Quality Best Practices</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Editorials</h1>
                <div class="descripton mb-30">
                    <ul>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Quality Times- 11th Edition</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Report of the High-Level Advisory Group on Trade Policy and Export Promotion (PDF)</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Report of the High-Level Advisory Group on Trade Policy and Export Promotion (e-book)</a></li>
                        <li style="text-align:justify;"><a href=#" target="_blank" rel="noreferrer noopener">NABET launches a Book on “Safety Issues in School”</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Effectiveness of Quality Management System - Case Study</a></li>
                        <li style="text-align:justify;">
                            Evaluation of lead based paints manufacturing in India covering three large, three medium and two small manufacturing companies in India
                            <ul>
                                <li><a href="#" target="_blank" rel="noreferrer noopener">Part-I</a></li>
                                <li><a href="#" target="_blank" rel="noreferrer noopener">Part-II</a></li>
                                <li><a href="#" target="_blank" rel="noreferrer noopener">Part-III</a></li>
                                <li><a href="#" target="_blank" rel="noreferrer noopener">Part-IV</a></li>
                                <li><a href="#" target="_blank" rel="noreferrer noopener">Part-V</a></li>
                                <li><a href="#" target="_blank" rel="noreferrer noopener">Part-VI</a></li>
                            </ul>
                        </li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Quality in School Education - Report by Institute for Studies in Industrial Development</a></li>
                        <li style="text-align:justify;"><a href="#" target="_blank" rel="noreferrer noopener">Process Standardisation and System Design for Primary Education: In Search of Good Governance</a></li>
                    </ul>
                    <p style="text-align:justify;"> </p>
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