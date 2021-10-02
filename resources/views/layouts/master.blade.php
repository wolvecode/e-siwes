<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @stack('meta')
    <title>{{ config('app.name') }} &mdash; @yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />

    <link rel="icon" href="{{ asset('assets/img/kwasu.png') }}" type="image/x-icon"/>
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

{{--    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>
{{--    <link rel="stylesheet" href="{{ asset('assets/css/sidemenu.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/sidemenu1.css') }}">
    <link href="{{ asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!--- Dark-mode css --->
{{--    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet">--}}
    <!---Skinmodes css-->
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />
{{--    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">--}}
    @stack('css')
</head>
<body class="main-body app sidebar-mini">
<!-- Loader -->
<div id="global-loader">
    <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->
<div class="page">
    @include('layouts.sidebar')
    <div class="main-content app-content">
        @include('layouts.header')
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- footer -->
    @include('layouts.footer')
</div>
<!-- script -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>
<script src="{{ asset('assets/js/sticky.js') }}"></script>
<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
<script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>
<!-- Custom Scroll bar Js-->
<script src="{{ asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/plugins/side-menu/sidemenu.js') }}"></script>
<script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
<script src="{{ asset('assets/plugins/sidebar/sidebar-custom.js') }}"></script>
<script src="{{ asset('assets/js/eva-icons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Internal Modal js-->
<script src="{{ asset('assets/js/modal.js') }}"></script>
@if(session()->has('status'))
    @php($status = session()->get('status'))
    <script>
        notif({
            msg: "<b>{{ $status['title'] }}:</b> {{ $status['message'] }}",
            type: "{{ $status['type'] }}"
        });
    </script>
@endif
@stack('scripts')
</body>
</html>
