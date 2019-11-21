@extends('core::components.theme-stisla.layouts.main', ['title' => 'Editar Empresa'])

@section('css_specific') @endsection

@section('container')

        @component('core::components.theme-stisla.partials.header', [
            'title'      => '', //trans('dashboard::menu.label_company'),
            'title_card' => 'Editar Empresa', //trans('company::form.label_edit'),
            'breadcrumb' => [
                'Institucional', //trans('dashboard::menu.label_institutional'),
                'Empresa', //trans('dashboard::menu.label_company'),
            ]
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
                                'title' => 'Editar Empresa', //trans('company::form.label_edit')
                            ])@endcomponent

                            <div class="card-body">

                                <div class="row">
                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'CNPJ', //trans('company::form.label_register'),
                                        'name'      => 'register',
                                        'value'     => $company->register,
                                        'error_msg' => "Informe o CNPJ",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Razão Social', //trans('company::form.label_social_name'),
                                        'name'      => 'social_name',
                                        'value'     => $company->social_name,
                                        'error_msg' => "Informe a Razão Social",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Nome Fantasia', //trans('company::form.label_fancy_name'),
                                        'name'      => 'fancy_name',
                                        'value'     => $company->fancy_name,
                                        'error_msg' => "Informe o Nome Fantasia",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Email', //trans('company::form.label_email'),
                                        'name'      => 'email',
                                        'value'     => $company->email,
                                        'error_msg' => "Informe o Email",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent
                                </div>

                                <div class="row">
                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Telefone', //trans('company::form.label_phone'),
                                        'name'      => 'phone',
                                        'value'     => $company->phone,
                                        'error_msg' => "Informe o Telefone",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-4',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'CEP', //trans('company::form.label_zip_code'),
                                        'name'      => 'zip_code',
                                        'value'     => $company->zip_code,
                                        'error_msg' => "Informe o CEP",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-2',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Endereço', //trans('company::form.label_address'),
                                        'name'      => 'address',
                                        'value'     => $company->address,
                                        'error_msg' => "Informe o Endereço",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent
                                </div>

                                <div class="row">
                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Número', //trans('company::form.label_address_number'),
                                        'name'      => 'address_number',
                                        'value'     => $company->address_number,
                                        'error_msg' => "Informe o Número",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-2',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Cidade', //trans('company::form.label_city'),
                                        'name'      => 'city',
                                        'value'     => $company->city,
                                        'error_msg' => "Informe a Cidade",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-4 col-lg-5',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'Estado', //trans('company::form.label_state'),
                                        'name'      => 'state',
                                        'value'     => $company->state,
                                        'error_msg' => "Informe o Estado",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-4 col-lg-2',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => 'País', //trans('company::form.label_country'),
                                        'name'      => 'country',
                                        'value'     => $company->country,
                                        'error_msg' => "Informe o País",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-4 col-lg-3',
                                    ])@endcomponent
                                </div>

                            </div>

                            <div class="card-footer text-left">
                                <button class="btn btn-primary">{{trans('company::form.label_edit')}} </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

@endsection


@section('js_specific')
    <!-- Page Specific JS File -->

@endsection