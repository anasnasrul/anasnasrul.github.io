<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pendidikan;
use App\training;

class HomeController extends Controller
{
    
    public function index()
    {
        $pendidikan = new pendidikan();
        $training = new training();

        return view('home.index', compact('pendidikan','training'));
    }
}
