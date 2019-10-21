<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Institutional\Database\Seeds;

use App\Domain\Institutional\Entities\Company;
use App\Domain\Institutional\Entities\InstitutionalVideo;
use Illuminate\Database\Seeder;

/**
 * Class CreateInstitutionalVideosSeed
 * @package App\Domain\Institutional\Database\Seeds
 */
class CreateInstitutionalVideosSeed extends Seeder
{

    public function run()
    {
        InstitutionalVideo::create([
            'url'   => 'https://youtu.be/XjdnAhJfffU',
            'file'  => null,
            'title' => 'Institutional Video',
        ]);
    }

}