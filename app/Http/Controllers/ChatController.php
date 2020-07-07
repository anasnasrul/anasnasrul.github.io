<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

	 //public function __construct()
    //{
      //  $this->middleware('auth');
    //}

    public function index(){
   		
        return view('home.portfolio.chat.index');
    }

    public function send(request $request)
    {
      return $request->all();
    	$user=User::find(Auth::id());
    	event(new ChatEvent($request->message,$user));
    }

   
}
