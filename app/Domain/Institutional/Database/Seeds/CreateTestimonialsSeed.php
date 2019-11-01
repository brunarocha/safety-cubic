<?php
/**
 * @author: Bruna Rocha
 * @date: 30/10/2019
 */

namespace App\Domain\Institutional\Database\Seeds;

use App\Domain\Institutional\Entities\Testimonial;
use Illuminate\Database\Seeder;

/**
 * Class CreateTestimonialsSeed
 * @package App\Domain\Institutional\Database\Seeds
 */
class CreateTestimonialsSeed extends Seeder
{

    public function run()
    {
        Testimonial::create([
            'testimonial' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'name'        => 'Saul Goodman',
            'picture'     => 'themes/reveal/img/testimonial-1.jpg',
            'role'        => 'Ceo & Founder',
        ]);

        Testimonial::create([
            'testimonial' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
            'name'        => 'Sara Wilsson',
            'picture'     => 'themes/reveal/img/testimonial-2.jpg',
            'role'        => 'Designer',
        ]);

        Testimonial::create([
            'testimonial' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
            'name'        => 'Jena Karlis',
            'picture'     => 'themes/reveal/img/testimonial-3.jpg',
            'role'        => 'Store Owner',
        ]);

        Testimonial::create([
            'testimonial' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.',
            'name'        => 'Matt Brandon',
            'picture'     => 'themes/reveal/img/testimonial-4.jpg',
            'role'        => 'Freelancer',
        ]);

        Testimonial::create([
            'testimonial' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.',
            'name'        => 'John Larson',
            'picture'     => 'themes/reveal/img/testimonial-5.jpg',
            'role'        => 'Entrepreneur',
        ]);
    }

}