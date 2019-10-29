{{--
@component('core::components.theme-reveal.partials.header', [
    'menus'  => $menus,
]) @endcomponent
--}}

<header id="header">
    <div class="container">

        <div id="logo" class="pull-left" style="height: 400px">
            <h1><a href="#body" class="scrollto">Safety<span>Cubic</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{--<a href="#body"><img src="{{asset('core/img/institutional/logo.png')}}" alt="" title="" /></a>--}}
            {{--<img src="{{asset('core/img/institutional/logo.png')}}" alt="" title="" />--}}
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                @foreach($menus as $menu)
                    <li><a href="{{$menu['url']}}">{{$menu['display_name']}}</a></li>
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