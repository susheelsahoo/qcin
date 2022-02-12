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
                                    <a href="{{ route('frontend.annual-reportshistory') }}">Annual Reports</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="#">Publications</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-3" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.qci-in-news') }}">QCI in news</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.history') }}">QCI Magazines</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.quality-best-practices') }}">Quality Best Practices</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontend.editorial') }}">Editorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="#">Gallery</a>
                                    <i class="fa fa-plus plus"></i>
                                </li>
                            </div>
                            <div id="collapseone-4" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="avvv" style="padding-left:20px;">
                                        <li class="submenu-xcb "><a href="{{ route('frontend.gallery') }}">Image Gallery</a></li>
                                        <li class="submenu-xcb "><a href="{{ route('frontendvideo-gallery') }}">Video Gallery</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.important-notices') }}">Important Notices/Circulars</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-6" style="width:100%">
                                    <a href="{{ route('frontend.achievements') }}">Achievements</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-7" style="width:100%">
                                    <a href="{{ route('frontend.updates-%26-alerts') }}">Updates &amp; Alerts</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-8" style="width:100%">
                                    <a href="{{ route('frontend.media-communications') }}">Media Communications</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Media Communications</h1>
                <div class="descripton mb-30"></div>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>For Media Communications contact on email: media@qcin.org</strong></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-danger"><strong></strong></p>
                        <p class="text-success"></p>
                        <form method="post" action="https://qcin.org/qcin-mediaenquiry">
                            <input type="hidden" name="_token" value="yXOKRbiPNqAKg7FiPQMFliB3DJIDcrQO3TDbyaLJ">
                            <input class="form-control" type="text" name="name" placeholder="Name" value="" autocomplete="disabled" />
                            <input class="form-control" type="tel" name="mobile" placeholder="Mobile" value="" autocomplete="disabled">
                            <input class="form-control" type="email" name="email" placeholder="Email" value="" autocomplete="disabled" />
                            <input class="form-control" type="text" name="company_name" placeholder="Company Name" value="" autocomplete="disabled">
                            <select class="form-control" name="enq_type">
                                <option>Select Enquiry Type</option>
                                <option value="Press Releases"> Press Releases </option>
                                <option value="Quotes/Interviews"> Quotes/Interviews </option>
                                <option value="Collaborations/MOUs"> Collaborations/MOUs </option>
                            </select>
                            <textarea class="form-control" name="message" placeholder="Enquiry Details" rows="5"></textarea>
                            <div class="g-recaptcha" data-sitekey="6Lci5yMaAAAAAGNNHi_YP1bdlPEwFhxbiNyvTD7D"></div>
                            <button type="submit" class="btn btn-primary btn-sm btn3" name="submit" value="Submit">Submit</button>
                        </form>
                    </div>
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