<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\User\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Domain\User\Entities\User;
use Illuminate\Support\Facades\Hash;

/**
 * Class CreateUsersSeed
 * @package App\Domain\User\Database\Seeds
 */
class CreateUsersSeed extends Seeder
{

    public function run()
    {
        User::create([
            'name'      => 'Administrator',
            'email'     => 'administrator',
            'password'  => Hash::make('12345678'),
        ]);
    }

}