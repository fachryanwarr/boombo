<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller {
    public function index() {
        return view('movies', [
            "movies" => Movie::All(),
            "title" => "movies"
        ]);
    }

    public function getOne(Movie $movie) {
        return view('movie', [
            "movie" => $movie,
            "title" => "movies"
        ]);
    }
}
