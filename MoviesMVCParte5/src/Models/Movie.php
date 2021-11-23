<?php

namespace App\Models;
use App\Core\FakeMovieRepository;
use App\Core\SQLMovieRepository;
use App\Core\IMovieRepository;

class Movie {
    public ?int $id = null;
    public $title;
    public $image;

    private IMovieRepository $db;

    public function __construct($data = null)
    {
        if ($data) {
            if (isset($data['id'])){
                $this->id = $data['id'];
            }
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

    public function save(){
        $this->db->save();
    }
}