@extends('frontend.layouts.frontend')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
<section class="basic-inner-page">
    <div class="container">
        <div class="inner-grp clearfix">
            <div id="sticky-anchor"></div>
            <div class="container">

                <div class="row justify-content-md-center">
                    <div class="row mb-4">

                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <strong>
                                        <i class="fas fa-tachometer-alt"></i> @lang('navs.frontend.dashboard')
                                    </strong>
                                </div>
                                <!--card-header-->
                                <div class="card-body">

                                    <div class="row justify-content-md-center">
                                        <div class="col-md-5">
                                            <h3>Application Status</h3>
                                        </div>
                                        <div class="col-md-5">
                                            <h3>Registration Date: 31-07-2017</h3>
                                        </div>

                                        <div class="col-md-10">
                                            <div class="card bg-primary text-white text-center  p-3 mb-3">

                                                <blockquote class="blockquote mb-0">
                                                    <p>Your Payment Submitted Successfully.</p>
                                                    <a href="{{route('frontend.user.payment')}}">
                                                        <footer class="text-white">
                                                            <small>
                                                                <cite title="Source Title">Click Here to Print Acknowledgement Slip.</cite>
                                                            </small>
                                                        </footer>
                                                    </a>
                                                </blockquote>

                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="card bg-primary text-white text-center p-3">
                                                <blockquote class="blockquote mb-0">
                                                    <p>Your Certificate / Membership Card has been Generated Successfully.</p>
                                                    <a href="{{route('frontend.user.certificate')}}">
                                                        <footer class="text-white">
                                                            <small>
                                                                <cite title="Source Title">Click Here to Check Your Certificate / Membership Card.</cite>
                                                            </small>
                                                        </footer>
                                                    </a>
                                                </blockquote>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- row -->
                            </div> <!-- card-body -->
                            <div class="row">

                            </div>
                        </div><!-- card -->
                    </div><!-- row -->
                </div><!-- row -->
            </div>
        </div>
    </div>
    </div>
</section>
@endsection