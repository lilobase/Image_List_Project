<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('uniqueId'))
{
    function uniqueId()
    {
        return sha1(microtime().mt_rand(0, 10000));
    }
}

?>
