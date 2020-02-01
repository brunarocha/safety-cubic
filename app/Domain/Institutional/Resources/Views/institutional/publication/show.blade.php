@extends('core::components.theme-reveal.layouts.main')

@section('css_specific')


    {{--<link rel="stylesheet" href="{{asset('core/css/courses_styles.css')}}">

    <link rel="stylesheet" href="{{asset('themes/stisla/css/stisla.css')}}">

    <style>
        body {
            color: #212529;
        }
    </style>--}}

@endsection

@section('container')

    <section id="intro"></section>

    @component('core::components.theme-reveal.section', [
        'id' => '',
        'additional_class' => 'section-margin style-about',
        'title' => 'Publicações'
    ])
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content">
                    <div class="contact-info float-left">
                        <i class="fa fa-calendar"></i>
                        <label>Data: {{date('d/m/Y', strtotime($publication->date))}}</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 content">
                    <div class="contact-info float-left">
                        <i class="fa fa-user"></i>
                        <label>Autor: {{$publication->user->name}} </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 content">
                <h2 class="text-center">{{$publication->title}}</h2>
                <h3 class="text-justify" style="font-style: normal">{!! $publication->publication !!}</h3>
            </div>
        </div>

        <br>

        <div class="text-left">
            <a href="{{route('institutional.publication.index')}}" style="background: #50d8af; border: 0; border-radius: 3px; padding: 10px 30px; color: #fff; transition: 0.4s; cursor: pointer">
                Voltar para publicações
            </a>
        </div>

        <div class="clearfix"></div>
    @endcomponent



@endsection