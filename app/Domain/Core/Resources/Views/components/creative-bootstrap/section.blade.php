{{--
@component('core::components.creative-bootstrap.section', [
    'id'               => 'section_id',
    'additional_class' => 'bg-primary',
])
    <strong>Whoops!</strong> Something went wrong!
@endcomponent
--}}


{{--<section class="page-section" id="services">--}}
<section class="page-section {{$additional_class}}" id="{{$id}}">
    <div class="container">
        {{ $slot }}
    </div>
</section>