<?php
/**
 * @author: Bruna Rocha
 * @date: 04/11/2019
 */
namespace App\Domain\Dashboard\Http\Controllers;

use App\Domain\User\Repositories\User\UserInterface;
use \App\Support\Http\Controller;

/**
 * Class DashboardController
 * @package App\Domain\Dashboard\Http\Controllers
 */
class DashboardController extends Controller
{

    protected $users;

    public function __construct(UserInterface $userInterface)
    {
        $this->users = $userInterface;
    }

    public function index()
    {
        if(auth()->user()->hasRole('administrator')){
            return view('dashboard::dashboard.admin.index');

        } else if(auth()->user()->hasRole('student')){
            $user = $this->users->show(auth()->user()->id);

            return view('dashboard::dashboard.student.index')->with([
                'courses' => $user->courses
            ]);
        }

        dd('other user');

    }

}
