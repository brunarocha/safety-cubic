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
     */
    protected $menu;

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
        return [
            [
                'order'         => 1,
                'name'          => 'home',
                'display_name'  => trans('institutional::menu.home'),
            ],
            [
                'order'         => 2,
                'name'          => 'diretor',
                'display_name'  => trans('institutional::menu.diretor'),
            ],
            [
                'order'         => 3,
                'name'          => 'cursos_livres',
                'display_name'  => trans('institutional::menu.cursos_livres'),
            ],
            [
                'order'         => 4,
                'name'          => 'consultoria',
                'display_name'  => trans('institutional::menu.consultoria'),
            ],
            [
                'order'         => 5,
                'name'          => 'publicacao',
                'display_name'  => trans('institutional::menu.publicacao'),
            ],
            [
                'order'         => 6,
                'name'          => 'clientes',
                'display_name'  => trans('institutional::menu.clientes'),
            ],
            [
                'order'         => 7,
                'name'          => 'contato',
                'display_name'  => trans('institutional::menu.contato'),
            ]
        ];
    }

}

