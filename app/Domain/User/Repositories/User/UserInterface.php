<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\User\Repositories\User;

/**
 * Interface UserInterface
 * @package App\Domain\User\Repositories\User
 */
interface UserInterface {

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
