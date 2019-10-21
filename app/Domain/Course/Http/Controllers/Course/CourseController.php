<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */
namespace App\Domain\Course\Http\Controllers\Course;

use App\Domain\Course\Repositories\CourseInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class CourseController
 * @package App\Domain\Course\Http\Controllers\Course
 */
class CourseController extends Controller {
    /**
     * @var CourseInterface
     */
    protected $courses;

    /**
     * CourseController constructor.
     * @param CourseInterface $courseInterface
     */

    public function __construct(CourseInterface $courseInterface)
    {
        $this->courses = $courseInterface;
    }

    public function index()
    {
        return view('course::course.index');
    }

    public function dashboard()
    {
        return view('users::dashboard.index');
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
