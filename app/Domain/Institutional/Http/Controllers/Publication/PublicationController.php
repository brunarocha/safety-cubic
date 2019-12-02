<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Http\Controllers\Publication;

use App\Domain\Publication\Repositories\PublicationInterface;
use App\Domain\Training\Repositories\TrainingCategoryInterface;
use App\Domain\Company\Repositories\Company\CompanyInterface;
use App\Domain\Institutional\Repositories\Institutional\InstitutionalInterface;
use App\Domain\Institutional\Repositories\Institutional\Menu\MenuInterface;
use App\Domain\Institutional\Repositories\Institutional\Testimonial\TestimonialInterface;
use App\Domain\Institutional\Repositories\Institutional\Video\InstitutionalVideoInterface;
use App\Domain\Training\Repositories\TrainingInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class PublicationController
 * @package App\Domain\Institutional\Http\Controllers\Publication
 */
class PublicationController extends Controller {
    /**
     * @var MenuInterface
     * @var InstitutionalVideoInterface
     * @var InstitutionalInterface
     * @var TrainingInterface
     * @var TrainingCategoryInterface
     * @var TestimonialInterface
     * @var CompanyInterface
     * @var PublicationInterface
     */
    protected $menus;
    protected $institutional;
    protected $videos;
    protected $trainings;
    protected $trainingsCategories;
    protected $testimonials;
    protected $company;
    protected $publications;

    /**
     * InstitutionalController constructor.
     * @param MenuInterface $menuInterface
     * @param InstitutionalInterface $institutionalInterface
     * @param InstitutionalVideoInterface $videoInterface
     * @param TrainingInterface $trainingInterface
     * @param TrainingCategoryInterface $trainingsCategoriesInterface
     * @param TestimonialInterface $testimonialInterface
     * @param CompanyInterface $companyInterface
     * @param PublicationInterface $publicationInterface
     */

    public function __construct(
        MenuInterface $menuInterface,
        InstitutionalInterface $institutionalInterface,
        InstitutionalVideoInterface $videoInterface,
        TrainingInterface $trainingInterface,
        TrainingCategoryInterface $trainingsCategoriesInterface,
        TestimonialInterface $testimonialInterface,
        CompanyInterface $companyInterface,
        PublicationInterface $publicationInterface
    )
    {
        $this->menus          = $menuInterface;
        $this->videos         = $videoInterface;
        $this->institutional  = $institutionalInterface;
        $this->trainingsCategories = $trainingsCategoriesInterface;
        $this->trainings      = $trainingInterface;
        $this->testimonials   = $testimonialInterface;
        $this->company        = $companyInterface;
        $this->publications   = $publicationInterface;
    }

    public function index()
    {
        $publications = $this->publications->all();

        return view('institutional::institutional.publication.index')->with([
            'menus'         => $this->menus->all(),
            'trainings_categories' => $this->trainingsCategories->all(),
            //'trainings'     => $this->trainings->allByCategories($name),
            'company'       => $this->company->show(1),
            'about'         => $this->institutional->about(),
            'publications'  => $publications,
        ]);
    }

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
