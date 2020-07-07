<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanBekerjaController extends Controller
{
    public function index (){
    	return view('home.pengalamanbekerja.index');
    }
}
