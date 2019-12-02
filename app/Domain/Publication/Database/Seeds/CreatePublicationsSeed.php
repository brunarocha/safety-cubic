<?php
/**
 * @author: Bruna Rocha
 * @date: 02/12/2019
 */

namespace App\Domain\Publication\Database\Seeds;

use App\Domain\Publication\Entities\Publication;
use Illuminate\Database\Seeder;

/**
 * Class CreatePublicationsSeed
 * @package App\Domain\Publication\Database\Seeds
 */
class CreatePublicationsSeed extends Seeder
{

    public function run()
    {
        Publication::create([
            'title'       => 'Lorem Ipsum',
            'publication' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor libero quis tortor finibus, id commodo est dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur porta sapien leo, lacinia rhoncus ipsum feugiat quis. Sed convallis turpis ultrices eros lobortis, ac aliquet justo gravida. Aliquam erat volutpat. Ut lacus metus, auctor nec efficitur id, viverra a odio. Proin tellus sem, porttitor a luctus vitae, lobortis sed neque. In nec libero ut metus posuere auctor. Ut scelerisque est et felis lobortis feugiat. Ut vel nisi eu risus blandit consequat sit amet nec ligula. Donec vel nisi non justo placerat mattis in luctus est. Nam viverra ligula in erat pretium, et laoreet elit fermentum. Aliquam auctor enim enim, eu auctor quam cursus eget.
                              Duis a orci velit. Vestibulum velit augue, congue quis iaculis mollis, aliquam eu ligula. Nunc imperdiet id est sed lobortis. Sed dapibus nulla quam, nec rutrum massa ornare vitae. Integer eros lacus, commodo id euismod vel, consequat et ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In pellentesque iaculis elementum. Aliquam eu aliquam elit. Aliquam sit amet hendrerit leo. Praesent sodales leo justo, eu mattis libero lacinia a. Maecenas tellus tortor, convallis scelerisque tincidunt in, eleifend sed dolor.',
            'date'        => '2019-12-02',
            'image'       => null,
            'user_id'     => 1,
        ]);

        Publication::create([
            'title'       => 'Lorem Ipsum',
            'publication' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor libero quis tortor finibus, id commodo est dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur porta sapien leo, lacinia rhoncus ipsum feugiat quis. Sed convallis turpis ultrices eros lobortis, ac aliquet justo gravida. Aliquam erat volutpat. Ut lacus metus, auctor nec efficitur id, viverra a odio. Proin tellus sem, porttitor a luctus vitae, lobortis sed neque. In nec libero ut metus posuere auctor. Ut scelerisque est et felis lobortis feugiat. Ut vel nisi eu risus blandit consequat sit amet nec ligula. Donec vel nisi non justo placerat mattis in luctus est. Nam viverra ligula in erat pretium, et laoreet elit fermentum. Aliquam auctor enim enim, eu auctor quam cursus eget.
                              Duis a orci velit. Vestibulum velit augue, congue quis iaculis mollis, aliquam eu ligula. Nunc imperdiet id est sed lobortis. Sed dapibus nulla quam, nec rutrum massa ornare vitae. Integer eros lacus, commodo id euismod vel, consequat et ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In pellentesque iaculis elementum. Aliquam eu aliquam elit. Aliquam sit amet hendrerit leo. Praesent sodales leo justo, eu mattis libero lacinia a. Maecenas tellus tortor, convallis scelerisque tincidunt in, eleifend sed dolor.',
            'date'        => '2019-12-01',
            'image'       => null,
            'user_id'     => 1,
        ]);

    }

}