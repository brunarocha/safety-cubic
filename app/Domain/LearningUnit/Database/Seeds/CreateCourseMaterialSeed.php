<?php
/**
 * @author: Bruna Rocha
 * @date: 30/10/2019
 */

namespace App\Domain\LearningUnit\Database\Seeds;

use App\Domain\LearningUnit\Entities\CourseMaterial;
use Illuminate\Database\Seeder;

/**
 * Class CreateCourseMaterialSeed
 * @package App\Domain\LearningUnit\Database\Seeds
 */
class CreateCourseMaterialSeed extends Seeder
{

    public function run()
    {
        CourseMaterial::create([
            'title'     => 'Aula 1',
            'file'      => 'anexo.pdf',
            'course_id' => 1,
        ]);

        CourseMaterial::create([
            'title'     => 'Aula 2',
            'file'      => 'anexo.pdf',
            'course_id' => 1,
        ]);

        CourseMaterial::create([
            'title'     => 'Aula 3',
            'file'      => 'anexo.pdf',
            'course_id' => 1,
        ]);


    }

}