<?php

namespace App\Models;
use App\Core\FakeMovieRepository;
use App\Core\SQLMovieRepository;
use App\Core\IMovieRepository;

class Movie {
    public $id;
    public $title;
    public $image;

    private IMovieRepository $db;

    public function __construct($data = null)
    {
        if ($data) {
            $this->id = $data['id'];
            $this->title = $data['title'];
            $this->image = $data['image'];
        }
        $this->db = new SQLMovieRepository();
    }

    public function all() {
        $moveiList = [];
        foreach ($this->db->getAll() as $elementMovie) {
            array_push($moveiList, new self ($elementMovie));
        }
        return $moveiList;
    }
}