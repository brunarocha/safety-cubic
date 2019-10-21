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
            'name' => 'Curso Teste',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum odio a ipsum mattis, ac maximus tellus condimentum. Curabitur scelerisque at nibh ac lacinia. Sed ac libero eleifend, feugiat neque sit amet, iaculis lectus. Duis diam risus, facilisis ac mi at, sagittis tincidunt urna. Donec imperdiet tempor risus, quis pretium felis maximus a. Sed ut odio mauris. Etiam quis felis hendrerit, eleifend sapien eget, semper tellus. Morbi a pretium purus.',
            'picture' => null,
            'value' => 1920.00,
        ]);
    }

}