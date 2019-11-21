<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; {{config('app.name')}}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/bootstrap-social/bootstrap-social.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('themes/stisla/css/stisla.css')}}">

    <script src="{{asset('themes/stisla/modules/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('themes/stisla/js/page/modules-sweetalert.js')}}"></script>

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

    <style>
        .btn-login-modified {
            background-color: #0c2e8a;
            border-color: #0c2e8a
        }

        .color-modified {
            color: #0c2e8a;
        }
    </style>

</head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand" style="margin-top: 0">
                        {{--<strong>Safety</strong> Cubic--}}
                        <img src="{{asset('/storage/core/img/institutional/logo.png')}}" alt="logo" width="70%" class="shadow-light rounded-circle">
                    </div>

                    @component('core::components.theme-stisla.alerts.sweetalert')@endcomponent

                    <div class="card card-primary" style="border-top: 2px solid #0c2e8a">
                        {{--<div class="card-header"><h4>{{trans('user::auth.label_login')}}</h4></div>--}}
                        <div class="card-header"><h4>Entrar</h4></div>

                        <div class="card-body">
                            <form method="POST" action="{{route('auth.login.store')}}" class="needs-validation" novalidate="">
                                @csrf

                                <div class="form-group">
                                    {{--<label for="email">{{trans('user::auth.label_email')}}</label>--}}
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>

                                    @component('core::components.theme-stisla.divs.input-error', [
                                        //'message' => trans('user::auth.message_login_email')
                                        'message' => 'Por favor, insira o email'
                                    ])@endcomponent
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        {{--<label for="password" class="control-label">{{trans('user::auth.label_password')}}</label>--}}
                                        <label for="password" class="control-label">Senha</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small color-modified">
                                                {{--{{trans('user::auth.label_forgot_password')}}--}}
                                                Esqueceu a senha?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>

                                    @component('core::components.theme-stisla.divs.input-error', [
                                        //'message' => trans('user::auth.message_login_password')
                                        'message' => 'Por favor, insira a senha'
                                    ])@endcomponent
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">{{--{{trans('user::auth.label_remember_me')}}--}}Lembrar-me</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-login-modified" tabindex="4">
                                        {{--{{trans('user::auth.label_login')}}--}} Entrar
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        {{--{{trans('user::auth.label_dont_account')}} <a href="--}}{{--{{route('user::user.register')}}--}}{{--" class="color-modified">{{trans('user::auth.label_create_account')}}</a>--}}
                        Não tem uma conta? <a href="{{--{{route('user::user.register')}}--}}" class="color-modified">Crie umav</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Safety Cubic {{date('Y')}}
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

