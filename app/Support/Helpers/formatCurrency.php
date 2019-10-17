<?php

/**
 * formatCurrency.php
 *
 * @author Bruna Rocha
 * @package Hofund
 *
 */
if (!function_exists('formatCurrency')) {
    function formatCurrency($value) {
        if($value) {
            $replace = str_replace([' ', '$', '%', '_', '.'], '', $value); //$ ___._13.213,2121
            return str_replace(',', '.', $replace);
        }
        return 0;
    }
}