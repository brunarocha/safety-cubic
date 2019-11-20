@extends('core::components.theme-reveal.layouts.main')

@section('css_specific')


    <link rel="stylesheet" href="{{asset('core/css/courses_styles.css')}}">

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
        'title' => trans('institutional::menu.training'),
    ])
        <div class="row course_boxes">


            <!-- Popular Course Item -->
            @foreach($trainings as $training)
            <div class="col-lg-4 course_box" style="margin-bottom: 50px">
                <div class="card" style="padding-top: 5px">
                    <div class="card-body text-center" style="height: 85px;">
                        <div class="card-title"><a href="{{route('institutional.training.show', $training->id )}}">{{$training->name_pt_br}}</a></div>
                        <div class="card-text">
                            @if($training->objective)
                                {!!substr($training->objective, 0, 90).'...' !!}
                            @else
                                {!!substr($training->description_pt_br, 0, 90).'...' !!}
                            @endif
                        </div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_name">Alessandro Sias, <span>Instrutor</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center" style="width: 40%"><span>R$ {{$training->value}}</span></div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Popular Course Item -->
            {{--<div class="col-lg-4 course_box">
                <div class="card">
                    <img class="card-img-top" src="images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
                        <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="course_author_name">Michael Smith, <span>Author</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                    </div>
                </div>
            </div>

            <!-- Popular Course Item -->
            <div class="col-lg-4 course_box">
                <div class="card">
                    <img class="card-img-top" src="images/course_3.jpg" alt="https://unsplash.com/@dsmacinnes">
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
                        <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="course_author_name">Michael Smith, <span>Author</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                    </div>
                </div>
            </div>

            <!-- Popular Course Item -->
            <div class="col-lg-4 course_box">
                <div class="card">
                    <img class="card-img-top" src="images/course_4.jpg" alt="https://unsplash.com/@kellitungay">
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                        <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="course_author_name">Michael Smith, <span>Author</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                    </div>
                </div>
            </div>

            <!-- Popular Course Item -->
            <div class="col-lg-4 course_box">
                <div class="card">
                    <img class="card-img-top" src="images/course_5.jpg" alt="https://unsplash.com/@claybanks1989">
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
                        <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="course_author_name">Michael Smith, <span>Author</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                    </div>
                </div>
            </div>

            <!-- Popular Course Item -->
            <div class="col-lg-4 course_box">
                <div class="card">
                    <img class="card-img-top" src="images/course_6.jpg" alt="https://unsplash.com/@element5digital">
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
                        <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="course_author_name">Michael Smith, <span>Author</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                    </div>
                </div>
            </div>

            <!-- Popular Course Item -->
            <div class="col-lg-4 course_box">
                <div class="card">
                    <img class="card-img-top" src="images/course_7.jpg" alt="https://unsplash.com/@gaellemm">
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                        <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="course_author_name">Michael Smith, <span>Author</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                    </div>
                </div>
            </div>

            <!-- Popular Course Item -->
            <div class="col-lg-4 course_box">
                <div class="card">
                    <img class="card-img-top" src="images/course_8.jpg" alt="https://unsplash.com/@juanmramosjr">
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
                        <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="course_author_name">Michael Smith, <span>Author</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                    </div>
                </div>
            </div>

            <!-- Popular Course Item -->
            <div class="col-lg-4 course_box">
                <div class="card">
                    <img class="card-img-top" src="images/course_9.jpg" alt="https://unsplash.com/@kimberlyfarmer">
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
                        <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="course_author_name">Michael Smith, <span>Author</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                    </div>
                </div>
            </div>--}}

        </div>

        <div class="clearfix"></div>
    @endcomponent



@endsection