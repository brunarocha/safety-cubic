@extends('core::components.theme-stisla.layouts.main', ['title' => 'Editar Empresa'])

@section('css_specific') @endsection

@section('container')

        @component('core::components.theme-stisla.partials.header', [
            'title'      => '',
            'title_card' => 'Editar Empresa',
            'breadcrumb' => [ 'Institucional', 'Empresa' ]
        ]) @endcomponent

        @component('core::components.theme-stisla.alerts.sweetalert') @endcomponent

        <div class="section-body">
            <form class="needs-validation" action="{{route('company.update', $company->id)}}" method="POST" novalidate="">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card">
                            @component('core::components.theme-stisla.cards.header', [
                                'title' => 'Editar Empresa',
                            ])@endcomponent

                            <div class="card-body">

                                <div class="row">
                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'CNPJ',
                                        'name'      => 'register',
                                        'value'     => $company->register,
                                        'error_msg' => "Informe o CNPJ",
                                        'required'  => true,
                                        'class_col' => 'cnpj col-12 col-md-6 col-lg-6',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Razão Social',
                                        'name'      => 'social_name',
                                        'value'     => $company->social_name,
                                        'error_msg' => "Informe a Razão Social",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Nome Fantasia',
                                        'name'      => 'fancy_name',
                                        'value'     => $company->fancy_name,
                                        'error_msg' => "Informe o Nome Fantasia",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Email',
                                        'name'      => 'email',
                                        'value'     => $company->email,
                                        'error_msg' => "Informe o Email",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent
                                </div>

                                <div class="row">
                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Telefone',
                                        'name'      => 'phone',
                                        'value'     => $company->phone,
                                        'error_msg' => "Informe o Telefone",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-4',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'CEP',
                                        'name'      => 'zip_code',
                                        'value'     => $company->zip_code,
                                        'error_msg' => "Informe o CEP",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-2',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Endereço',
                                        'name'      => 'address',
                                        'value'     => $company->address,
                                        'error_msg' => "Informe o Endereço",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent
                                </div>

                                <div class="row">
                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Número',
                                        'name'      => 'address_number',
                                        'value'     => $company->address_number,
                                        'error_msg' => "Informe o Número",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-2',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Cidade',
                                        'name'      => 'city',
                                        'value'     => $company->city,
                                        'error_msg' => "Informe a Cidade",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-4 col-lg-5',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Estado',
                                        'name'      => 'state',
                                        'value'     => $company->state,
                                        'error_msg' => "Informe o Estado",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-4 col-lg-2',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'País',
                                        'name'      => 'country',
                                        'value'     => $company->country,
                                        'error_msg' => "Informe o País",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-4 col-lg-3',
                                    ])@endcomponent
                                </div>
                            </div>

                            @component('core::components.theme-stisla.form.footer', [
                                'btn_back_route'   => route('dashboard.index'),
                                'btn_submit_title' => 'Editar Empresa'
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
        //console.log($("#register")[0])
        //$('input[name="register"]').mask('00.000.000/0000-00', {reverse: true});


//        $(function() {
//            $('#register').mask('00.000.000/0000-00', {reverse: true});
//        })

//            $('document').ready(function() {
//                $("#register").mask("00.000.000/0000-00");
//            });

//        $(document).ready(function($){
//            $('#register').mask('00.000.000/0000-00', {reverse: true});
//        })

        $(document).ready(function(){
            console.log($('#register').mask("00.000.000/0000-00"))
        });


    </script>

@endsection