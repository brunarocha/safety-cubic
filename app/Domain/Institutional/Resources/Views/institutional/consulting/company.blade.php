@extends('core::components.theme-reveal.layouts.main')

@section('css_specific')
    <style>
        .section-margin {
            margin-top: 5%;
        }

        /*.section-teste {
            width: 100%;
            height: 60vh;
            position: relative;
            background-size: cover;
            background: url({{asset('core/img/institutional/carousel.png')}}) no-repeat;
        }*/

    </style>
@endsection

@section('container')

    <section id="intro"></section>


    @component('core::components.theme-reveal.section', [
        'id' => 'consulting',
        'additional_class' => 'section-margin style-about',
        'title' => trans('institutional::institutional.consulting_company'),
    ])
        <div class="row">

            <div class="col-lg-12 ">
                <p class="description text-justify">
                    A disciplina operacional é cada vez mais entendida nas empresas como uma competência essencial no desenvolvimento dos seus Valores e fortalecimento da Cultura de Saúde e Segurança Ocupacional e Preservação do Meio Ambiente – SMS (HSE) no seu meio organizacional.
                </p>

                <p class="description text-justify">
                    Fatores não técnicos relacionados à Liderança, Trabalho em Equipe, Tomada de Decisão, Comunicação e Consciência da Situação exercem influência direta na performance das operações e na qualidade do ambiente de trabalho, afetando diretamente o clima organizacional em todos os níveis operacionais, refletindo diretamente no relacionamento com os clientes e fornecedores, bem como no reconhecimento do mercado.
                </p>

                <p class="description text-justify">
                    A Safety Cubic através da sua consultoria e treinamentos em HSE, tem por objetivo desenvolver a percepção dos riscos no ambiente de trabalho, auxiliando no atendimento de requisitos legais, permeando a disciplina operacional através da Liderança pelo exemplo, de um Trabalho em Equipe efetivo, na eficiência das Tomadas de Decisões, na Comunicação assertiva e no total conhecimento da Situação Operacional.
                </p>

                <p class="description text-justify">
                    Nossa Consultoria oferece:
                </p>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 content">
                <ul>
                    <li class="text-justify"><i class="ion-android-checkmark-circle"></i>
                        Auditoria de Avaliação de atendimento à requisitos legais inerentes aos negócios da empresa;
                    </li>

                    <li class="text-justify"><i class="ion-android-checkmark-circle"></i>
                        Auditorias Internas baseadas de SGI (ISO 9001 / ISO 14001 / OHSAS 18001 / ISSO 45001)
                    </li>

                    <li class="text-justify"><i class="ion-android-checkmark-circle"></i>
                        Inspeções pontuais de HSE;
                    </li>

                    <li class="text-justify"><i class="ion-android-checkmark-circle"></i>
                        Assistência no desenvolvimento e implantação de Sistemas de Gestão de HSE;
                    </li>

                    <li class="text-justify"><i class="ion-android-checkmark-circle"></i>
                        Avaliação de aderência de procedimentos, planos e programas de HSE por parte dos funcionários da empresa;
                    </li>

                    <li class="text-justify"><i class="ion-android-checkmark-circle"></i>
                        Desenvolvimento de Programas de HSE através do mapeamento do perfil da força de trabalho;
                    </li>

                    <li class="text-justify"><i class="ion-android-checkmark-circle"></i>
                        Avaliação de perigos e Riscos Operacionais;
                    </li>

                    <li class="text-justify"><i class="ion-android-checkmark-circle"></i>
                        Treinamentos em Percepção de Riscos, Disciplina Operacional, Investigação de Acidentes e Incidentes, Comportamento Baseado em Seguranças, outros.
                    </li>

                    <li class="text-justify"><i class="ion-android-checkmark-circle"></i>
                        Outras atividades conforme as necessidades do cliente.
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12 ">
                <p class="description text-justify">
                    Fortalecendo os Valores das empresas, Transformamos Culturas, direcionando-as na melhoria contínua de suas operações, buscando continuamente a excelência operacional, reduzindo custos, evitando perdas, impulsionado a sustentabilidade dos seus negócios, sendo referência em Saúde e Segurança Ocupacional e Preservação do Meio Ambiente para a indústria, comunidade e clientes.
                </p>
            </div>

        </div>



        <div class="clearfix"></div>
    @endcomponent



@endsection