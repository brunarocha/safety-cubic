@extends('core::components.theme-reveal.layouts.main')

@section('css_specific')


    <link rel="stylesheet" href="{{asset('core/css/courses_styles.css')}}">

    <link rel="stylesheet" href="{{asset('themes/stisla/css/stisla.css')}}">

    <style>
        body {
            color: #212529;
        }
    </style>

@endsection

@section('container')

    <section id="intro"></section>

    @component('core::components.theme-reveal.section', [
        'id' => '',
        'additional_class' => 'section-margin style-about',
        'title' => 'Publicações'
    ])
        @if(!count($publications))
            <label>Não há publicações.</label>
        @else
            <div class="row">
                @foreach($publications as $publication)
                    <div class="col-12 col-md-4 col-lg-4">
                        <article class="article article-style-c">
                            {{--<div class="article-header">
                                <div class="article-image" data-background="assets/img/news/img13.jpg">
                                </div>
                            </div>--}}
                            <div class="article-details" style="min-height: 280px">
                                <div class="article-category">
                                    <a href="#">News</a>
                                    <div class="bullet"></div>
                                    <a href="#">
                                        @php
                                            $diff = date_diff(date_create($publication->created_at), date_create(date('Y-m-d')));
                                            $days = $diff->format('%a');
                                        @endphp

                                        @if($days > 0)
                                            {{$days.' dias'}}
                                        @else
                                            {{$diff->format('%i Minute %s Seconds')}}
                                        @endif

                                    </a>
                                </div>
                                <div class="article-title">
                                    <h2><a href="{{route('institutional.publication.show', $publication->id)}}" style="color: #0c2e8a">{{$publication->title}}</a></h2>
                                </div>

                                <p style="min-height: 150px; margin-bottom:10px"> {{substr(strip_tags($publication->publication), 0, 200).'...'}} </p>

                                <div class="article-user" style="margin-top: 5px">
                                    {{--<img alt="image" src="assets/img/avatar/avatar-1.png">--}}
                                    <div class="article-user-details">
                                        <div class="user-detail-name">
                                            <label style="color: #0c2e8a">{{$publication->user->name}}</label>
                                            <div class="text-job">Autor</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

        @endif


        <div class="clearfix"></div>
    @endcomponent



@endsection