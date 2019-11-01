<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Courses\Database\Seeds;

use App\Domain\Course\Entities\Course;
use Illuminate\Database\Seeder;

/**
 * Class CreateCoursesSeed
 * @package App\Domain\Course\Database\Seeds
 */
class CreateCoursesSeed extends Seeder
{

    public function run()
    {
        Course::create([
            'name_pt_br'        => 'Qualidade',
            'name_en'           => 'Quality',
            'description_pt_br' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'description_en'    => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'picture'           => 'fa fa-line-chart',
            'value'             => 0.0,
        ]);

        Course::create([
            'name_pt_br'        => 'Meio Ambiente',
            'name_en'           => 'Environment',
            'description_pt_br' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'description_en'    => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'picture'           => 'fa fa-tree',
            'value'             => 0.0,
        ]);

        Course::create([
            'name_pt_br'        => 'Saúde Ocupacional',
            'name_en'           => 'Occupational Health',
            'description_pt_br' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'description_en'    => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'picture'           => 'fa fa-plus-square',
            'value'             => 0.0,
        ]);

        Course::create([
            'name_pt_br'        => 'Segurança Patrimonial',
            'name_en'           => 'Property Security',
            'description_pt_br' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'description_en'    => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'picture'           => 'fa fa-shield',
            'value'             => 0.0,
        ]);

    }

}