<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Training;

class TrainingController extends Controller
{
	 public function index()
    {
        $training = DB::table('training')->paginate(5);

        return view('home.training.index', ['training' => $training]);
    }
    
}
