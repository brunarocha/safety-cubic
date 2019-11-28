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
        $menus = [];

        array_push($menus, [
            'order'         => 'home',
            'url'           => '#intro',
            'display_name'  => trans('institutional::menu.home'),
        ]);

        array_push($menus, [
            'order'         => 'about',
            'url'           => '#about',
            'display_name'  => trans('institutional::menu.about'),
        ]);

        array_push($menus, [
            'order'         => 'direction',
            'url'           => '#direction',
            'display_name'  => trans('institutional::menu.direction'),
        ]);

        array_push($menus, [
            'order'         => 'consulting',
            'url'           => '#consulting',
            'display_name'  => trans('institutional::menu.consulting'),
        ]);

        array_push($menus, [
            'order'         => 'training',
            'url'           => '#training',
            'display_name'  => trans('institutional::menu.training'),
        ]);

        array_push($menus, [
            'order'         => 'clients',
            'url'           => '#clients',
            'display_name'  => trans('institutional::menu.clients'),
        ]);

        array_push($menus, [
            'order'         => 'partners',
            'url'           => '#partners',
            'display_name'  => trans('institutional::menu.partners'),
        ]);

        array_push($menus, [
            'order'         => 'publication',
            'url'           => '#publication',
            'display_name'  => trans('institutional::menu.publication'),
        ]);

        array_push($menus, [
            'order'         => 'contact',
            'url'           => '#contact',
            'display_name'  => trans('institutional::menu.contact'),
        ]);

        return $menus;
    }

}

