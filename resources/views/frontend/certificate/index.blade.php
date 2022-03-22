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
                                        <i class="fas fa-tachometer-alt"></i> Certificate
                                    </strong>
                                </div>
                                <!--card-header-->

                                <div class="card-body">
                                    <div class="block">
                                        <div class="container con_bg con_height">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <section id="main-content">
                                                        <div id="page-main">
                                                            <img src="certificate.png" alt="Girl in a jacket" width="500" height="600">

                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- card-body -->
                            </div><!-- card -->
                        </div><!-- row -->
                    </div><!-- row -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection