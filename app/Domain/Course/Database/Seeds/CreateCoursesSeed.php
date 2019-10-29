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
            'name'        => 'Qualidade',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            //'picture'     => 'fa fa-bar-chart',
            'picture'     => 'fa fa-line-chart',
            'value'       => 0.0,
        ]);

        Course::create([
            'name'        => 'Meio Ambiente',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            //'picture'     => 'fa fa-picture-o',
            'picture'     => 'fa fa-tree',
            'value'       => 0.0,
        ]);

        Course::create([
            'name'        => 'Saúde Ocupacional',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'picture'     => 'fa fa-plus-square',
            'value'       => 0.0,
        ]);

        Course::create([
            'name'        => 'Segurança Patrimonial',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.',
            'picture'     => 'fa fa-shield',
            'value'       => 0.0,
        ]);

    }

}