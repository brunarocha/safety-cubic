<?php
/**
 * @author: Bruna Rocha
 * @date: 04/11/2019
 */

namespace App\Domain\LearningUnit\Database\Seeds;

use App\Domain\LearningUnit\Entities\TrainingUser;
use Illuminate\Database\Seeder;

/**
 * Class CreateTrainingsUsersSeed
 * @package App\Domain\LearningUnit\Database\Seeds
 */
class CreateTrainingsUsersSeed extends Seeder
{

    public function run()
    {
        TrainingUser::create([
            'user_id'     => 2,
            'role_id'     => 2,
            'training_id' => 1,
        ]);

        TrainingUser::create([
            'user_id'     => 2,
            'role_id'     => 2,
            'training_id' => 3,
        ]);
    }

}