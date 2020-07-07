<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pendidikan;

class PendidikanController extends Controller
{
	public function index()
    {
        $pendidikan = DB::table('pendidikan')->paginate(5);

        return view('home.pendidikan.index', ['pendidikan' => $pendidikan]);
    }

}
