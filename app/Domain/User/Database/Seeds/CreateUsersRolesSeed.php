<?php
/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */

namespace App\Domain\User\Database\Seeds;

use App\Domain\User\Entities\User\UserRole;
use Illuminate\Database\Seeder;

/**
 * Class CreateUsersRolesSeed
 * @package App\Domain\User\Database\Seeds
 */
class CreateUsersRolesSeed extends Seeder
{

    public function run()
    {
        UserRole::create([
            'role_id'   => 1,
            'user_id'   => 1,
        ]);
    }

}