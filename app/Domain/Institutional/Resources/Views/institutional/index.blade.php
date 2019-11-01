<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('themes/reveal/img/favicon.png')}}" rel="icon">
    <link href="{{asset('themes/reveal/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{asset('themes/reveal/css/fonts.css')}}" rel="stylesheet">
    {{--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">--}}

    <!-- Bootstrap CSS File -->
    <link href="{{asset('themes/reveal/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('themes/reveal/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('themes/reveal/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('themes/reveal/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Reveal
      Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body id="body">

    <!--==========================
      Top Bar
    ============================-->
    @component('core::components.theme-reveal.partials.topbar', [
        'email'  => $company->email,
        'phone'  => $company->phone,
        'social' => [
            'twitter'     => '#',
            'facebook'    => '#',
            'instagram'   => '#',
            'google-plus' => '#',
            'linkedin'    => '#',
        ]
    ]) @endcomponent

    <!--==========================
      Header
    ============================-->
    @component('core::components.theme-reveal.partials.header', [
        'menus'  => $menus,
    ]) @endcomponent
    <!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro">

    <div class="intro-content">
        <h2>Making <span>your ideas</span><br>happen!</h2>
        <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="#consulting" class="btn-projects scrollto">Consulting</a>
        </div>
    </div>

    {{--<div id="intro-carousel" class="owl-carousel" >
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
        'additional_class' => 'wow fadeInUp'
    ])
        <div class="row">
            @foreach($principles as $principle)
                <div class="col-lg-4 content">
                    <h2>{{$principle['title']}}</h2>
                    <h3>{{$principle['text']}}</h3>

                    <ul>
                        @foreach($principle['items'] as $item)
                        <li><i class="ion-android-checkmark-circle"></i>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    @endcomponent
    <!-- #about -->

    <!--==========================
      Consulting Section
    ============================-->
    @component('core::components.theme-reveal.section', [
        'id'    => 'consulting',
        'title' => trans('institutional::menu.consulting'),
        'text'  => trans('institutional::institutional.text_consulting'),
    ])
        <div class="row">
            @foreach($courses as $key => $course)
                <div class="col-lg-6">
                    <div class="box wow {{$key%2 == 0 ? 'fadeInLeft' : 'fadeInRight'}} ">
                        <div class="icon"><i class="{{$course->picture}}"></i></div>
                        <h4 class="title"><a href="">{{config('app.locale') == 'pt_BR' ? $course->name_pt_br : $course->name_en}}</a></h4>
                        <p class="description">{{config('app.locale') == 'pt_BR' ? $course->description_pt_br : $course->description_en}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endcomponent
    <!-- #consulting -->


    <!--==========================
      Customers Section
    ============================-->
    {{--@component('core::components.theme-reveal.section', [
        'id'    => 'clients',
        'title' => trans('institutional::menu.clients'),
        'text'  => 'Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore',
        'additional_class' => 'wow fadeInUp'
    ])
        <div class="owl-carousel clients-carousel">
            <img src="{{asset('themes/reveal/img/clients/client-1.png')}}" alt="">
            <img src="{{asset('themes/reveal/img/clients/client-2.png')}}" alt="">
            <img src="{{asset('themes/reveal/img/clients/client-3.png')}}" alt="">
            <img src="{{asset('themes/reveal/img/clients/client-4.png')}}" alt="">
            <img src="{{asset('themes/reveal/img/clients/client-5.png')}}" alt="">
            <img src="{{asset('themes/reveal/img/clients/client-6.png')}}" alt="">
            <img src="{{asset('themes/reveal/img/clients/client-7.png')}}" alt="">
            <img src="{{asset('themes/reveal/img/clients/client-8.png')}}" alt="">
        </div>
    @endcomponent--}}
    <!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    {{--<section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Our Portfolio</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/1.jpg" class="portfolio-popup">
                            <img src="{{asset('themes/reveal/img/portfolio/1.jpg')}}" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/2.jpg" class="portfolio-popup">
                            <img src="img/portfolio/2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/3.jpg" class="portfolio-popup">
                            <img src="img/portfolio/3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/4.jpg" class="portfolio-popup">
                            <img src="img/portfolio/4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/5.jpg" class="portfolio-popup">
                            <img src="img/portfolio/5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/6.jpg" class="portfolio-popup">
                            <img src="img/portfolio/6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/7.jpg" class="portfolio-popup">
                            <img src="img/portfolio/7.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/8.jpg" class="portfolio-popup">
                            <img src="img/portfolio/8.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>--}}
    <!-- #portfolio -->

    <!--==========================
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
    <!-- #testimonials -->

    <!--==========================
      Instituional Videos Section
    ============================-->
    @component('core::components.theme-reveal.section', [
        'id'    => 'instituional-videos',
        'title' => trans('institutional::menu.videos'),
        'text'  => '',
    ])
        <div class="row">
            {{--@foreach($courses as $key => $course)
                <div class="col-lg-6">
                    <div class="box wow {{$key%2 == 0 ? 'fadeInLeft' : 'fadeInRight'}} ">
                        <div class="icon"><i class="{{$course->picture}}"></i></div>
                        <h4 class="title"><a href="">{{config('app.locale') == 'pt_BR' ? $course->name_pt_br : $course->name_en}}</a></h4>
                        <p class="description">{{config('app.locale') == 'pt_BR' ? $course->description_pt_br : $course->description_en}}</p>
                    </div>
                </div>
            @endforeach--}}
            <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/R1CiN6esbkU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/R1CiN6esbkU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    @endcomponent
    <!-- #instituional videos -->

    <!--==========================
      Call To Action Section
    ============================-->
    {{--<section id="call-to-action" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">Call To Action</h3>
                    <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>

        </div>
    </section>--}}
    <!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
    {{--<section id="team" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>{{trans('institutional::menu.our_team')}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{asset('themes/reveal/img/team-1.jpg')}}" alt=""></div>
                        <div class="details">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{asset('themes/reveal/img/team-2.jpg')}}" alt=""></div>
                        <div class="details">
                            <h4>Sarah Jhinson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{asset('themes/reveal/img/team-3.jpg')}}" alt=""></div>
                        <div class="details">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{asset('themes/reveal/img/team-4.jpg')}}" alt=""></div>
                        <div class="details">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>--}}
<!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>{{trans('institutional::menu.contact_us')}}</h2>
                <p>{{trans('institutional::institutional.text_contact_us')}}</p>
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

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            {{--&copy; Copyright <strong>Reveal</strong>. All Rights Reserved--}}
            &copy; Copyright <strong>Safety Cubic</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
            -->
            Developed by <strong>ProTec Solutions - Tecnologia & Segurança</strong>
           {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
            {{--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset('themes/reveal/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('themes/reveal/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('themes/reveal/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('themes/reveal/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('themes/reveal/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('themes/reveal/lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('themes/reveal/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('themes/reveal/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('themes/reveal/lib/magnific-popup/magnific-popup.min.js')}}"></script>
<script src="{{asset('themes/reveal/lib/sticky/sticky.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset('themes/reveal/js/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('themes/reveal/js/main.js')}}"></script>

</body>
</html>
