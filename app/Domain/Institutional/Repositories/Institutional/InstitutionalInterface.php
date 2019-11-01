<?php
/**
 * @author: Bruna Rocha
 * @date: 16/10/2019
 */

namespace App\Domain\Institutional\Repositories\Institutional;

/**
 * Interface InstitutionalInterface
 * @package App\Domain\Institutional\Repositories\Institutional
 */
interface InstitutionalInterface {

    /**
     * @return mixed
     */
    public function all();

    /**
    * return Mission, Vision and Values
     */
    public function principles();


}
