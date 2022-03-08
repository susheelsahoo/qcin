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
                                <li class="menu-xcb btn btn-link active collapsed" data-toggle="collapse" data-target="#collapseone-4" style="width:100%">
                                    <a href="{{ route('frontend.quality-best-practices') }}">Quality Best Practices</a>
                                </li>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="padding:0px;">
                                <li class="menu-xcb btn btn-link  collapsed" data-toggle="collapse" data-target="#collapseone-5" style="width:100%">
                                    <a href="{{ route('frontend.editorial') }}">Editorials</a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <!-- <p><a class="blue-btn" href="">Back</a></p> -->
                    <p><a class="blue-btn" href="{{ route('frontend.index') }}">Back</a></p>
                </ul>
            </div>
            <div class="right-side">
                <h1>Quality Best Practices</h1>
                <div class="descripton mb-30">
                    <p>Quality Best Practices is a compendium of selected FQP-D.L. Shah Quality Award Winning Case Studies” of different sectors ranging from manufacturing, services to healthcare and education. This publication is brought out every year and has been acknowledged as an important resource for quality professionals and quality managers in any industry.</p>
                    <p>Some sample case studies may be visited at: <a href="#" target="_blank" rel="noreferrer noopener">Here</a><br />
                        To get a printed hard copy (Price : INR 600/-) of the above, contact: <a href="#">shruti.nbqp@fqpn.org</a> | 8800891834
                    </p>
                    <p> <strong> </strong></p>
                    <table border="1" cellpadding="1" cellspacing="1" style="width:600px;">
                        <tbody>
                            <tr>
                                <td>
                                    <p style="text-align:center;"><img alt="" src="public/uploads/ck-images/1609850257.Screenshot%202021-01-05%20180716.png" style="width:200px;height:287px;" /></p>
                                    <p style="text-align:center;"><strong><a href="#">Volume 6</a></strong></p>
                                </td>
                                <td>
                                    <p style="text-align:center;"><img alt="" src="public/uploads/ck-images/1591682813.Covers%20%202019.jpg" style="width:200px;height:287px;" /></p>
                                    <p style="text-align:center;"><strong><a href="#">Volume 5</a> </strong></p>
                                </td>
                                <td>
                                    <p style="text-align:center;"><strong><img alt="" src="public/uploads/ck-images/1591683115.Cover%202017...jpg" style="width:200px;height:286px;" /></strong></p>
                                    <p style="text-align:center;"><strong> <a href="#">Volume 4</a> </strong></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p><strong> </strong></p>
                    <table border="1" cellpadding="1" cellspacing="0" style="width:600px;">
                        <tbody>
                            <tr>
                                <td>
                                    <p style="text-align:center;"><img alt="" src="public/uploads/ck-images/1591683186.Cover-2016.jpg" style="width:200px;height:286px;" /></p>
                                    <p style="text-align:center;"> <strong><a href="#">Volume 3</a></strong></p>
                                </td>
                                <td>
                                    <p style="text-align:center;"><strong><img alt="" src="public/uploads/ck-images/1591683261.Cover-2015...jpg" style="width:200px;height:286px;" /></strong></p>
                                    <p style="text-align:center;"><strong><a href="#">Volume 2</a> </strong></p>
                                </td>
                                <td>
                                    <p style="text-align:center;"><strong><img alt="" src="public/uploads/ck-images/1591683319.Cover-2014...jpg" style="width:200px;height:284px;" /></strong></p>
                                    <p style="text-align:center;"><strong><a href="#">Volume 1</a></strong></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p><strong> </strong></p>
                    <p><strong> </strong> </p>
                    <p> </p>
                    <p> </p>
                    <p> </p>
                    <p> </p>
                    <p> </p>
                    <p> </p>
                    <p> </p>
                    <p> </p>
                    <p><strong> </strong> </p>
                    <p> </p>
                    <p> </p>
                    <p> </p>
                    <p> </p>
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