<?php

namespace App;
use App\Controllers\MovieController;
use App\Core\SQLConnection;

$uri = $_SERVER["REQUEST_URI"];

$controller = new MovieController();

if ($uri == '/movies' || $uri == '/') {
    $controller -> index();
}

if ($uri == '/movies/create') {
   $controller -> create();
}