<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
    	return view ('home.portfolio.register.index');
    }

    public function store(Request $request){

    	//Validate the user
    	$request->validate([
    		'name'=>'required|min:3|max:20',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|between:6,10|confirmed',
    		'address'=>'required'
    	]);

    	//Save the data
    	$user=User::create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>bcrypt($request->password),
    		'address'=>$request->address
    	]);

    	//Sign the user in
    	auth()->login($user);

    	//Redirect to
    	return redirect('/portfolio/login')->with('msg','Register Successfull'); ;    	
    }
}
