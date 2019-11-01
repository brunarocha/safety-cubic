<?php
/**
 * @author: Bruna Rocha
 * @date: 30/10/2019
 */
namespace App\Domain\Institutional\Repositories\Institutional\Testimonial;

use App\Domain\Institutional\Entities\Testimonial;
use \App\Support\Repository\AbstractRepository;

/**
 * Class TestimonialRepository
 * @package App\Domain\Institutional\Repositories\Institutional\Testimonial
 */
class TestimonialRepository extends AbstractRepository implements TestimonialInterface {

    /**
     * @var $testimonial
     */
    protected $testimonial;

    /**
     * TestimonialRepository constructor.
     * @param Testimonial $testimonial
     */
    public function __construct(Testimonial $testimonial)
    {
        $this->model = new AbstractRepository($testimonial);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param array $array
     * @return mixed
     */
    public function create(array $array)
    {

    }

    /**
     * @param array $array
     * @param $id
     * @return mixed
     */
    public function update(array $array, $id)
    {

    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {

    }

}

