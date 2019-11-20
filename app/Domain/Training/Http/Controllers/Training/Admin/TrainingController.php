<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\Training\Http\Controllers\Training\Admin;

use App\Domain\Training\Repositories\TrainingCategoryInterface;
use App\Domain\Training\Repositories\TrainingInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class TrainingController
 * @package App\Domain\Training\Http\Controllers\Training\Admin
 */
class TrainingController extends Controller {
    /**
     * @var TrainingInterface
     * @var TrainingCategoryInterface
     */
    protected $trainings;
    protected $categories;

    /**
     * CourseController constructor.
     * @param TrainingInterface $trainingInterface
     * @param TrainingCategoryInterface $trainingCategoryInterface
     */

    public function __construct(
        TrainingInterface $trainingInterface,
        TrainingCategoryInterface $trainingCategoryInterface
    )
    {
        $this->trainings  = $trainingInterface;
        $this->categories = $trainingCategoryInterface;
    }

    public function index()
    {
        $trainings = $this->trainings->all();

        return view('training::training.admin.index')->with(['trainings' => $trainings]);
    }

    public function create()
    {
        $categories = $this->categories->all();

        return view('training::training.admin.create')->with(['categories' => $categories]);
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
