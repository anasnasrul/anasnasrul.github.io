<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
     public function index(){
    	return view('home.portfolio.login.index');
    }

    public function store(Request $request){

    	//Validate the user
    	$rules=[
    		'email'=>'required|email',
    		'password'=>'required'
    	];

    	$request->validate($rules);

    	//check if exists
    	$data=request (['email','password']);        
    	if (!auth()->attempt($data)) {    
        return redirect('/portfolio/login')->with('msg','Invalid Email or Password');                 
    		
    	}    	
        
    	return redirect('/portfolio/chat')->with('msg','Login Successfull'); 
    }    
}
