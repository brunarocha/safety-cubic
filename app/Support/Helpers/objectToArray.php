<?php

/**
 * objectToArray.php
 *
 * @author Breno Pereira <breno.pereira@nextem.com.br>
 * @package Hofund
 *
 */
if (!function_exists('objectToArray')) {
    function objectToArray($d) {
        if (is_object($d)) {
            $d = get_object_vars($d);
        }
        if (is_array($d)) {
            return array_map(__FUNCTION__, $d);
        } else {
            return $d;
        }
    }
}