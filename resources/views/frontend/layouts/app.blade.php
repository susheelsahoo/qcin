<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Foundation For Quality Promotion')">
    <meta name="author" content="@yield('meta_author', 'FasTrax Infotech')">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')
    <!-- fronted CSS -->
    <link href="{{ asset('fronted/css/fonts-family.css?family=Montserrat:300,300i,400,400i,500,500i,600,700,800,900&amp;display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('fronted/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fronted/js/jquery.scrollable.css') }}" rel="stylesheet">
    <link href="{{ asset('fronted/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('fronted/css/appqci.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    <!-- {{ style(mix('css/frontend.css')) }} -->

    @stack('after-styles')
</head>


<body data-plugin-cursor-effect>
    <div class="body">
        @include('includes.partials.read-only')
        @include('includes.partials.logged-in-as')
        @include('frontend.includes.header')

        @include('includes.partials.messages')

        @yield('content')
        @include('frontend.includes.footer')

        <!-- Scripts -->
        @stack('before-scripts')

        <script type="text/javascript" src="{{ asset('fronted/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('fronted/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('fronted/js/custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('fronted/js/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('fronted/js/jquery.mousewheel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('fronted/js/jquery.scrollable.js') }}"></script>
        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')

        @include('includes.partials.ga')
    </div>


</html>