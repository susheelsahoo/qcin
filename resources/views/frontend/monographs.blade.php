@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<section class="basic-inner-page">
    <div class="container">
        <div class="inner-grp clearfix">
            <div class="full-width">
                <h1>Monographs</h1>
                <div class="descripton mb-30">
                    <p><a href="#">Know more about <strong>Call For Monographs</strong></a></p>
                    <p><a href="{{ route('frontend.call_for_monograph') }}">Registration for Monographs</a></p>
                    <div class="left_"></div>
                    <div class="descripton1 mb-30"></div>
                    <div class="descripton2 mb-30"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
@captchaScripts
@endif
@endpush