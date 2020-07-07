<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UdemyController extends Controller
{
     public function index(){    
   		        
        return view('home.portfolio.course.udemy.index');

    } 
}
