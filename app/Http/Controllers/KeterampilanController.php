<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeterampilanController extends Controller
{
	 
    public function index (){
    	return view('home.keterampilan.index');
    }
}
