{{--
@component('core::components.theme-reveal.partials.header', [
    'menus'  => $menus,
]) @endcomponent
--}}

<header id="header">
    <div class="container">

        <div id="logo" class="pull-left" style="margin-top: -8px">
            {{--<h1><a href="#body" class="scrollto">Safety<span>Cubic</span></a></h1>--}}
            {{--<h1><a href="#body" class="scrollto"><img src="{{asset('/storage/core/img/institutional/logo2.png')}}" class="img-fluid" alt="" title="" style="margin-bottom: 50px; padding-top: 0; margin-top: 0"/></a></h1>--}}
            {{--<h1><a href="#body" class="scrollto"><img src="{{asset('/storage/core/img/institutional/logo2.png')}}" class="img-fluid" alt="" title="" style="padding-bottom: 50px; padding-top: 0; margin-top: 0; height:100%"/></a></h1>--}}
            <!-- Uncomment below if you prefer to use an image logo -->
            {{--<a href="#body"><img src="{{asset('core/img/institutional/logo.png')}}" alt="" title="" /></a>--}}
            <img src="{{asset('/storage/core/img/institutional/safetycubic.png')}}" class="img-fluid scrollto" alt="" title="" {{--style="margin-bottom: 50px; padding-top: 0; margin-top: 0;"--}}/>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                @foreach($menus as $menu)
                    <li><a href="{{request()->is('/') ? $menu['url'] : route('institutional.index')}}">{{$menu['display_name']}}</a></li>
                @endforeach
                {{--<li class="menu-active"><a href="#body">Home</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>--}}
            </ul>
        </nav>
        <!-- #nav-menu-container -->
    </div>
</header>