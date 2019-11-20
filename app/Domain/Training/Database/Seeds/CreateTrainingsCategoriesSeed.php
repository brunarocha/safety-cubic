<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Database\Seeds;

use App\Domain\Training\Entities\TrainingCategory;
use Illuminate\Database\Seeder;

/**
 * Class CreateTrainingsCategoriesSeed
 * @package App\Domain\Training\Database\Seeds
 */
class CreateTrainingsCategoriesSeed extends Seeder
{

    protected $pathImage = '/storage/core/img/training/';

    public function run()
    {
        TrainingCategory::create([
            'id'                => 1,
            'name_pt_br'        => 'Meio Ambiente',
            'name_en'           => 'Environment',
            'name_slug_pt_br'   => 'meio-ambiente',
            'name_slug_en'      => 'environment',
            'description_pt_br' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'description_en'    => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'picture'           => $this->pathImage.'meioambiente.png'
        ]);

        TrainingCategory::create([
            'id'                => 2,
            'name_pt_br'        => 'Saúde e Segurança',
            'name_en'           => 'Health and safety',
            'name_slug_pt_br'   => 'saude-seguranca',
            'name_slug_en'      => 'health-safety',
            'description_pt_br' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'description_en'    => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'picture'           => $this->pathImage.'saudeseguranca.png'
        ]);

        TrainingCategory::create([
            'id'                => 3,
            'name_pt_br'        => 'Qualidade',
            'name_en'           => 'Quality',
            'name_slug_pt_br'   => 'qualidade',
            'name_slug_en'      => 'quality',
            'description_pt_br' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'description_en'    => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            //'picture'           => 'fa fa-line-chart',
            'picture'           => $this->pathImage.'qualidade.png'
        ]);


        TrainingCategory::create([
            'id'                => 4,
            'name_pt_br'        => 'Segurança Patrimonial',
            'name_en'           => 'Property Security',
            'name_slug_pt_br'   => 'seguranca-patrimonial',
            'name_slug_en'      => 'property-security',
            'description_pt_br' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'description_en'    => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'picture'           => $this->pathImage.'segurancapatrimonial.png'
        ]);

    }

}