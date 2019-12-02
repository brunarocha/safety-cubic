{{-- Example
@component('core::components.theme-stisla.form.footer', [
    'btn_back_route'   => $btn_back,
    'btn_submit_title' => 'Titulo'
])@endcomponent
--}}

<div class="card-footer text-left">
    <a class="btn btn-secondary" href="{{$btn_back_route}}">Voltar</a>
    <button class="btn btn-primary">{{$btn_submit_title}} </button>
</div>