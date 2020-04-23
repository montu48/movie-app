<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;


    public function __construct($popularMovies,$nowPlayingMovies,$genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->popularMovies = $popularMovies;
    }

    public function popularMovies(){
        return $this->popularMovies;
    }

    public function nowPlayingMovies(){
        return $this->nowPlayingMovies;
    }

    public function genres(){
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }
}
