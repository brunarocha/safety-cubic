<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Institutional\Database\Seeds;

use App\Domain\Institutional\Entities\Company;
use Illuminate\Database\Seeder;

/**
 * Class CreateCompaniesSeed
 * @package App\Domain\Institutional\Database\Seeds
 */
class CreateCompaniesSeed extends Seeder
{

    public function run()
    {
        Company::create([
            'company_register'   => '555.555.5555/55',
            'company_name'       => 'Safety Cubic',
            'company fancy name' => 'Safety Cubic',
            'address'            => 'Address',
            'address_number'     => 'Address Number',
            'zip_code'           => '69088920',
            'city'               => 'Manaus',
            'state'              => 'Amazonas',
            'country'            => 'Brasil',
        ]);
    }

}