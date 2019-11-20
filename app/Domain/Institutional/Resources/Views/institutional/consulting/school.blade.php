@extends('core::components.theme-reveal.layouts.main')

@section('css_specific')
    <style>
        .section-margin {
            margin-top: 5%;
        }

    </style>
@endsection

@section('container')

    <section id="intro"></section>


    @component('core::components.theme-reveal.section', [
        'id' => 'consulting',
        'additional_class' => 'section-margin',
        'title' => trans('institutional::institutional.consulting_school'),
    ])
        <div class="row">

            <div class="col-lg-12 ">
                <p class="description text-justify">
                    Durante o período escolar, as escolas do nosso país são encarregadas de fornecer um
                    ambiente seguro e saudável para seus alunos e funcionários.
                    As famílias e a comunidade também esperam que as Escolas mantenham seus filhos a salvos
                    de ameaças e perigos.
                </p>

                <p class="description text-justify">
                    Entretanto, emergências podem ocorrer a qualquer momento. Alunos, funcionários e visitantes
                    podem NÃO SABER COMO AGIR se estiverem envolvidos nestes eventos
                </p>

                <p class="description text-justify">
                    A consultoria da <strong>Safety Cubic</strong> existe para fornecer todo o suporte à direção da Escola no
                    desenvolvimento e implementação do seu <strong>Plano de Resposta à Emergência</strong>, através de uma
                    consultoria baseada em avaliação, conformidade e sustentabilidade dos negócios do cliente,
                    especializada em Normas Nacionais e Internacionais de Segurança e Saúde Ocupacional,
                    Preservação do Meio Ambiente e Segurança Patrimonial (HSSE)
                </p>

                 @component('core::components.theme-reveal.img', [
                    'url'   => '/storage/core/img/institutional/consulting_school.png',
                    'class' => 'img-fluid',
                    'with_div_class' => 'text-center',
                ])@endcomponent


                <div class="text-center" style="margin-top: 3%; margin-bottom: 5%">
                    <a href="{{asset('/storage/core/files/institutional/FOLDER_-_Plano_de_Respostas_Emergencia.pdf')}}" download="FOLDER_-_Plano_de_Respostas_Emergencia.pdf" class="text-center" style="color: #0c2e8a">Clique aqui para fazer download do Folder</a>
                </div>


            </div>

        </div>

        <div class="clearfix"></div>
    @endcomponent



@endsection