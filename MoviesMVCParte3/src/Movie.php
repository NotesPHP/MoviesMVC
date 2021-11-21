<?php

require_once 'Database.php';

class Movie{
    public $id;
    public $title;
    public $image;

    private $db;

    public function __construct($data = null)
    {
        if ($data) {
            $this->id = $data['id'];
            $this->title = $data['title'];
            $this->image = $data['image'];
        }
        $this->db = new Database();
    }

    public function all() {
        $moveiList = [];
        foreach ($this->db->getAll() as $elementMovie) {
            array_push($moveiList, new self ($elementMovie));
        }
        return $moveiList;
    }
}