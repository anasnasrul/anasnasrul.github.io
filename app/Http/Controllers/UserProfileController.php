<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfileController extends Controller
{
	
    public function index(){
   		$users = User::all();
        return view('home.portfolio.userprofile.index', compact('users'));
    }
}
