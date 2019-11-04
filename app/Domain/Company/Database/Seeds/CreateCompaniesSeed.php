<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Company\Database\Seeds;

use App\Domain\Company\Entities\Company;
use Illuminate\Database\Seeder;

/**
 * Class CreateCompaniesSeed
 * @package App\Domain\Company\Database\Seeds
 */
class CreateCompaniesSeed extends Seeder
{

    public function run()
    {
        Company::create([
            'social_name'        => 'Safety Cubic',
            'fancy_name'         => 'Safety Cubic',
            'register'           => '555.555.5555/55',
            'address'            => 'Rua São Luíz, Adrianopólis',
            'address_number'     => '200',
            'zip_code'           => '69088920',
            'city'               => 'Manaus',
            'state'              => 'AM',
            'country'            => 'Brasil',
            'email'              =>  'comercial@safetycubic.com.br',
            'phone'              => '+55 92 99999-9999',
            'url_google_maps'    => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.929260713456!2d-60.01688388571488!3d-3.113418341225108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c055a96276281%3A0xbdbd8779f3e6cb17!2sR.%20S%C3%A3o%20Lu%C3%ADz%20-%20Adrian%C3%B3polis%2C%20Manaus%20-%20AM!5e0!3m2!1spt-BR!2sbr!4v1572391493859!5m2!1spt-BR!2sbr'
        ]);
    }

}