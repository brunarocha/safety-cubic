<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\Training\Repositories;

use App\Domain\Training\Entities\TrainingCategory;
use \App\Support\Repository\AbstractRepository;

/**
 * Class TrainingCategoryRepository
 * @package App\Domain\Training\Repositories
 */
class TrainingCategoryRepository extends AbstractRepository implements TrainingCategoryInterface {

    /**
     * @var $category
     */
    protected $category;

    /**
     * CourseRepository constructor.
     * @param TrainingCategory $category
     */
    public function __construct(TrainingCategory $category)
    {
        $this->model = new AbstractRepository($category);
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

