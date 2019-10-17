<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */
namespace App\Domain\Institutional\Http\Controllers\Institutionals;

use App\Domain\User\Repositories\Users\UserInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class InstitutionalController
 * @package App\Domain\Institutional\Http\Controllers\Institutionals
 */
class InstitutionalController extends Controller {
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
        return view('institutionals::institutionals.index');
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
