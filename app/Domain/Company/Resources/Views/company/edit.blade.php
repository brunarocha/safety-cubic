@extends('core::components.theme-stisla.layouts.main', ['title' => 'Dashboard'])

@section('css_specific') @endsection

@section('container')

        @component('core::components.theme-stisla.partials.header', [
            'title'      => trans('dashboard::menu.label_company'),
            'title_card' => trans('company::form.label_edit'),
            'breadcrumb' => [
                trans('dashboard::menu.label_institutional'),
                trans('dashboard::menu.label_company'),
            ]
        ]) @endcomponent

        <div class="section-body">
            <form class="needs-validation" action="{{route('company.update', $company->id)}}" method="POST" novalidate="">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card">
                            @component('core::components.theme-stisla.cards.header', [
                                'title' => trans('company::form.label_edit')
                            ])@endcomponent

                            <div class="card-body">

                                <div class="row">
                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_register'),
                                        'name'      => 'register',
                                        'value'     => $company->register,
                                        'error_msg' => "What's your name?",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_social_name'),
                                        'name'      => 'social_name',
                                        'value'     => $company->social_name,
                                        'error_msg' => "What's your name?",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_fancy_name'),
                                        'name'      => 'fancy_name',
                                        'value'     => $company->fancy_name,
                                        'error_msg' => "What's your name?",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_email'),
                                        'name'      => 'email',
                                        'value'     => $company->email,
                                        'error_msg' => "Oh no! Email is invalid.",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent
                                </div>

                                <div class="row">
                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_phone'),
                                        'name'      => 'phone',
                                        'value'     => $company->phone,
                                        'error_msg' => "What's your name?",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-4',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_zip_code'),
                                        'name'      => 'zip_code',
                                        'value'     => $company->zip_code,
                                        'error_msg' => "What's your name?",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-2',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_address'),
                                        'name'      => 'address',
                                        'value'     => $company->address,
                                        'error_msg' => "What's your name?",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-6',
                                    ])@endcomponent
                                </div>

                                <div class="row">
                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_address_number'),
                                        'name'      => 'address_number',
                                        'value'     => $company->address_number,
                                        'error_msg' => "What's your name?",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-6 col-lg-2',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_city'),
                                        'name'      => 'city',
                                        'value'     => $company->city,
                                        'error_msg' => "What's your name?",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-4 col-lg-5',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_state'),
                                        'name'      => 'state',
                                        'value'     => $company->state,
                                        'error_msg' => "What's your name?",
                                        'required'  => true,
                                        'class_col' => 'col-12 col-md-4 col-lg-2',
                                    ])@endcomponent

                                    @component('core::components.theme-stisla.form.input-text', [
                                        'label'     => trans('company::form.label_country'),
                                        'name'      => 'country',
                                        'value'     => $company->country,
                                        'error_msg' => "What's your name?",
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