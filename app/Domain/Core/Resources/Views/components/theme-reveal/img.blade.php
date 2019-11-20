{{-- Example
@component('core::components.theme-reveal.img', [
    'url'   => '/path',
    'class' => 'class',
    'style' => 'class',
    'with_div_class' => 'class',
])@endcomponent
--}}
@if(isset($with_div_class))
    <div class="{{$with_div_class}}">
        <img src="{{asset($url)}}" class="{{$class}}" {{isset($style) ? 'style="'.$style.'"' : '' }}>
    </div>
@else
    <img src="{{asset($url)}}" class="{{$class}}" {{isset($style) ? 'style="'.$style.'"' : '' }}>
@endif

