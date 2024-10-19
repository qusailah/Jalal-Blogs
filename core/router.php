<?php

//require "views/home.template.html";

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require "routes.php";

if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    http_response_code(404);
    require "app/Views/404.template.html";
}

//if ($url === "/")
//    require "app/Controllers/home.php";
//elseif ($url === "/contact")
//    require "app/Controllers/contact.php";
//elseif ($url === "/about")
//    require "app/Controllers/about.php";
//else {
//    http_response_code(404);
//    require "app/Views/404.template.html";
//    die();
//}
