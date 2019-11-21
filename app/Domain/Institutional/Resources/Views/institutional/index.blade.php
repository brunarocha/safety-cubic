@extends('core::components.theme-reveal.layouts.main')

@section('css_specific')
    <style>
        .img-principles {
            width: 50px;
            height: 50px
        }
    </style>
@endsection

@section('container')

    <!--==========================
      Intro Section
    ============================-->
    <section id="intro">

       {{-- <div class="intro-content">
           --}}{{-- --}}{{----}}{{--<h2>Making <span>your ideas</span><br>happen!</h2>--}}{{----}}{{--
            <div>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="#consulting" class="btn-projects scrollto">Consulting</a>
            </div>--}}{{--
        </div>

        <div id="intro-carousel" class="owl-carousel" >
            <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
        </div>--}}

    </section>
    <!-- #intro -->

    <main id="main">

        <!--==========================
          About Section
        ============================-->
        @component('core::components.theme-reveal.section', [
            'id' => 'about',
            'additional_class' => 'wow fadeInUp style-about'
        ])
            <div class="row">
                <div class="col-lg-12 content">
                    <h2 class="text-center">{{$about['about']['title']}}</h2>
                    <h3 class="text-justify">{{$about['about']['text']}}</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 content">
                    @component('core::components.theme-reveal.img', [
                        'url'   => '/storage/core/img/institutional/missao.jpg',
                        'class' => 'pull-left mr-2 img-principles',
                    ])@endcomponent
                    <h2>{{$about['missao']['title']}}</h2>
                    <h3 class="text-justify">{{$about['missao']['text']}}</h3>

                    @component('core::components.theme-reveal.img', [
                        'url'   => '/storage/core/img/institutional/visao.jpg',
                        'class' => 'pull-left mr-2 img-principles',
                    ])@endcomponent
                    <h2>{{$about['visao']['title']}}</h2>
                    <h3 class="text-justify">{{$about['visao']['text']}}</h3>
                </div>

                <div class="col-lg-1 content"></div>

                <div class="col-lg-5 content">
                    @component('core::components.theme-reveal.img', [
                        'url'   => '/storage/core/img/institutional/valores.jpg',
                        'class' => 'pull-left mr-2 img-principles',
                    ])@endcomponent
                    <h2>{{$about['valores']['title']}}</h2>
                    <ul>
                        @foreach($about['valores']['items'] as $item)
                            <li class="text-justify"><i class="ion-android-checkmark-circle"></i>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endcomponent
        <!-- #about -->

        <!--==========================
          Direction Section
        ============================-->
        @component('core::components.theme-reveal.section', [
            'id' => 'direction',
            'additional_class' => 'wow fadeInUp style-about',
            'title' => trans('institutional::menu.direction'),
        ])
            <div class="row">
                @component('core::components.theme-reveal.img', [
                    'url'   => '/storage/core/img/institutional/direction.png',
                    'class' => 'testimonial-img',
                    'with_div_class' => 'col-lg-2 content',
                ])@endcomponent

                <div class="col-lg-10 content">
                    <h4 class="title" style="color: #50d8af; font-weight: bold">{{$about['direction']['name'].' ('.$about['direction']['function'].')'}}</h4>
                    <p class="description text-justify">{{$about['direction']['description']}}</p>
                </div>
            </div>
        @endcomponent
        <!-- #direction -->


        <!--==========================
          Training Section
        ============================-->
        @component('core::components.theme-reveal.section', [
            'id'    => 'training',
            'title' => trans('institutional::menu.training'),
            'text'  => '', //trans('institutional::institutional.text_training'),
            'additional_class' => 'style-testimonials wow fadeInUp',
        ])
            <div class="owl-carousel testimonials-carousel" {{--style="padding: 0"--}}>
                @foreach($trainings_categories as $training)
                    <div class="testimonial-item" {{--style="width: 40%;"--}}>
                        <a href="{{route('institutional.training.index',  config('app.locale') == 'en' ? $training->name_slug_en : $training->name_slug_pt_br )}}">
                            <img src="{{asset($training->picture)}}" class="testimonial-img" style="width: 130px; height: 130px" alt="">
                            <h3>{{$training->name_pt_br}}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        @endcomponent
        <!-- #training -->

        <!--==========================
          Consulting Section
        ============================-->
        @component('core::components.theme-reveal.section', [
            'id'    => 'consulting',
            'title' => trans('institutional::menu.consulting'),
            //'text'  => trans('institutional::institutional.text_consulting'),
            'text'  => '',
            'additional_class' => 'wow fadeInUp',
        ])
            <div class="row">
                @foreach($about['consulting'] as $key => $consulting)
                <div class="col-lg-6">
                    <div class="box wow {{$key%2 == 0 ? 'fadeInLeft' : 'fadeInRight'}}">
                        <img src="{{asset($consulting['image'])}}" class="img-fluid pull-left mr-2" style="margin-left: 5px; width: 40%; height: 40%">

                        <h4 class="title"><a href="{{$consulting['route']}}">{{$consulting['title']}}</a></h4>
                        <p class="description text-justify">{{substr($consulting['text'], 0, 147).'(...)'}} <a href="{{$consulting['route']}}"> Ler Mais </a></p>
                    </div>
                </div>
                @endforeach
            </div>
        @endcomponent
        <!-- #consulting -->


        {{--<!--==========================
          Testimonials Section
        ============================-->
        @component('core::components.theme-reveal.section', [
            'id'    => 'testimonials',
            'title' => trans('institutional::menu.testimonials'),
            'text'  => trans('institutional::institutional.text_testimonials'),
            'additional_class' => 'wow fadeInUp',
        ])
            <div class="owl-carousel testimonials-carousel">

                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item">
                        <p>
                            <img src="{{asset('themes/reveal/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                            {{$testimonial->testimonial}}
                            <img src="{{asset('themes/reveal/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                        </p>
                        <img src="{{asset($testimonial->picture)}}" class="testimonial-img" alt="">
                        <h3>{{$testimonial->name}}</h3>
                        <h4>{{$testimonial->role}}</h4>
                    </div>
                @endforeach
            </div>
        @endcomponent
        <!-- #testimonials -->--}}

        <!--==========================
          Instituional Videos Section
        ============================-->
        {{--@component('core::components.theme-reveal.section', [
            'id'    => 'instituional-videos',
            'title' => trans('institutional::menu.videos'),
            'text'  => '',
        ])
            <div class="row">
                --}}{{--@foreach($courses as $key => $course)
                    <div class="col-lg-6">
                        <div class="box wow {{$key%2 == 0 ? 'fadeInLeft' : 'fadeInRight'}} ">
                            <div class="icon"><i class="{{$course->picture}}"></i></div>
                            <h4 class="title"><a href="">{{config('app.locale') == 'pt_BR' ? $course->name_pt_br : $course->name_en}}</a></h4>
                            <p class="description">{{config('app.locale') == 'pt_BR' ? $course->description_pt_br : $course->description_en}}</p>
                        </div>
                    </div>
                @endforeach--}}{{--
                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                        <iframe class="embed-responsive-item" width="100%" height="315" src="https://www.youtube.com/embed/R1CiN6esbkU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <iframe class="embed-responsive-item"  width="100%" height="315" src="https://www.youtube.com/embed/R1CiN6esbkU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        @endcomponent--}}
        <!-- #instituional videos -->


        <!--==========================
          Contact Section
        ============================-->
        <section id="contact" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>{{trans('institutional::menu.contact_us')}}</h2>
                    {{--<p>{{trans('institutional::institutional.text_contact_us')}}</p>--}}
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>{{trans('institutional::institutional.address')}}</h3>
                            <address>{{$company->present()->fullAddress}}</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>{{trans('institutional::institutional.phone_number')}}</h3>
                            <p>{{$company->phone}}</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>{{trans('institutional::institutional.email')}}</h3>
                            <p><a href="mailto:{{$company->email}}">{{$company->email}}</a></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container mb-4">
                <iframe src="{{$company->url_google_maps}}" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="container">
                <div class="form">
                    <div id="sendmessage">{{trans('institutional::institutional.success_send_message')}}</div>

                    <div id="errormessage">{{trans('institutional::institutional.error_send_message')}}</div>

                    <form action="" method="post" role="form" class="contactForm">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control"
                                       name="name"
                                       id="name"
                                       placeholder="{{trans('institutional::institutional.place_name')}}"
                                       data-rule="minlen:4"
                                       data-msg="{{trans('institutional::institutional.error_name')}}" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control"
                                       name="email"
                                       id="email"
                                       placeholder="{{trans('institutional::institutional.place_email')}}"
                                       data-rule="email"
                                       data-msg="{{trans('institutional::institutional.error_email')}}" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   name="subject"
                                   id="subject"
                                   placeholder="{{trans('institutional::institutional.place_subject')}}"
                                   data-rule="minlen:4"
                                   data-msg="{{trans('institutional::institutional.error_subject')}}" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5"
                                  name="message"
                                  data-rule="required"
                                  data-msg="{{trans('institutional::institutional.error_message')}}"
                                  placeholder="{{trans('institutional::institutional.place_message')}}"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">{{trans('institutional::institutional.btn_send_message')}}</button></div>
                    </form>
                </div>

            </div>
        </section>
        <!-- #contact -->

    </main>

@endsection

@section('js_specific')
    <!-- Contact Form JavaScript File -->
    {{--<script src="{{asset('themes/reveal/js/contactform.js')}}"></script>--}}

    <script>
        jQuery(document).ready(function($) {
            "use strict";

            //Contact
            $('form.contactForm').submit(function() {
                var f = $(this).find('.form-group'),
                    ferror = false,
                    emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

                f.children('input').each(function() { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'email':
                                if (!emailExp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'checked':
                                if (! i.is(':checked')) {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'regexp':
                                exp = new RegExp(exp);
                                if (!exp.test(i.val())) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
                    }
                });
                f.children('textarea').each(function() { // run all inputs

                    var i = $(this); // current input
                    var rule = i.attr('data-rule');

                    if (rule !== undefined) {
                        var ierror = false; // error flag for current input
                        var pos = rule.indexOf(':', 0);
                        if (pos >= 0) {
                            var exp = rule.substr(pos + 1, rule.length);
                            rule = rule.substr(0, pos);
                        } else {
                            rule = rule.substr(pos + 1, rule.length);
                        }

                        switch (rule) {
                            case 'required':
                                if (i.val() === '') {
                                    ferror = ierror = true;
                                }
                                break;

                            case 'minlen':
                                if (i.val().length < parseInt(exp)) {
                                    ferror = ierror = true;
                                }
                                break;
                        }
                        i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
                    }
                });
                if (ferror) return false;
                else var str = $(this).serialize();
                var action = $(this).attr('action');
                 if( ! action ) {
                   action = '/contact';
                 }
                 $.ajax({
                   type: "POST",
                   url: action,
                   data: str,
                   success: function(msg) {
                       console.log(msg)
                     // alert(msg);
                     /*if (msg == 'OK') {
                       $("#sendmessage").addClass("show");
                       $("#errormessage").removeClass("show");
                       $('.contactForm').find("input, textarea").val("");
                     } else {
                       $("#sendmessage").removeClass("show");
                       $("#errormessage").addClass("show");
                       $('#errormessage').html(msg);
                     }*/

                   }, error: function(error, file, m){
                       console.log(error)
                       console.log(file)
                       console.log(m)
                     }
                 });
                return false;
            });

            $('.owl-item').css('width', '250px');
            $('.testimonial-item').css('min-height', '200px');

        });


    </script>
@endsection
