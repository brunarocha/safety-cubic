<?php
/**
 * @author: Bruna Rocha
 * @date: 04/11/2019
 */

namespace App\Domain\Courses\Database\Seeds;

use App\Domain\Course\Entities\CourseUser;
use Illuminate\Database\Seeder;

/**
 * Class CreateCoursesUsersSeed
 * @package App\Domain\Course\Database\Seeds
 */
class CreateCoursesUsersSeed extends Seeder
{

    public function run()
    {
        CourseUser::create([
            'user_id'   => 2,
            'role_id'   => 2,
            'course_id' => 1,
        ]);

        CourseUser::create([
            'user_id'   => 2,
            'role_id'   => 2,
            'course_id' => 3,
        ]);
    }

}