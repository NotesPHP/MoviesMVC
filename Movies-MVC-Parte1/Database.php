<?php

class Database{

    private $movies = [
        [
            'id' => 1,
            'title'=> 'Terminator',
            'image'=> 'https://m.media-amazon.com/images/I/71di4btWiuL._SY445_.jpg'
        ],
        [
            'id' => 1,
            'title'=> 'Los Simpsons',
            'image'=> 'https://musicimage.xboxlive.com/catalog/video.movie.8D6KGWZL5QPK/image?locale=es-es&mode=crop&purposes=BoxArt&q=90&h=225&w=150&format=jpg'
        ],
    ];
            
    public function getAll(){
        return $this->movies;
    }
}