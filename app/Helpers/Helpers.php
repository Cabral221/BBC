<?php

if(! function_exists('page_title')){
    function page_title($title)
    {
        $base_title = 'BBC University';
        if($title === ''){
            return $base_title;
        }

        return $title. ' | ' .$base_title;    
    }
}