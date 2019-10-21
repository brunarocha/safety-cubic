<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\Course\Repositories;

use App\Domain\Course\Entities\Course;
use \App\Support\Repository\AbstractRepository;

/**
 * Class CourseRepository
 * @package App\Domain\Course\Repositories
 */
class CourseRepository extends AbstractRepository implements CourseInterface {

    /**
     * @var $course
     */
    protected $course;

    /**
     * CourseRepository constructor.
     * @param Course $course
     */
    public function __construct(Course $course)
    {
        $this->model = new AbstractRepository($course);
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
        return $this->model->create($array);
    }

    /**
     * @param array $array
     * @param $id
     * @return mixed
     */
    public function update(array $array, $id)
    {
        return $this->model->update($array, $id);
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model|mixed
     */
    public function show($id)
    {
        return $this->model->show($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->delete($id);
    }

}

