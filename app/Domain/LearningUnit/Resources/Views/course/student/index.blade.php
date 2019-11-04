@extends('core::components.theme-stisla.layouts.main', ['title' => 'Dashboard'])

@section('css_specific') @endsection

@section('container')

    @component('core::components.theme-stisla.partials.header', [
        'title'      => trans('dashboard::menu.label_my_courses'),
        'breadcrumb' => []
    ]) @endcomponent


    <div class="row">
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Card Header</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary">
                            View All
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <p>Write something here</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Card Header</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary">
                            View All
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <p>Write something here</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Card Header</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary">
                            View All
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <p>Write something here</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Card Header</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary">
                            View All
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <p>Write something here</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Card Header</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary">
                            View All
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <p>Write something here</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3 col-lg-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Card Header</h4>
                    <div class="card-header-action">
                        <a href="#" class="btn btn-primary">
                            View All
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <p>Write something here</p>
                </div>
            </div>
        </div>



    </div>



@endsection


@section('js_specific')
    <!-- Page Specific JS File -->
    <script src="{{asset('themes/stisla/js/page/index.js')}}"></script>

@endsection