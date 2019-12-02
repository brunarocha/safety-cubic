@extends('core::components.theme-stisla.layouts.main', ['title' => 'Publicações'])

@section('css_specific') @endsection

@section('container')

    @component('core::components.theme-stisla.partials.header', [
        'title'      => '',
        'breadcrumb' => [ 'Cadastros', 'Publicações' ]
    ]) @endcomponent

    @include('core::components.theme-stisla.alerts.sweetalert')

    @include('core::components.theme-stisla.alerts.error-form')

    <div class="section-body">
        <form class="needs-validation" action="{{route('publication.admin.update', $publication->id)}}" method="POST" novalidate="">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="card">
                        @component('core::components.theme-stisla.cards.header', [
                            'title' => 'Editar Publicação',
                        ])@endcomponent

                        <div class="card-body">

                            <div class="row">
                                @component('core::components.theme-stisla.form.input-text', [
                                    'label'     => 'Título',
                                    'name'      => 'title',
                                    'value'     => $publication->title,
                                    'error_msg' => "Informe o título",
                                    'required'  => true,
                                    'class_col' => 'cnpj col-12 col-md-8 col-lg-8',
                                ])@endcomponent

                                @component('core::components.theme-stisla.form.input-text', [
                                    'label'     => 'Data',
                                    'name'      => 'date',
                                    'value'     => date('d/m/Y', strtotime($publication->date)),
                                    'required'  => false,
                                    'disabled'  => true,
                                    'class_col' => 'col-12 col-md-4 col-lg-4',
                                ])@endcomponent
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label>Publicação</label>
                                        <textarea name="publication" class="summernote-simple" required>{{$publication->publication}}</textarea>

                                        <div class="invalid-feedback">
                                            Informe o texto da publicação
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @component('core::components.theme-stisla.form.footer', [
                            'btn_back_route'   => route('publication.admin.index'),
                            'btn_submit_title' => 'Editar Publicação'
                        ])@endcomponent
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection


@section('js_specific')
    <!-- Page Specific JS File -->
@endsection