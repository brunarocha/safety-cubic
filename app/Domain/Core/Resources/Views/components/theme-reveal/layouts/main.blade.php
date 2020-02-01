<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('/storage/core/img/institutional/favicon.png')}}" type="image/x-icon" />

    <!-- Google Fonts -->
    <link href="{{asset('themes/reveal/css/fonts.css')}}" rel="stylesheet">
    {{--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">--}}

    <!-- Bootstrap CSS File -->
    <link href="{{asset('themes/reveal/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('themes/reveal/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('themes/reveal/css/style.css')}}" rel="stylesheet">

    @yield('css_specific')

</head>

<body id="body">

    <!--==========================
          Top Bar
    ============================-->
    @component('core::components.theme-reveal.partials.topbar', [
        'email'  => $company->email,
        'phone'  => $company->phone,
        'social' => [
            'twitter'     => '#',
            'facebook'    => '#',
            'instagram'   => '#',
            'google-plus' => '#',
            'linkedin'    => '#',
        ]
    ]) @endcomponent

    <!--==========================
        Header
    ============================-->
    @component('core::components.theme-reveal.partials.header', [
        'menus'  => $menus,
    ]) @endcomponent
    <!-- #header -->

    @yield('container')


    <!--==========================
      Footer
    ============================-->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Safety Cubic</strong> {{date('Y')}}. All Rights Reserved
            </div>
            <div class="credits">
                Developed by <strong>ProTec Solutions - Tecnologia & Segurança</strong>
                <br>
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('themes/reveal/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('themes/reveal/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('themes/reveal/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('themes/reveal/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('themes/reveal/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('themes/reveal/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('themes/reveal/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('themes/reveal/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('themes/reveal/lib/magnific-popup/magnific-popup.min.js')}}"></script>
    <script src="{{asset('themes/reveal/lib/sticky/sticky.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('themes/reveal/js/main.js')}}"></script>

    @yield('js_specific')

</body>
</html>
