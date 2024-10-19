<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function match_url($url)
{
    return $_SERVER["REQUEST_URI"] === $url;
}

function base_path($path = ''): string
{
    return __DIR__ . "/$path";
}

function view($path, $data = [])
{
    extract($data);
    require base_path("views/$path");
}