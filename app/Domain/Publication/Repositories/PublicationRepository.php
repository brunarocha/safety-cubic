<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\Publication\Repositories;

use App\Domain\Publication\Entities\Publication;
use \App\Support\Repository\AbstractRepository;

/**
 * Class PublicationRepository
 * @package App\Domain\Publication\Repositories
 */
class PublicationRepository extends AbstractRepository implements PublicationInterface {

    /**
     * @var $model
     */
    protected $model;

    /**
     * PublicationRepository constructor.
     * @param Publication $publication
     */
    public function __construct(Publication $publication)
    {
        $this->model = new AbstractRepository($publication);
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
        $array['date']      = date('Y-m-d');
        $array['user_id']   = auth()->user()->id;

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

