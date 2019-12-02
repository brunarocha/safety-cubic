<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            @role('administrator')
                {{-- Menu Institucional --}}
                @component('core::components.theme-stisla.menus.li-dropdown', [
                    'title'      => 'Institucional',
                    'icon_class' => 'far fa-file-alt',
                    'links'      => [
                        ['title' => 'Empresa',      'link' => route('company.edit', 1),         'active' => request()->is('/cadastros/empresa') || request()->is('/cadastros/empresa/*')],
                        ['title' => 'Videos',       'link' => '#',                              'active' => false],
                        ['title' => 'Treinamentos', 'link' => route('admin.trainings.index'),   'active' => request()->is('/cadastros/treinamentos') || request()->is('/cadastros/treinamentos/*')],
                    ]
                ]) @endcomponent

                {{-- Menu Cadastros --}}
                @component('core::components.theme-stisla.menus.li-dropdown', [
                    'title'      => 'Cadastros',
                    'icon_class' => 'far fa-file-alt',
                    'links'      => [
                        //['title' => 'Instrutores', 'link' => '#', 'active' => false],
                        //['title' => 'Estudantes',  'link' => '#', 'active' => false],
                        ['title' => 'Publicações', 'link' => route('publication.admin.index'), 'active' => request()->is('cadastros/publicacoes') || request()->is('cadastros/publicacoes/*')]
                    ]
                ]) @endcomponent
            @endrole

            {{--@role('student')
                <li class="{{request()->is('student/trainings/*') ? 'active' : ''}}">
                    <a class="nav-link" href="credits.html">
                        <i class="fas fa-th-large"></i>
                        <span>{{trans('dashboard::menu.label_my_trainings')}}</span>
                    </a>
                </li>

                <li>
                    <a class="nav-link" href="credits.html">
                        <i class="fas fa-pencil-ruler"></i>
                        <span>{{trans('dashboard::menu.label_newsletters')}}</span>
                    </a>
                </li>

                <li>
                    <a class="nav-link" href="credits.html">
                        <i class="fas fa-pencil-ruler"></i>
                        <span>{{trans('dashboard::menu.label_forum')}}</span>
                    </a>
                </li>
            @endrole--}}



        </ul>

    </aside>
</div>