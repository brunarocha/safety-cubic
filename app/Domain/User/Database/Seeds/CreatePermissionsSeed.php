<?php
/**
 * @author: Bruna Rocha
 * @date: 22/10/2019
 */

namespace App\Domain\User\Database\Seeds;

use App\Domain\User\Entities\User\Permission;
use Illuminate\Database\Seeder;

/**
 * Class CreatePermissionsSeed
 * @package App\Domain\User\Database\Seeds
 */
class CreatePermissionsSeed extends Seeder
{

    public function run()
    {
        /*Permission::create([
            'name'        => 'create',
            'description' => 'Create',
        ]);

        Permission::create([
            'name'        => 'edit',
            'description' => 'Edit',
        ]);*/

        Permission::create([
            'name'        => 'list',
            'description' => 'List',
        ]);
    }

}