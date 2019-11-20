@extends('core::components.theme-stisla.layouts.main', ['title' => 'Dashboard'])

@section('css_specific') @endsection

@section('container')

    @component('core::components.theme-stisla.partials.header', [
        'title'      => trans('dashboard::menu.label_my_trainings'),
        'breadcrumb' => []
    ]) @endcomponent

    <div class="row">

        @foreach($trainings as $training)
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4> <a href="{{route('student.trainings.show', $training->id)}}">{{$training->name_pt_br}}</a></h4>
                    </div>
                    <div class="card-body">
                        This is some text within a card body.
                        Instructor
                    </div>
                    <div class="card-footer">
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    {{--<div class="row">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{trans('learning-unit::training.label_courseware')}}</h4>
                        <p>General settings such as, site title, site description, address and so on.</p>
                        <a href="features-setting-detail.html" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{trans('learning-unit::training.label_forum')}}</h4>
                        <p>Search engine optimization settings, such as meta tags and social media.</p>
                        <a href="features-setting-detail.html" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{trans('learning-unit::training.label_newsletter')}}</h4>
                        <p>Email SMTP settings, notifications and others related to email.</p>
                        <a href="features-setting-detail.html" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-power-off"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{trans('learning-unit::training.label_questions')}}</h4>
                        <p>PHP version settings, time zones and other environments.</p>
                        <a href="features-setting-detail.html" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}


    {{--<div class="row">
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



    </div>--}}



@endsection


@section('js_specific')
    <!-- Page Specific JS File -->
    <script src="{{asset('themes/stisla/js/page/index.js')}}"></script>

@endsection