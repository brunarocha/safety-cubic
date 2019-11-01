<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Repositories\Institutional;

use App\Domain\Institutional\Entities\InstitutionalVideo;
use App\Domain\User\Entities\User;
use \App\Support\Repository\AbstractRepository;

/**
 * Class UserRepository
 * @package App\Domain\User\Repositories\Users
 */
class InstitutionalRepository extends AbstractRepository implements InstitutionalInterface {

    /**
     * @var $institutional
     */
    protected $institutional;

    /**
     * InstitutionalRepository constructor.
     * @param User $user
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
     * return Mission, Vision and Values
     */
    public function principles()
    {
        $items = [
            'Ullamco laboris nisi ut aliquip ex ea commodo consequat',
            'Duis aute irure dolor in reprehenderit in voluptate velit.',
            'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ];

        return [
            [
                'title' => trans('institutional::institutional.mission'),
                'text'  => trans('institutional::institutional.text_mission'),
                'items' => $items,
            ],
            [
                'title' => trans('institutional::institutional.vision'),
                'text'  => trans('institutional::institutional.text_vision'),
                'items' => $items,
            ],
            [
                'title' => trans('institutional::institutional.values'),
                'text'  => trans('institutional::institutional.text_values'),
                'items' => $items,
            ],
        ];
    }

}

