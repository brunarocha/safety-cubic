<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Http\Controllers\Institutional;

use App\Domain\Institutional\Repositories\Institutional\Menu\MenuInterface;
use App\Domain\Institutional\Repositories\Institutional\Video\InstitutionalVideoInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class InstitutionalController
 * @package App\Domain\Institutional\Http\Controllers\Institutional
 */
class InstitutionalController extends Controller {
    /**
     * @var MenuInterface
     * @var InstitutionalVideoInterface
     */
    protected $menus;
    protected $videos;

    /**
     * InstitutionalController constructor.
     * @param MenuInterface $menuInterface
     * @param InstitutionalVideoInterface $videoInterface
     */

    public function __construct(
        MenuInterface $menuInterface,
        InstitutionalVideoInterface $videoInterface
    )
    {
        $this->menus  = $menuInterface;
        $this->videos = $videoInterface;
    }

    public function index()
    {
        $menu   = $this->menus->all();
        $videos = $this->videos->all();

        return view('institutional::institutional.index')->with(['menu' => $menu, 'videos' => $videos]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }

    public function show($id)
    {

    }

}
