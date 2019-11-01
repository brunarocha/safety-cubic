<?php
/**
 * @author: Bruna Rocha
 * @date: 30/10/2019
 */
namespace App\Domain\Company\Repositories\Company;

use App\Domain\Company\Entities\Company;
use \App\Support\Repository\AbstractRepository;

/**
 * Class CompanyRepository
 * @package App\Domain\Company\Repositories\Company
 */
class CompanyRepository extends AbstractRepository implements CompanyInterface {

    /**
     * @var $company
     */
    protected $company;

    /**
     * TestimonialRepository constructor.
     * @param Company $company
     */
    public function __construct(Company $company)
    {
        $this->model = new AbstractRepository($company);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param array $array
     * @return mixed
     */
    public function create(array $array)
    {

    }

    /**
     * @param array $array
     * @param $id
     * @return mixed
     */
    public function update(array $array, $id)
    {

    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->model->show($id);
    }

}

