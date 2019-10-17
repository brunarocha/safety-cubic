<?php

/**
 * formatDate.php
 *
 * @author Bruna Rocha
 * @package Hofund
 *
 */
if (!function_exists('formatDate')) {
    function formatDate($date, $format, $newFormat = 'Y-m-d') {
        return (\DateTime::createFromFormat($format, $date)->format($newFormat));
    }
}