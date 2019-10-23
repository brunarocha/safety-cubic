<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; {{\Config::get('app.name')}}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/bootstrap-social/bootstrap-social.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('themes/stisla/css/stisla.css')}}">

    <script src="{{asset('themes/stisla/modules/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('themes/stisla/js/page/modules-sweetalert.js')}}"></script>

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    @component('core::components.theme-stisla.alerts.sweetalert')@endcomponent

                    <div class="card card-primary">
                        <div class="card-header"><h4>{{trans('user::auth.label_login')}}</h4></div>

                        <div class="card-body">
                            <form method="POST" action="{{route('auth.login.store')}}" class="needs-validation" novalidate="">
                                @csrf

                                <div class="form-group">
                                    <label for="email">{{trans('user::auth.label_email')}}</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>

                                    @component('core::components.theme-stisla.divs.input-error', [
                                        'message' => trans('user::auth.message_login_email')
                                    ])@endcomponent
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">{{trans('user::auth.label_password')}}</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small">
                                                {{trans('user::auth.label_forgot_password')}}
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>

                                    @component('core::components.theme-stisla.divs.input-error', [
                                        'message' => trans('user::auth.message_login_password')
                                    ])@endcomponent
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">{{trans('user::auth.label_remember_me')}}</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        {{trans('user::auth.label_login')}}
                                    </button>
                                </div>
                            </form>

                            <div class="text-center mt-4 mb-3">
                                <div class="text-job text-muted">Login With Social</div>
                            </div>
                            <div class="row sm-gutters">
                                <div class="col-6">
                                    <a class="btn btn-block btn-social btn-facebook">
                                        <span class="fab fa-facebook"></span> Facebook
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-block btn-social btn-twitter">
                                        <span class="fab fa-twitter"></span> Twitter
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        {{trans('user::auth.label_dont_account')}} <a href="{{--{{route('user::user.register')}}--}}">{{trans('user::auth.label_create_account')}}</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{asset('themes/stisla/modules/jquery.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/popper.js')}}"></script>
<script src="{{asset('themes/stisla/modules/tooltip.js')}}"></script>
<script src="{{asset('themes/stisla/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('themes/stisla/modules/moment.min.js')}}"></script>
<script src="{{asset('themes/stisla/js/stisla.js')}}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{asset('themes/stisla/js/template.js')}}"></script>


</body>


</html>

