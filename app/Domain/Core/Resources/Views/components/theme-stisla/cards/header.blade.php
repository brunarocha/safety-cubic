{{-- Example
@component('core::components.theme-stisla.cards.header', [
    'title' => 'Titulo'
    'class' => ''
    'btn_route' => ''
    'btn_text'  => ''
])@endcomponent
--}}

<div class="{{isset($class) ? $class : 'col-12 col-md-12 col-lg-12'}}">
    <div class="card-header">
        <h4>{{$title}}</h4>
    </div>

    @if(isset($btn_route))
    <div class="card-header-action">
        <a href="{{$btn_route}}" class="btn btn-primary"> {{$btn_text}} </a>
    </div>
    @endif
</div>