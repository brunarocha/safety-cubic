<?php
/**
 * @author: Bruna Rocha
 * @date: 30/10/2019
 */

namespace App\Domain\Company\Repositories\Company;

/**
 * Interface CompanyInterface
 * @package App\Domain\Company\Repositories\Company
 */
interface CompanyInterface {

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param array $array
     * @return mixed
     */
    public function create(array $array);

    /**
     * @param array $array
     * @param $id
     * @return mixed
     */
    public function update(array $array, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);


}
