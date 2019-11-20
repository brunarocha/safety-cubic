<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Http\Controllers\Training;

use App\Domain\Institutional\Mail\ContactMail;
use App\Domain\Training\Repositories\TrainingCategoryInterface;
use App\Domain\Company\Repositories\Company\CompanyInterface;
use App\Domain\Institutional\Repositories\Institutional\InstitutionalInterface;
use App\Domain\Institutional\Repositories\Institutional\Menu\MenuInterface;
use App\Domain\Institutional\Repositories\Institutional\Testimonial\TestimonialInterface;
use App\Domain\Institutional\Repositories\Institutional\Video\InstitutionalVideoInterface;
use App\Domain\Training\Repositories\TrainingInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class TrainingController
 * @package App\Domain\Institutional\Http\Controllers\Training
 */
class TrainingController extends Controller {
    /**
     * @var MenuInterface
     * @var InstitutionalVideoInterface
     * @var InstitutionalInterface
     * @var TrainingInterface
     * @var TrainingCategoryInterface
     * @var TestimonialInterface
     * @var CompanyInterface
     */
    protected $menus;
    protected $institutional;
    protected $videos;
    protected $trainings;
    protected $trainingsCategories;
    protected $testimonials;
    protected $company;

    /**
     * InstitutionalController constructor.
     * @param MenuInterface $menuInterface
     * @param InstitutionalInterface $institutionalInterface
     * @param InstitutionalVideoInterface $videoInterface
     * @param TrainingInterface $trainingInterface
     * @param TrainingCategoryInterface $trainingsCategoriesInterface
     * @param TestimonialInterface $testimonialInterface
     * @param CompanyInterface $companyInterface
     */

    public function __construct(
        MenuInterface $menuInterface,
        InstitutionalInterface $institutionalInterface,
        InstitutionalVideoInterface $videoInterface,
        TrainingInterface $trainingInterface,
        TrainingCategoryInterface $trainingsCategoriesInterface,
        TestimonialInterface $testimonialInterface,
        CompanyInterface $companyInterface
    )
    {
        $this->menus          = $menuInterface;
        $this->videos         = $videoInterface;
        $this->institutional  = $institutionalInterface;
        $this->trainingsCategories = $trainingsCategoriesInterface;
        $this->trainings      = $trainingInterface;
        $this->testimonials   = $testimonialInterface;
        $this->company        = $companyInterface;
    }

    public function index($name)
    {
        return view('institutional::institutional.training.index')->with([
            'menus'         => $this->menus->all(),
            'trainings_categories' => $this->trainingsCategories->all(),
            'trainings'     => $this->trainings->allByCategories($name),
            'company'       => $this->company->show(1),
            'about'         => $this->institutional->about(),
        ]);
    }

    public function create(){}

    public function store(Request $request){}

    public function edit($id){}

    public function update(Request $request, $id){}

    public function delete($id){}

    public function show($id)
    {
        $training = $this->trainings->show($id);

        return view('institutional::institutional.training.show')->with([
            'training' => $training,
            'menus'         => $this->menus->all(),
            'trainings_categories' => $this->trainingsCategories->all(),
            'company'       => $this->company->show(1),
            'about'         => $this->institutional->about(),
        ]);
    }

}
