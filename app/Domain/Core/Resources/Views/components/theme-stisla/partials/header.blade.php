{{-- Example
@component('core::components.theme-stisla.partials.header', [
    'title'      => 'Empresa',
    'title_card' => 'Editar Empresa',
    'breadcrumb' => [
        'Institutional',
        'Empresa'
    ]
]) @endcomponent
--}}

<section class="section">
<div class="section-header">
    <h1>{{$title}}</h1>
    <div class="section-header-breadcrumb">
        {{--<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>--}}
        @if(!request()->is('dashboard'))
            <div class="breadcrumb-item">Dashboard</div>
        @endif

        @foreach($breadcrumb as $item)
            <div class="breadcrumb-item">{{$item}}</div>
        @endforeach

    </div>
</div>
</section>