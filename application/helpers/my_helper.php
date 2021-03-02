<?php

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    die();
    echo "</pre>";
}

function asset($var)
{
    return base_url($var);
}
