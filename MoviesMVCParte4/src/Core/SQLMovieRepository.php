<?php

namespace App\Core;

class SQLMovieRepository implements IMovieRepository{

    private $table = 'movies';
    private $conection;

    function __construct(){
        $this->conection = (new SQLConnection()) -> mysql;
    }

    function getall(){

        $query = $this->conection->query("select * FROM {$this->table}");
        $result = $query->fetchAll();
        return $result;
    }
}