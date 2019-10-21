<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\User\Http\Controllers\Users;

use App\Domain\User\Repositories\Users\UserInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Domain\User\Http\Controllers\Users
 */
class UserController extends Controller {
    /**
     * @var UserInterface
     */
    protected $users;

    /**
     * UserController constructor.
     * @param UserInterface $userInterface
     */

    public function __construct(UserInterface $userInterface)
    {
        $this->users = $userInterface;
    }

    public function index()
    {
        return view('users::users.index');
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
