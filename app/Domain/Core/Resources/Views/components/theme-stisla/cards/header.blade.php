{{-- Example
@component('core::components.theme-stisla.cards.header', [
    'title' => 'Titulo'
    'class' => ''
])@endcomponent
--}}

<div class="{{isset($class) ? $class : 'col-12 col-md-12 col-lg-12'}}">
    <div class="card-header">
        <h4>{{$title}}</h4>
    </div>
</div>