<?php
/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */

namespace App\Domain\User\Database\Seeds;

use App\Domain\User\Entities\User\RolePermission;
use Illuminate\Database\Seeder;

/**
 * Class CreateRolesPermissionsSeed
 * @package App\Domain\User\Database\Seeds
 */
class CreateRolesPermissionsSeed extends Seeder
{

    public function run()
    {
        RolePermission::create([
            'role_id'       => 1,
            'permission_id' => 1,
        ]);

        RolePermission::create([
            'role_id'       => 2,
            'permission_id' => 1,
        ]);

        RolePermission::create([
            'role_id'       => 3,
            'permission_id' => 1,
        ]);
    }

}