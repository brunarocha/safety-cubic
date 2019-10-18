<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Repositories\Institutional\Menu;

use App\Domain\User\Entities\User;
use \App\Support\Repository\AbstractRepository;

/**
 * Class UserRepository
 * @package App\Domain\User\Repositories\Users
 */
class MenuRepository extends AbstractRepository implements MenuInterface {

    /**
     * @var $menu
     */
    protected $institutional;

    /**
     * InstitutionalRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = new AbstractRepository($user);
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

