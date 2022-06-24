<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index(){

        // $films = Movie::all();

        return view('movie');
        // return view('movie', compact('films'));
    }
}
