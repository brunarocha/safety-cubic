<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Repositories\Institutional\Menu;

use App\Domain\Institutional\Entities\Menu;
use \App\Support\Repository\AbstractRepository;

/**
 * Class MenuRepository
 * @package App\Domain\Institutional\Repositories\Institutional\Menu
 */
class MenuRepository extends AbstractRepository implements MenuInterface {

    /**
     * @var $menu
     * @var $model
     */
    protected $menu;
    protected $model;

    /**
     * MenuRepository constructor.
     * @param Menu $menu
     */
    public function __construct(Menu $menu)
    {
        $this->model = new AbstractRepository($menu);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function all()
    {
        $items = [
            'home',
            'about',
            'direction',
            'consulting',
            'training',
            'publication',
            'contact',
        ];
        $menus = [];

        foreach($items as $key => $value){
            array_push($menus, [
                'order'         => $key,
                'url'           => '#'.$value,
                'display_name'  => trans('institutional::menu.'.$value),
            ]);
        }

        return $menus;
    }

}

