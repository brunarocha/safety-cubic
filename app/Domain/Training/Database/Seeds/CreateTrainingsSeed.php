<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Database\Seeds;

use App\Domain\Training\Entities\Training;
use Illuminate\Database\Seeder;

/**
 * Class CreateTrainingsSeed
 * @package App\Domain\Training\Database\Seeds
 */
class CreateTrainingsSeed extends Seeder
{

    public function run()
    {
        /* Meio Ambiente */
        Training::create([
            'name_pt_br'        => 'Gestão de Resíduos Sólidos',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => 'Implementar um programa de Gestão de Resíduos Sólidos de forma a reduzir, reutilizar e reciclar os materiais utilizados e descartados no processo industrial. Conhecer a nova Lei Nacional de Resíduos Sólidos',
            'target_public'     => 'Profissionais envolvidos no planejamento da gestão de resíduos sólidos da organização e estudantes.',
            'course_load'       => '16 horas',
            'program_content'   => '<ul>
                                        <li>Lei 12.305/2010 (Política Nacional de Resíduos Sólidos)</li>
                                        <li>Normas NBR aplicáveis </li>
                                        <li>Classificação, Características e Inventário </li>
                                        <li>Armazenamento e Transporte Internos, Compatibilidade </li>
                                        <li>Coleta Externa, Transporte </li>
                                        <li>Produto Perigoso , Ficha de Emergência </li>
                                        <li>Tratamento e Destinação, Aterros Industrial e Sanitário </li>
                                        <li>Resíduos de Serviço de Saúde </li>
                                        <li>Coleta Seletiva </li>
                                        <li>Plano de gestão de resíduos sólidos </li>
                                        <li>Controle e monitoramento </li>
                                        <li>Estudo de casos de gestão de resíduos sólidos industriais.</li>
                                    </ul>',
            'payment'           => '3 x s/juros no cartão <br>
                                    10% de desconto à vista',
            'picture'           => null,
            'value'             => 600.0,
            'category_id'       => 1
        ]);

        Training::create([
            'name_pt_br'        => 'Comunicação e Responsabilidade Socioambiental',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'program_content'   => '',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 1
        ]);

        Training::create([
            'name_pt_br'        => 'ISO 14001:2015 - Interpretação e Implantação',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'program_content'   => '',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 1
        ]);

        Training::create([
            'name_pt_br'        => 'Identificação e Avaliação de Aspectos e Impactos Ambientais',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'program_content'   => '',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 1
        ]);

        Training::create([
            'name_pt_br'        => 'Elaboração e Implementação de Plano de Emergência Ambiental ',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'program_content'   => '',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 1
        ]);

        Training::create([
            'name_pt_br'        => 'Programa de Educação Ambiental – PEA (Lei 9795/1999)',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'program_content'   => '',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 1
        ]);


        /*Saúde e Segurança*/
        Training::create([
            'name_pt_br'        => 'Análise de Acidente e Incidentes (Investigação de Eventos)',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => 'Apresentar aos participantes o processo de identificação e análise de acidentes e incidentes de meio ambiente, saúde e segurança ocupacional (MASSO), permitindo o tratamento dos mesmos por meio da utilização de técnicas de solução de problemas com ferramentas práticas, objetivas e eficazes; Proporcionar aos participantes o desenvolvimento de procedimentos para a condução de ações preventivas e corretivas e para detectar fontes de problemas ou oportunidades de melhoria através do envolvimento e comprometimento das pessoas para relatar todos os possíveis incidentes.',
            'target_public'     => 'Profissionais atuantes na área, estudantes e interessados na capacitação para análise de acidentes e incidentes dos diversos ramos industriais e da área de serviços.',
            'program_content'   => '<ul>
	                                    <li>Definição e Identificação de Não Conformidades</li>
                                        <li>Caracterização dos Acidentes & Incidentes</li>
                                        <li>Definições Importantes: Perigo / Risco / Controle</li>
                                        <li>Acidente / Incidente</li>
                                        <li>Conseqüências dos Acidentes & Incidentes</li>
                                        <li>Principais Atividades de Risco</li>
                                        <li>Identificação das causas de Acidentes & Incidentes</li>
                                        <li>Ferramentas de Análise de Acidentes & Incidentes: Diagrama de Ishikawa</li>
                                        <li>Diagrama de Causa e Efeito</li>
                                        <li>Brainstorm</li>
                                        <li>Planos de Ação para a eliminação / controle de Acidentes & Incidentes</li>
                                        <li>Exercícios</li>
                                    </ul>',
            'course_load'       => '8 horas',
            'payment'           => '4 x s/juros no cartão <br>
                                    10% de desconto à vista',
            'picture'           => null,
            'value'             => 600.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'Interpretação e Implantação da ISO 45001:2018',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => 'Proporcionar ao participante uma visão abrangente sobre os conceitos, fundamentos e princípios do Sistema de Gestão de Saúde e Segurança; Permitir aos participantes a compreensão dos requisitos da ISO 45001:2018, além de fornecer dicas e ideias para a implantação dos requisitos da norma.',
            'target_public'     => 'Profissionais que desejam implantar a ISO 45001:2018 nas suas organizações; Profissionais e Estudantes que desejam melhorar seus conhecimentos sobre a ISO 45001:2018; Empresas que possuam ações e programas de SSO já implantados e desejam enquadrá-los na ISO 45001:2018.',
            'course_load'       => '16 horas',
            'program_content'   => '<ul>
                                        <li>Introdução a Gestão de Saúde e Segurança do Trabalho</li>
                                        <li> A estrutura de alto nível – Anexo SL</li>
                                        <li> Estudo dos Requisitos da ISO 45001:2018</li>
                                        <li> Identificação de perigos, avaliação de riscos e determinação de controles operacionais</li>
                                        <li> Implantação dos requisitos da ISO 45001:2018</li>
                                        <li> Exercícios e estudo de caso</li>
                                    </ul>',
            'payment'           => '4 x s/juros no cartão <br>
                                    10% de desconto à vista',
            'picture'           => null,
            'value'             => 600.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'CIPA (NR 5)',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'program_content'   => '',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'Programa de Gerenciamento de Riscos – PGR',
            'name_en'           => '',
            'description_pt_br' => 'O Programa de Gerenciamento de Riscos – PGR – é um documento que define a política e diretrizes de um sistema de gestão, com objetivo de prover uma sistemática voltada para o estabelecimento de requisitos, contendo orientações gerais de gestão, com vistas à prevenção de acidentes em instalações ou atividades potencialmente perigosas
                                    Devem ser consideradas como partes integrantes do processo de gerenciamento de riscos as recomendações e medidas resultantes do estudo de análise e avaliação de riscos para a redução das freqüências e conseqüências de eventuais acidentes, entretanto, independentemente da adoção dessas medidas, uma instalação que possua substâncias ou processos perigosos deve ser operada e mantida, ao longo de sua vida útil, dentro de padrões considerados toleráveis, razão pela qual o deve ser implementado e considerado nas atividades, rotineiras ou não, de uma planta industrial. 
                                    Embora as ações previstas no PGR devam contemplar todas as operações e equipamentos, o programa deve considerar os aspectos críticos identificados no estudo de análise de riscos, de forma que sejam priorizadas as ações de gerenciamento dos riscos, a partir de critérios estabelecidos com base nos cenários acidentais de maior relevância.  
                                    No âmbito do licenciamento ambiental, o PGR é parte integrante do processo de avaliação do estudo de análise de riscos. Dessa forma, as empresas em avaliação pelo órgão ambiental deverão apresentar um relatório contendo as diretrizes do PGR, no qual deverão estar claramente relacionadas as atribuições, as atividades e os documentos de referência.  
                                    A elaboração das diretrizes do Programa seguirá as premissas estabelecidas pela CETESB P4.261 de maio/2003, ou similar, pertinente a instalação motivo desta proposta deverá conter, no mínimo, os itens relacionados abaixo. 
                                    <ul>
                                        <li>Informações de Segurança de Processo</li>
                                        <li>Revisão dos Riscos de Processo</li>
                                        <li>Gerenciamento de modificações;
                                        <li>Manutenção e garantia da integridade de sistemas críticos</li>
                                        <li>Procedimentos operacionais</li>
                                        <li>Capacitação de recursos humanos</li>
                                        <li>Investigação de incidentes</li>
                                        <li>Plano de Ação de Emergência (PAE e PEI)</li>
                                        <li>Auditorias</li>
                                    </ul>',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '16 horas',
            'program_content'   => '',
            'payment'           => '4 x s/juros no cartão <br>
                                    10% de desconto à vista',
            'picture'           => null,
            'value'             => 800.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'ANP 43/2007 – Segurança Operacional',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'program_content'   => '',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'ANP 46/2016 – ',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'Plano de Ação de Emergências',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'Análise Preliminar de Perigos – APP',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '<ul>
                                        <li>Apresentar e discutir os conceitos e metodologia</li>
                                        <li>Aplicação em processos industriais</li>
                                        <li>Capacitação inicial de equipes</li>
                                    </ul>',
            'target_public'     => 'Engenheiros, técnicos e supervisores das áreas de produção e operações industriais; segurança, higiene e meio ambiente; controle de perdas; melhorias, projetos e investimentos.',
            'program_content'   => 'Introdução
                                    <ul>
                                        <li>Conceitos básicos de Análise de Riscos</li>
                                    </ul>
                                    Modulo I – APP
                                    <ul>
                                        <li>Conceitos básicos</li>
                                        <li>Metodologia</li>
                                        <li>Definição e gestão das recomendações / medidas mitigadoras</li>
                                        <li>Roteiro e requisitos para realização</li>
                                        <li>Parte prática</li>
                                        <li>Realização, em equipes, de revisão em fluxograma de engenharia e/ou P&I de uma unidade produtiva do cliente</li>
                                    </ul>
                                    Módulo II – Avaliação e gestão dos riscos de processos
                                    <ul>
                                        <li>Conceitos básicos</li>
                                        <li>Metodologia avaliação riscos</li>
                                        <li>Gestão dos riscos</li>
                                        <li>Parte prática</li>
                                        <li>Realização, em equipes, de revisão em fluxograma de engenharia e/ou P&I de uma unidade produtiva do cliente</li>
                                    </ul>',
            'course_load'       => '4 horas',
            'payment'           => '3 x s/juros no cartão <br>
                                    10% de desconto à vista',
            'picture'           => null,
            'value'             => 200.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'HAZID – Identificação de Perigos e Avaliação de Riscos',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => 'Profissionais envolvidos em Segurança e Medicina do Trabalho e Meio Ambiente, engenheiros e técnicos destas áreas, líderes e empregados que estão envolvidos com questões de identificação e classificação de riscos de suas áreas de trabalho e estabelecimento de formas de controle destes riscos.',
            'course_load'       => '8 horas',
            'program_content'   => '<ul>
                                        <li>Compreensão do risco: a chave do sucesso para a Gestão da Segurança</li>
                                        <li>Definições, conceituação e exemplos de perigos e riscos</li>
                                        <li>Como avaliar os riscos</li>
                                        <li>Construção de uma planilha de levantamento de riscos ocupacionais</li>
                                        <li>Aplicação prática através de exercícios</li>
                                    </ul>',
            'payment'           => '3 x s/juros no cartão <br>
                                    10% de desconto à vista',
            'picture'           => null,
            'value'             => 400.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'Percepção e Análise de Riscos',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '8 horas',
            'program_content'   => '1º parte
                                    <ul>
                                        <li>Conceitos de Perigos e Riscos</li>
                                        <li>O que não esquecer quando executando uma APP/APR</li>
                                        <li>Exercícios</li>
                                    </ul>
                                    2º parte
                                    <ul>
                                        <li>Percepção e Aceitação do Risco, Conhecimento e Habilidades, Cumprimento com Normas e Regras – As 4 bases da Competência Frente ao Riscos.</li>
                                        <li>As bases do Comportamento</li>
                                        <li>Comportamento desejado como resultado da cultura organizacional e da Competência frente ao Ricos</li>
                                        <li>Exercícios APP das áreas de trabalho dos participantes.</li>
                                    </ul>',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'Comportamento Baseado em Segurança',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 2
        ]);

        Training::create([
            'name_pt_br'        => 'Gestão de Mudança',
            'name_en'           => '',
            'description_pt_br' => '',
            'description_en'    => '',
            'objective'         => '',
            'target_public'     => '',
            'course_load'       => '0 horas',
            'payment'           => 'Não informado',
            'picture'           => null,
            'value'             => 0.0,
            'category_id'       => 2
        ]);
    }

}