<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\LearningUnit\Http\Controllers\Student\Training;

use App\Domain\Training\Repositories\TrainingInterface;
use App\Domain\User\Repositories\User\UserInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class TrainingController
 * @package App\Domain\LearningUnit\Http\Controllers\Student\Training
 */
class TrainingController extends Controller {
    /**
     * @var TrainingInterface
     * @var UserInterface
     */
    protected $trainings;
    protected $users;

    /**
     * CourseController constructor.
     * @param TrainingInterface $trainingInterface
     * @param UserInterface $userInterface
     */

    public function __construct(
        TrainingInterface $trainingInterface,
        UserInterface $userInterface
    )
    {
        $this->trainings = $trainingInterface;
        $this->users     = $userInterface;
    }

    public function index()
    {
        $user = $this->users->show(auth()->user()->id);

        return view('learning-unit::student.training.index')->with([
            'trainings' => $user->trainings
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
        $training = $this->trainings->show($id);

        //return view('learning-unit::training.student.index')->with(['trainings' => $trainings]);
        return view('learning-unit::student.training.show')->with(['training' => $training]);
    }

}
