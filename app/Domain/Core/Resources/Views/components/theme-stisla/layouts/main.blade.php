<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{$title}} &mdash; {{config('app.name')}}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('themes/stisla/css/stisla.css')}}">

    <style>
        /*.btn-danger {*/
            /*background-color: #e4605e;*/
            /*border-color: #e4605e;*/
            /*box-shadow: 0 2px 6px #e4605e;*/
        /*}*/
    </style>

    @yield('css_specific')

    {{--<link rel="shortcut icon" href="https://isotermik.com/wp-content/uploads/2017/02/favico-1.png" type="image/x-icon" />--}}
    <link rel="shortcut icon" href="{{asset('/storage/core/img/institutional/favicon.png')}}" type="image/x-icon" />

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">

        <!-- Begin: Navbar -->
        @component('core::components.theme-stisla.partials.navbar') @endcomponent
        <!-- End: Navbar -->

        <!-- Begin: Sidebar -->
        @component('core::components.theme-stisla.partials.sidebar') @endcomponent
        <!-- End: Sidebar -->

        <!-- Main Content -->
        <div class="main-content">

            @yield('container')
        </div>

        <!-- Begin: Footer -->
        @component('core::components.theme-stisla.partials.footer') @endcomponent
        <!-- End: Footer -->

    </div>
</div>

<!-- General JS Scripts -->
<script src="{{asset('themes/stisla/modules/jquery.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('core/js/jquery.mask/jquery.mask.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/popper.js')}}"></script>
<script src="{{asset('themes/stisla/modules/tooltip.js')}}"></script>
<script src="{{asset('themes/stisla/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/moment.min.js')}}"></script>
<script src="{{asset('themes/stisla/js/stisla.js')}}"></script>
<script src="{{asset('themes/stisla/modules/sweetalert/sweetalert.min.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('themes/stisla/modules/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/chart.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('themes/stisla/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Template JS File -->
<script src="{{asset('themes/stisla/js/template.js')}}"></script>

@yield('js_specific')

</body>
</html>