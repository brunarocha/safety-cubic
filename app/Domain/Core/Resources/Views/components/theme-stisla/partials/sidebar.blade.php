<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            @role('administrator'))
                {{-- Menu Institucional --}}
                @component('core::components.theme-stisla.menus.li-dropdown', [
                    'title'      => trans('dashboard::menu.label_institutional'),
                    'icon_class' => 'far fa-file-alt',
                    'links'      => [
                        //trans('core::menu.label_site')      => '#',
                        trans('dashboard::menu.label_company')   => route('company.edit', 1),
                        trans('dashboard::menu.label_videos')    => '#',
                        trans('dashboard::menu.label_courses')   => '#',
                    ]
                ]) @endcomponent

                {{-- Menu Cadastros --}}
                @component('core::components.theme-stisla.menus.li-dropdown', [
                    'title'      => trans('dashboard::menu.label_registers'),
                    'icon_class' => 'far fa-file-alt',
                    'links'      => [
                        trans('dashboard::menu.label_instructors') => '#',
                        trans('dashboard::menu.label_students')    => '#',
                    ]
                ]) @endcomponent
            @endrole

            @role('student')
                @if(!request()->is('dashboard'))
                    <li>
                        <a class="nav-link" href="credits.html">
                            <i class="fas fa-pencil-ruler"></i>
                            <span>{{trans('dashboard::menu.label_course_material')}}</span>
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
                @endif
            @endrole



        </ul>

    </aside>
</div>