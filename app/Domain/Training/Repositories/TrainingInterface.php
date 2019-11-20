<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Repositories;

/**
 * Interface TrainingInterface
 * @package App\Domain\Training\Repositories
 */
interface TrainingInterface {

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $name
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function allByCategories($name);

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
