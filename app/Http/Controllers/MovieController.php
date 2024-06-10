<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movieList = Movie::all();
        dd($movieList);
        return view('movie');
    }
}
