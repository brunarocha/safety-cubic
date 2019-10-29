<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Http\Controllers\Institutional;

use App\Domain\Course\Repositories\CourseInterface;
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
     * @var CourseInterface
     */
    protected $menus;
    protected $videos;
    protected $courses;

    /**
     * InstitutionalController constructor.
     * @param MenuInterface $menuInterface
     * @param InstitutionalVideoInterface $videoInterface
     * @param CourseInterface $courseInterface
     */

    public function __construct(
        MenuInterface $menuInterface,
        InstitutionalVideoInterface $videoInterface,
        CourseInterface $courseInterface
    )
    {
        $this->menus    = $menuInterface;
        $this->videos   = $videoInterface;
        $this->courses  = $courseInterface;
    }

    public function index()
    {
        $menus      = $this->menus->all();
        $videos     = $this->videos->all();
        $courses    = $this->courses->all();

        return view('institutional::institutional.inde')->with([
            'menus'     => $menus,
            'videos'    => $videos,
            'courses'   => $courses
        ]);
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
