@extends('core::components.theme-stisla.layouts.main', ['title' => 'Dashboard'])

@section('css_specific') @endsection

@section('container')

        {{--<div class="section-header">
            <h1>{{trans('core::menu.label_company')}}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Form Validation</div>
            </div>
        </div>--}}

        @component('core::components.theme-stisla.partials.header', [
            'title'      => trans('core::menu.label_company'),
            'title_card' => trans('company::form.label_edit'),
            'breadcrumb' => [
                trans('core::menu.label_institutional'),
                trans('core::menu.label_company'),
            ]
        ]) @endcomponent

        <div class="section-body">
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">

                        <div class="card">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card-header">
                                    <h4>{{trans('company::form.label_edit')}}</h4>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_register')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->register}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_name')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->name}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_fancy_name')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->fancy_name}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_email')}}</label>
                                            <input type="email" class="form-control" required="" value="{{$company->email}}">
                                            <div class="invalid-feedback">
                                                Oh no! Email is invalid.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_phone')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->phone}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_address')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->address}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_address_number')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->address_number}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_zip_code')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->zip_code}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_city')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->city}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_state')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->state}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>{{trans('company::form.label_country')}}</label>
                                            <input type="text" class="form-control" required="" value="{{$company->country}}">
                                            <div class="invalid-feedback">
                                                What's your name?
                                            </div>
                                        </div>
                                    </div>
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
    {{--<script src="{{asset('themes/stisla/js/page/index.js')}}"></script>--}}

@endsection