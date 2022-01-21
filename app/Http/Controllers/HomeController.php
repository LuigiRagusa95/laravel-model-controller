<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = Movie::all();
        return view('pages.home', compact('data'));
    }
}
