<?php

function site_url($uri ='') {
    if(! is_array($uri)) {
        // args -> array
        $uri = func_get_args();
    }
    
    $CI = & get_instance();
    return $CI->config->site_url($uri);
}

function url($text, $uri = '') {
    if( ! is_array($uri))
    {
        $uri = func_get_args();

        //	Suppression de la variable $text
        array_shift($uri);
    }

    echo '<a href="' . site_url($uri) . '">' . htmlentities($text) . '</a>';
    return '';
}

?>
