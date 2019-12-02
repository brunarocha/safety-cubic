<?php
/**
 * @author: Bruna Rocha
 * @date: 21/10/2019
 */

namespace App\Domain\Publication\Repositories;

/**
 * Interface PublicationInterface
 * @package App\Domain\Publication\Repositories
 */
interface PublicationInterface {

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

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);



}
