<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\Training\Repositories;

use App\Domain\Training\Entities\Training;
use App\Domain\Training\Entities\TrainingCategory;
use \App\Support\Repository\AbstractRepository;

/**
 * Class TrainingRepository
 * @package App\Domain\Training\Repositories
 */
class TrainingRepository extends AbstractRepository implements TrainingInterface {

    /**
     * @var $course
     * @var $model
     */
    protected $course;
    protected $model;

    /**
     * TrainingRepository constructor.
     * @param Training $training
     */
    public function __construct(Training $training)
    {
        $this->model = new AbstractRepository($training);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param TrainingRepository
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function allByCategories($name)
    {
        if(config('app.locale') == 'en') {
            $category = TrainingCategory::where('name_slug_en', $name)->get();
        } else {
            $category = TrainingCategory::where('name_slug_pt_br', $name)->get();
        }

        $category = isset($category[0]) ? $category[0]->id : 0;

        return $this->model->all()->where('category_id', $category);
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

