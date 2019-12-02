{{-- Example
@component('core::components.theme-stisla.menus.li-dropdown', [
    'title'       => 'Cadastros',
    'icon_class'  => 'far fa-file-alt',
    'links'       => [
        'Cursos'      => '#',
        'Instrutores' => '#',
        'Alunos'      => '#',
    ]
]) @endcomponent
--}}

<li class="dropdown">
    <a href="#" class="nav-link has-dropdown">
        <i class="{{$icon_class}}"></i> <span>{{$title}}</span>
    </a>
    <ul class="dropdown-menu" style="display: block;">
        @foreach($links as $link)
            <li class="{{$link['active'] ? 'active' : ''}}"><a class="nav-link" href="{{$link['link']}}">{{$link['title']}}</a></li>
        @endforeach
    </ul>
</li>