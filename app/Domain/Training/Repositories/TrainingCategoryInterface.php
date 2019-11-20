<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Training\Repositories;

/**
 * Interface TrainingCategoryInterface
 * @package App\Domain\Training\Repositories
 */
interface TrainingCategoryInterface {

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
