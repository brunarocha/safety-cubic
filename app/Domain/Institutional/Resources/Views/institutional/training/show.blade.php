@extends('core::components.theme-reveal.layouts.main')

@section('css_specific')
    <style>
        .section-margin {
            margin-top: 3%;
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
        <div class="section-body">
            <div class="invoice">
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2>{{$training->name_pt_br}}</h2>
                            </div>
                            <hr>

                            @if($training->description_pt_br)
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h4>Descrição</h4>
                                    <p class="text-justify">{!!$training->description_pt_br !!}</p>
                                </div>
                            </div>
                            @endif


                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h4>Objetivos</h4>
                                    <p class="text-justify">{!!$training->objective !!}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h4>Público Alvo</h4>
                                    <p class="text-justify">{{$training->target_public}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h4>Programa</h4>
                                    <p class="text-justify">{!!$training->program_content !!}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <h4>Carga Horária</h4>
                                    <p class="text-justify">{{$training->course_load }}</p>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <h4>Valor por participante</h4>
                                    <p class="text-justify">R$ {{ number_format($training->value, 2, ',', '.') }}</p>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <h4>Formas de Pagamento</h4>
                                    <p class="text-justify">{!!$training->payment !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>

            </div>
        </div>

        <div class="clearfix"></div>
    @endcomponent



@endsection