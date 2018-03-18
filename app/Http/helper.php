<?php
/**
 * Created by PhpStorm.
 * User: joshuadeguzman
 * Date: 18/03/2018
 * Time: 11:12 PM
 */

function isActiveRoute($route, $output = 'active')
{
    if (Route::currentRouteName() == $route) {
        return $output;
    }
}