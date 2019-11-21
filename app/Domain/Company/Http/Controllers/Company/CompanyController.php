<?php
/**
 * @author: Bruna Rocha
 * @date: 30/10/2019
 */
namespace App\Domain\Company\Http\Controllers\Company;

use App\Domain\Company\Repositories\Company\CompanyInterface;
use \App\Support\Http\Controller;
use Illuminate\Http\Request;

/**
 * Class CompanyController
 * @package App\Domain\Company\Http\Controllers\Company
 */
class CompanyController extends Controller {
    /**
     * @var CompanyInterface
     */
    protected $company;

    /**
     * CompanyController constructor.
     * @param CompanyInterface $companyInterface
     */

    public function __construct(CompanyInterface $companyInterface)
    {
        $this->company = $companyInterface;
    }

    public function index()
    {
        //return view('user::user.index');
    }

    public function create()
    {
        //return view('user::user.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        $company = $this->company->show(1);

        return view('company::company.edit')->with(['company' => $company]);
    }

    public function update(Request $request, $id)
    {
        $this->company->update($request->all(), $id);
        $company = $this->company->show($id);

        return redirect()->route('company.edit', $id)->with(['company' => $company, 'message' => 'Alterado com sucesso!']);
    }

    public function delete($id)
    {

    }

    public function show($id)
    {

    }

}
