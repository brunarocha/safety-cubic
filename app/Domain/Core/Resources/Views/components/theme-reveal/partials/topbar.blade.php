{{--
@component('core::components.theme-reveal.partials.topbar', [
    'email'  => 'comercial@safetycubic.com.br',
    'phone'  => '+55 92 99999-9999',
    'social' => [
        'twitter'     => '#',
        'facebook'    => '#',
        'instagram'   => '#',
        'google-plus' => '#',
        'linkedin'    => '#',
    ]
]) @endcomponent
--}}

<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:{{$email}}">{{$email}}</a>
            <i class="fa fa-phone"></i> {{$phone}}
        </div>
        <div class="social-links float-right">
            <a href="{{route('auth.login.index')}}"><i class="fa fa-sign-in"></i> {{trans('institutional::institutional.login_register')}}</a>

            @foreach($social as $key => $link)
                <a href="{{$link}}" class="{{$key}}"><i class="fa fa-{{$key}}"></i></a>
            @endforeach
        </div>
    </div>
</section>