<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Http\Controllers\Institutional;

use App\Domain\Course\Repositories\CourseInterface;
use App\Domain\Company\Repositories\Company\CompanyInterface;
use App\Domain\Institutional\Repositories\Institutional\InstitutionalInterface;
use App\Domain\Institutional\Repositories\Institutional\Menu\MenuInterface;
use App\Domain\Institutional\Repositories\Institutional\Testimonial\TestimonialInterface;
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
     * @var InstitutionalInterface
     * @var CourseInterface
     * @var TestimonialInterface
     * @var CompanyInterface
     */
    protected $menus;
    protected $institutional;
    protected $videos;
    protected $courses;
    protected $testimonials;
    protected $company;

    /**
     * InstitutionalController constructor.
     * @param MenuInterface $menuInterface
     * @param InstitutionalInterface $institutionalInterface
     * @param InstitutionalVideoInterface $videoInterface
     * @param CourseInterface $courseInterface
     * @param TestimonialInterface $testimonialInterface
     * @param CompanyInterface $companyInterface
     */

    public function __construct(
        MenuInterface $menuInterface,
        InstitutionalInterface $institutionalInterface,
        InstitutionalVideoInterface $videoInterface,
        CourseInterface $courseInterface,
        TestimonialInterface $testimonialInterface,
        CompanyInterface $companyInterface
    )
    {
        $this->menus          = $menuInterface;
        $this->videos         = $videoInterface;
        $this->institutional  = $institutionalInterface;
        $this->courses        = $courseInterface;
        $this->testimonials   = $testimonialInterface;
        $this->company        = $companyInterface;
    }

    public function index()
    {
        return view('institutional::institutional.index')->with([
            'menus'         => $this->menus->all(),
            'videos'        => $this->videos->all(),
            'courses'       => $this->courses->all(),
            'company'       => $this->company->show(1),
            'principles'    => $this->institutional->principles(),
            'testimonials'  => $this->testimonials->all()
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
