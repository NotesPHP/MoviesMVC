<?php

require_once __DIR__ . '/../Movie.php';

class MovieController{
    public function index(){
        $movies = (new Movie())->all();
        require_once __DIR__ . '/../views/pages/MovieList.php';
    }

    public function create(){
        require_once __DIR__ . '/../views/pages/MovieCreate.php';
    }
}