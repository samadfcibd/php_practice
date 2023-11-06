<?php

function urlIs($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}
