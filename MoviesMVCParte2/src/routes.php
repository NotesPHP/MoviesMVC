<?php
require_once __DIR__ . '/Controllers/MovieController.php';
//var_dump($_SERVER["REQUEST_URI"]);

$uri = $_SERVER["REQUEST_URI"];

$controller = new MovieController();

if ($uri == '/movies' || $uri == '/') {
    $controller -> index();
}

if ($uri == '/movies/create') {
   $controller -> create();
}