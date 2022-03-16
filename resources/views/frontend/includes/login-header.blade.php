@guest
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <button type="button" class="btn btn-secondary " style="background-color:#5e5edf; color: #ffffff !important;">
                    <a href="https://nbqpmembership.qci.org.in/home" title="Home">Home</a>
                </button>
                <!--<li><a href="http://localhost:8080/NBQP_Server/home/" title="Home">Home</a>-->
                <button type="button" class="btn btn-secondary " style="background-color:#5e5edf; color: #ffffff !important; margin: 5px;">
                    <a href="https://nbqpmembership.qci.org.in/about-scheme" title="About Scheme">About Membership</a></button>
                <button type="button" class="btn btn-secondary " style=" background-color:#5e5edf; color: #ffffff !important; margin: 5px;">
                    <a href="https://nbqpmembership.qci.org.in/list-of-members" title="List of Members">List of Members</a></button>
                <button type="button" class="btn btn-secondary " style="background-color:#5e5edf; color: #ffffff !important; margin: 5px;">
                    <a href="https://nbqpmembership.qci.org.in/workshop-event.php" title="Workshop / Events">Workshop/Events</a></button>
                <button type="button" class="btn btn-secondary " style=" background-color:#5e5edf; color: #ffffff !important; margin: 5px;">
                    <a href="https://nbqpmembership.qci.org.in/contact-us" title="Contact Us">Contact Us</a></button>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('frontend.auth.register') }}" title="Register"><span class="fa fa-user"></span> Register</a>
                </li>
                <li class="">
                    <a href="{{ route('frontend.auth.login') }}" title="Login"><span class="fa fa-user"></span> Login</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
@else

<div class="wrapper">
    <div class="navigation-wrapper">
        <div class="branding " style="background-color:#fff;">
            <div class="container" style="padding-left:0px; padding-right:0px;">
                <div class="row m-0">
                    <div class="col-md-4 col-sm-2 col-xs-2" style="padding-left:0px">
                        <img src="https://nbqpmembership.qci.org.in/assets/img/logo.jpg" alt="brand" class="img-responsive logo-dashboard">
                    </div>

                    <div class="col-md-7 col-sm-8 col-xs-8">
                        <div class="row mx-0">
                            <div class="pull-right">
                                <ul>
                                    <li> <big>Welcome <strong>Centre For Public Health And Food Safety</strong></big>
                                    </li>
                                </ul>
                                <ul class="dp-inline-block">
                                    <!--                 <li><a href="https://nbqpmembership.qci.org.in/dashboard/change-password" data-toggle="modal" data-target="#myModal">Change Password</a></li>
                   -->
                                    <li><a href="https://nbqpmembership.qci.org.in/dashboard/view-members">View Members</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1 col-sm-2 col-xs-2" style="padding-right:0px">
                        <img src="https://nbqpmembership.qci.org.in/assets/img/nbqp_logo.jpg" alt="brand" class="img-responsive logo-dashboard pull-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <button type="button" class="btn btn-secondary " style="background-color:#5e5edf; color: #ffffff !important;">
                    <a class="nav-link {{ active_class(Route::is('frontend.user.dashboard')) }}" href="{{route('frontend.user.dashboard')}}" title="Home">Home</a>
                </button>
                <button type="button" class="btn btn-secondary " style="background-color:#5e5edf; color: #ffffff !important; margin: 5px;">
                    <a class="nav-link {{ active_class(Route::is('frontend.user.membership')) }}" href="{{route('frontend.user.membership')}}" title="About Scheme">Membership</a></button>
                <button type="button" class="btn btn-secondary " style=" background-color:#5e5edf; color: #ffffff !important; margin: 5px;">
                    <a href="{{route('frontend.user.payment')}}" title="List of Members">Make Payment</a></button>
                <button type="button" class="btn btn-secondary " style="background-color:#5e5edf; color: #ffffff !important; margin: 5px;">
                    <a href="{{route('frontend.user.certificate')}}" title="Workshop / Events">Certificate</a></button>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('frontend.user.account') }}" title="Register">
                        Welcome: {{ $logged_in_user->name }}
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('frontend.auth.logout') }}" title="Login">
                        logout</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
@endguest