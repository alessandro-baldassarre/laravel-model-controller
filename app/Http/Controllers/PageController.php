<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('movies.index',  ['movies' => Movie::all()]);
    }

}
