<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\InstitutionalVideo\Database\Seeds;

use App\Domain\Institutional\Entities\InstitutionalVideo;
use Illuminate\Database\Seeder;

/**
 * Class CreateInstitutionalVideosSeed
 * @package App\Domain\InstitutionalVideo\Database\Seeds
 */
class CreateInstitutionalVideoSeed extends Seeder
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