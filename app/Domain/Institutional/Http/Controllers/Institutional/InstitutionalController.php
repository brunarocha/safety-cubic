<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Http\Controllers\Institutional;

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
 * Class InstitutionalController
 * @package App\Domain\Institutional\Http\Controllers\Institutional
 */
class InstitutionalController extends Controller {
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

    public function index()
    {
        return view('institutional::institutional.index')->with([
            'menus'         => $this->menus->all(),
            'videos'        => $this->videos->all(),
            'trainings_categories' => $this->trainingsCategories->all(),
            'trainings'     => $this->trainings->all(),
            'company'       => $this->company->show(1),
            'about'         => $this->institutional->about(),
            'testimonials'  => $this->testimonials->all()
        ]);
    }

    public function consultingSchool()
    {
        return view('institutional::institutional.consulting.school')->with([
            'menus'         => $this->menus->all(),
            'company'       => $this->company->show(1),
            'about'         => $this->institutional->about(),
        ]);
    }

    public function consultingCompany()
    {
        return view('institutional::institutional.consulting.company')->with([
            'menus'         => $this->menus->all(),
            'company'       => $this->company->show(1),
            'about'         => $this->institutional->about(),
        ]);
    }

    public function contact(Request $request)
    {
        Mail::to('info@safetycubic.com.br')->later(1, new ContactMail($request->all()));
        Mail::to('comercial@safetycubic.com.br')->later(1, new ContactMail($request->all()));
        Mail::to('alessandro.sias@safetycubic.com.br')->later(1, new ContactMail($request->all()));
        Mail::to('angelina.sias@safetycubic.com.br')->later(1, new ContactMail($request->all()));

        return response()->json([]);
    }

    public function viewcontact()
    {
        return view('institutional::institutional.mail.contact');
    }

    public function viewcontactteste()
    {
//        $data['subject'] = 'Assunto tese';
//        $data['name'] = 'Bruna Rocha';
//        $data['email'] = 'brunas3r@gmail.com';
//        $data['message'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec ante id felis commodo interdum. Ut sapien orci, porttitor ut purus et, dapibus viverra dolor. Duis eget porta justo. Praesent et porta ligula. Curabitur a tellus eleifend nibh rutrum placerat. Fusce quis metus vulputate, imperdiet nisi et, dignissim neque. Nulla quis hendrerit sapien. Aenean non risus ut sem rutrum luctus at in metus. Sed a libero eget nisi pellentesque ullamcorper. Sed ut turpis mattis, viverra tortor vel, laoreet ex.';

        return view('institutional::institutional.mail.contact');//->with(['data' => $data]);
    }



    public function create(){}

    public function store(Request $request){}

    public function edit($id){}

    public function update(Request $request, $id){}

    public function delete($id){}

    public function show($id){}

}
