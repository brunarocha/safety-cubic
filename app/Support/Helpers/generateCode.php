<?php

/**
 * generateCode.php
 *
 * @author Bruna Rocha
 * @package Hofund
 *
 */
if (!function_exists('generateCode')) {

    /**
     * return code format: INITIALS-CODE/YEAR
     * Ex: CTR-0005/19
     */
    function generateCode($initials, $code) {
        $year = date('y');

        return $initials.'-'.str_pad($code, 4 , '0' , STR_PAD_LEFT).'/'.$year;
    }
}