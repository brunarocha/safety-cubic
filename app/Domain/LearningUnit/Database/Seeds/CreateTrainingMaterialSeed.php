<?php
/**
 * @author: Bruna Rocha
 * @date: 30/10/2019
 */

namespace App\Domain\LearningUnit\Database\Seeds;

use App\Domain\LearningUnit\Entities\TrainingMaterial;
use Illuminate\Database\Seeder;

/**
 * Class CreateTrainingMaterialSeed
 * @package App\Domain\LearningUnit\Database\Seeds
 */
class CreateTrainingMaterialSeed extends Seeder
{

    public function run()
    {
        TrainingMaterial::create([
            'title'       => 'Aula 1',
            'file'        => 'anexo.pdf',
            'training_id' => 1,
        ]);

        TrainingMaterial::create([
            'title'       => 'Aula 2',
            'file'        => 'anexo.pdf',
            'training_id' => 1,
        ]);

        TrainingMaterial::create([
            'title'       => 'Aula 3',
            'file'        => 'anexo.pdf',
            'training_id' => 1,
        ]);


    }

}