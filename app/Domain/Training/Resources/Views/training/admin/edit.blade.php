@extends('core::components.theme-stisla.layouts.main', ['title' => 'Editar Treinamento'])

@section('css_specific')
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/stisla/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
@endsection

@section('container')

    @component('core::components.theme-stisla.partials.header', [
        'title'      => '',
        'breadcrumb' => [
            'Institucional',
            'Treinamentos',
            'Editar',
        ]
    ]) @endcomponent

    <div class="section-body">

        <form class="needs-validation" action="{{route('admin.trainings.update', $training->id)}}" method="POST" novalidate="">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @component('core::components.theme-stisla.cards.header', [
                            'title' => 'Editar Treinamento'
                        ])@endcomponent

                        <div class="card-body">

                            <div class="row">
                                @component('core::components.theme-stisla.form.input-text', [
                                    'label'     => 'Nome',
                                    'name'      => 'name_pt_br',
                                    'value'     => $training->name_pt_br,
                                    'error_msg' => "Informe o nome do treinamento",
                                    'required'  => true,
                                    'class_col' => 'col-12 col-md-6 col-lg-6',
                                ])@endcomponent

                                @component('core::components.theme-stisla.form.select', [
                                    'label'     => 'Categoria',
                                    'required'  => true,
                                    'name'      => 'category_id',
                                    'value'     => $training->category_id,
                                    'error_msg' => 'Informe a categoria',
                                    'class_col' => 'col-12 col-md-6 col-lg-',
                                    'items'     => $categories,
                                    'column_value' => 'id',
                                    'column_text'  => 'name_pt_br',
                                ])@endcomponent

                                @component('core::components.theme-stisla.form.input-text', [
                                    'label'     => 'Carga Horária',
                                    'name'      => 'course_load',
                                    'value'     => $training->course_load,
                                    'error_msg' => 'Informe a carga horária',
                                    'required'  => true,
                                    'class_col' => 'col-12 col-md-6 col-lg-6',
                                ])@endcomponent

                                @component('core::components.theme-stisla.form.input-text', [
                                    'label'     => 'Valor',
                                    'name'      => 'value',
                                    'value'     => $training->value,
                                    'error_msg' => 'Informe o valor',
                                    'required'  => true,
                                    'class_col' => 'col-12 col-md-6 col-lg-6',
                                ])@endcomponent

                                @component('core::components.theme-stisla.form.textarea', [
                                    'label'     => 'Descrição',
                                    'required'  => false,
                                    'name'      => 'description_pt_br',
                                    'value'     => $training->description_pt_br,
                                    'error_msg' => '',
                                    'class_col' => 'col-12 col-md-6 col-lg-6',
                                ])@endcomponent

                                @component('core::components.theme-stisla.form.textarea', [
                                    'label'     => 'Objetivos',
                                    'required'  => false,
                                    'name'      => 'objective',
                                    'value'     => $training->objective,
                                    'error_msg' => '',
                                    'class_col' => 'col-12 col-md-6 col-lg-6',
                                ])@endcomponent

                                @component('core::components.theme-stisla.form.textarea', [
                                    'label'     => 'Conteúdo Programático',
                                    'required'  => false,
                                    'name'      => 'program_content',
                                    'value'     => $training->program_content,
                                    'error_msg' => '',
                                    'class_col' => 'col-12 col-md-6 col-lg-6',
                                ])@endcomponent

                                @component('core::components.theme-stisla.form.textarea', [
                                    'label'     => 'Público Alvo',
                                    'required'  => false,
                                    'name'      => 'target_public',
                                    'value'     => $training->target_public,
                                    'error_msg' => '',
                                    'class_col' => 'col-12 col-md-6 col-lg-6',
                                ])@endcomponent

                                @component('core::components.theme-stisla.form.input-text', [
                                   'label'     => 'Formas de Pagamento',
                                   'name'      => 'payment',
                                   'value'     => $training->payment,
                                   'error_msg' => 'Informe as formas de pagamento',
                                   'required'  => true,
                                   'class_col' => 'col-12 col-md-6 col-lg-6',
                               ])@endcomponent
                            </div>
                        </div>

                        @component('core::components.theme-stisla.form.footer', [
                            'btn_back_route'   => route('admin.trainings.index'),
                            'btn_submit_title' => 'Editar Treinamento'
                        ])@endcomponent
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection

@section('js_specific')
    <!-- Page Specific JS File -->
    <script>
        $(function() {
            $('#value').keyup(function (event) {
                let elemento = document.getElementById('value');
                let valor = elemento.value;

                if(valor == ''){
                    console.log(valor);
                } else {
                    valor = valor + '';
                    valor = parseInt(valor.replace(/[\D]+/g, ''));
                    valor = valor + '';
                    valor = valor.replace(/([0-9]{2})$/g, ",$1");

                    if (valor.length > 6) {
                        valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
                    }

                    elemento.value = valor;
                }
            });
        });

    </script>
@endsection