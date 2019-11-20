<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\Training\Http\Controllers\Course;

use App\Domain\Training\Repositories\TrainingInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class TrainingController
 * @package App\Domain\Training\Http\Controllers\Training
 */
class TrainingController extends Controller {
    /**
     * @var TrainingInterface
     */
    protected $trainings;

    /**
     * CourseController constructor.
     * @param TrainingInterface $trainingInterface
     */

    public function __construct(TrainingInterface $trainingInterface)
    {
        $this->trainings = $trainingInterface;
    }

    public function index()
    {
        return view('training::training.index');
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
