<?php

namespace App\Core;

class FakeMovieRepository implements IMovieRepository {

    private $movies = [
        [
            'id' => 1,
            'title'=> 'Terminator',
            'image'=> 'https://m.media-amazon.com/images/I/71di4btWiuL._SY445_.jpg'
        ],
        [
            'id' => 2,
            'title'=> 'Los Simpsons',
            'image'=> 'https://musicimage.xboxlive.com/catalog/video.movie.8D6KGWZL5QPK/image?locale=es-es&mode=crop&purposes=BoxArt&q=90&h=225&w=150&format=jpg'
        ],
        [
            'id' => 3,
            'title'=> 'Ratatouille',
            'image'=> 'https://educayaprende.com/wp-content/uploads/2014/05/ratatouille-cover-caratula-dvd-disney-pixar.jpg
'
        ],
    ];
            
    public function getAll(){
        return $this->movies;
    }
}