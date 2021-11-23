<?php

namespace App;
use App\Controllers\MovieController;
use App\Core\SQLConnection;

//var_dump($_POST);

$controller = new MovieController();
if ($_POST){
    $controller -> store($_POST);
}

$uri = $_SERVER["REQUEST_URI"];


/*if ($uri == '/movies' || $uri == '/') {
    $controller -> index();
}*/

if ($uri == '/movies/create') {
   $controller -> create();
}