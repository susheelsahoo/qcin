@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<article id="wrappers">
    <section class="basic-inner-page">
        <div class="container">
            <div class="inner-grp clearfix">
                <div class="full-width">
                    <h1>Gallery</h1>
                </div>
            </div>
            <div id="gallery">
                <div class="row text-center text-lg-left mdb-lightbox no-margin">
                    <div class="col-md-3 col-sm-6 gal">
                        <a {{ route('frontend.history') }}">
                            <img class="img-thumbnail" src="public/uploads/galleryimages/1609937195.Signing%20of%20declaration%20amongst%20national%20platforms.jpg" alt="PADD Photo Gallery">
                            <div class="cap">PADD Photo Gallery</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 gal">
                        <a href="{{ route('frontend.gallery/qci-signs-mou-for-zed-cell-at-maruti') }}">
                            <img class="img-thumbnail" src="public/uploads/galleryimages/1609854141.IMG_0021.jpg" alt="QCI signs MoU for ZED cell at Maruti">
                            <div class="cap">QCI signs MoU for ZED cell at Maruti</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 gal">
                        <a href="{{ route('frontend.gallery/chairman%27s-dinner-2018') }}">
                            <img class="img-thumbnail" src="public/uploads/galleryimages/1579250060.DSC_2241.jpg" alt="Chairman&#039;s Dinner 2018">
                            <div class="cap">Chairman&#039;s Dinner 2018</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 gal">
                        <a href="{{ route('frontend.gallery/11th-rqc') }}">
                            <img class="img-thumbnail" src="public/uploads/galleryimages/1579252231.RQCPoster.png" alt="11th RQC">
                            <div class="cap">11th RQC</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 gal">
                        <a href="{{ route('frontend.gallery/event-1') }}">
                            <img class="img-thumbnail" src="public/uploads/galleryimages/1579246304.332A1675.jpg" alt="ICSTS">
                            <div class="cap">ICSTS</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<!--row-->
@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
@captchaScripts
@endif
@endpush