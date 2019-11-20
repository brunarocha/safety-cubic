@extends('core::components.theme-stisla.layouts.main', ['title' => 'Dashboard'])

@section('css_specific') @endsection

@section('container')

    @component('core::components.theme-stisla.partials.header', [
        //'title'      => trans('dashboard::menu.label_my_trainings'),
        'title'      => 'Treinamento - '.$training->name_pt_br,
        'breadcrumb' => []
    ]) @endcomponent

    <div class="row">
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
    </div>

@endsection


@section('js_specific')
    <!-- Page Specific JS File -->
    <script src="{{asset('themes/stisla/js/page/index.js')}}"></script>

@endsection