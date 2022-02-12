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
                                    <a href="{{ route('frontend.gallery') }}">Image Gallery</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-3" style="width:100%">
                                    <a href="{{ route('frontend.video-gallery') }}">Video Gallery</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Video Gallery</h1>
                <div class="descripton mb-30">
                    <p><iframe class="video-respons" frameborder="0" height="350" src="https://www.youtube.com/embed/RyBQJbkqSDg" width="45%"></iframe> <iframe class="video-respons" frameborder="0" height="350" src="https://www.youtube.com/embed/w1kC8v3jBR4" width="45%"></iframe></p>
                    <p><iframe frameborder="0" height="350" src="https://www.youtube.com/embed/1cAw4hhhmxk" width="45%"></iframe> <iframe frameborder="0" height="350" src="https://www.youtube.com/embed/lAtFfyGyQJQ" width="45%"></iframe></p>
                    <p><iframe frameborder="0" height="350" src="https://www.youtube.com/embed/aNOOCLJGtRQ" width="45%"></iframe> <iframe frameborder="0" height="350" src="https://www.youtube.com/embed/UDCkXVI5lbY" width="45%"></iframe></p>
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