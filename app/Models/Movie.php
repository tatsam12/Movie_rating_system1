<?php

namespace App\Models;

use App\Http\Controllers\Controller;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::all();
        return view('movie.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        //
    }
}
