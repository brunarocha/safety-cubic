{{--
@component('core::components.theme-reveal.section', [
    'id'    => 'services',
    'title' => 'Services',
    'text'  => 'Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua',
    'additional_class' => 'wow fadeInUp'
])

    html

@endcomponent
--}}
<section id="{{$id}}" class="{{isset($additional_class) ? $additional_class : ''}}">
    <div class="container">
        @if(isset($title))
        <div class="section-header">
            <h2>{{$title}}</h2>

            @if(isset($text))
                <p>{{$text}}</p>
            @endif
        </div>
        @endif

        {{ $slot }}

    </div>
</section>
