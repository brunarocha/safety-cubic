<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Repositories\Institutional;

use App\Domain\Institutional\Entities\InstitutionalVideo;
use App\Domain\User\Entities\User;
use \App\Support\Repository\AbstractRepository;

/**
 * Class UserRepository
 * @package App\Domain\User\Repositories\Users
 */
class InstitutionalRepository extends AbstractRepository implements InstitutionalInterface {

    /**
     * @var $institutional
     */
    protected $institutional;

    /**
     * InstitutionalRepository constructor.
     * @param InstitutionalVideo $video
     */
    public function __construct(InstitutionalVideo $video)
    {
        $this->model = new AbstractRepository($video);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * return mixed
     */
    public function about()
    {
        return [
            'missao' => [
                'title' => trans('institutional::institutional.mission'),
                'text'  => 'Promover o desenvolvimento de profissionais e organizações tornando-os mais competitivos, humanos e produtivos, através do conhecimento e aplicação de conceitos de Segurança Operacional, fortalecendo seus valores e cultura.',
            ],
            'visao' => [
                'title' => trans('institutional::institutional.vision'),
                'text'  => 'Ser uma empresa referência em consultoria e treinamento em HSSE mantendo assim um vínculo com a qualificação de profissionais e o desenvolvimento sustentável de organizações.',
            ],
            'valores' => [
                'title' => trans('institutional::institutional.values'),
                'items' => [
                    'Ética e Transparência nas relações com os colaboradores, clientes e fornecedores.',
                    'Integrar-se ao negócio do cliente e buscar constantemente meios de promover melhorias para o seu desenvolvimento sustentável.',
                    'Superar as expectativas de pessoas em busca de qualificação profissional através dos treinamentos ministrados.',
                    'Respeitar a opinião e o conhecimento do próximo.',
                    'Transparência nas relações com os colaboradores, clientes e fornecedores.',
                    'Prestar serviços de qualidade a preços competitivos e de maneira eficiente.',
                ],
            ],
            'direction' => [
                'name'          => 'ALESSANDRO SIAS',
                'function'      => 'CO-FUNDADOR',
                'image'         => '/storage/core/img/institutional/direction.png',
                'description'   => 'Engenheiro de segurança do trabalho, especialista em sistemas de gestão em segurança e saúde ocupacional, preservação do meio ambiente e segurança patrimonial (HSSE)
                                    com mais de 14 anos de experiência na indústria de óleo e gás, com ênfase na segurança operacional das instalações, auditor interno das normas ISO 9001 / ISO 14001 /
                                    OHSAS 18001 / ISM CODE / ISPS CODE.'
            ],
            'consulting' => [
                [
                    'title' => trans('institutional::institutional.schools'),
                    'text'  => 'Durante o período escolar, as escolas do nosso país são encarregadas de fornecer um ambiente seguro e saudável para seus alunos e funcionários... Clique para ler mais',
                    'image' => '/storage/core/img/institutional/children_safety-alta.jpg',
                    'route' => route('consulting.schools')
                ],
                [
                    'title' => trans('institutional::institutional.companies'),
                    'text'  => 'A disciplina operacional é cada vez mais entendida nas empresas como uma competência essencial no desenvolvimento dos seus Valores e fortalecimento... Clique para ler mais',
                    'image' => '/storage/core/img/institutional/consulting_company.png',
                    'route' => route('consulting.companies')
                ]
            ],
            'about' => [
                'title' => trans('institutional::institutional.about'),
                'text'  => 'Safety Cubic fundamentada em seus valores de proteção à vida humana, ao meio ambiente e a propriedade, capacita e qualifica pessoas focadas no seu crescimento profissional, bem como organizações a desenvolverem seus negócios de forma sustentável e segura, tornando-se referências em seu ramo de atuação. Nós fornecemos treinamento e serviços de consultoria independente baseadas em normas nacionais, internacionais de Saúde e Segurança Ocupacional, Proteção ao Meio Ambiente e Proteção a Propriedade.  '
            ]
        ];
    }

}

