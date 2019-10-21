<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\Institutional\Repositories\Institutional\Video;

use App\Domain\Institutional\Entities\InstitutionalVideo;
use App\Support\Repository\AbstractRepository;

/**
 * Class InstitutionalVideoRepository
 * @package App\Domain\Institutional\Repositories\Institutional\Video
 */
class InstitutionalVideoRepository extends AbstractRepository implements InstitutionalVideoInterface {

    /**
     * @var $video
     */
    protected $video;

    /**
     * InstitutionalRepository constructor.
     * @param InstitutionalVideo $video
     */
    public function __construct(InstitutionalVideo $video)
    {
        $this->model = new AbstractRepository($video);
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

