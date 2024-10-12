<?php
//require "views/home.template.html";

$url = $_SERVER['REQUEST_URI'];

if ($url === "/")
    require "views/home.template.html";
elseif ($url === "/contact")
    require "views/contact.template.html";
elseif ($url === "/about")
    require "views/about.template.html";