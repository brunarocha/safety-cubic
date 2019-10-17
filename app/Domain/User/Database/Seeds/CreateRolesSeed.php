<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\User\Database\Seeds;

use App\Domain\User\Entities\Role;
use Illuminate\Database\Seeder;

/**
 * Class CreateRolesSeed
 * @package App\Domain\User\Database\Seeds
 */
class CreateRolesSeed extends Seeder
{

    public function run()
    {
        Role::create([
            'name'        => 'administrator',
            'description' => 'administrator',
        ]);

        Role::create([
            'name'        => 'student',
            'description' => 'student',
        ]);

        Role::create([
            'name'        => 'instructor',
            'description' => 'instructor',
        ]);
    }

}