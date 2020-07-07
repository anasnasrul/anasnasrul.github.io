<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class GuestbookController extends Controller
{

    public function index()
    {
        $messages = Message::all();
        return view('home.portfolio.guestbook.index', compact('messages'));
    }  

    public function create()
    {
        return view('home.portfolio.guestbook.new');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        
        $messages = [
            'name.required' => 'Please fill your name.',
            'message.required' => 'Please fill your message.',
        ];

        $this->validate($request,[
            'name' => 'required|max:255',
            'message' => 'required',
        ], $messages);
        
        Message::create($input)->id;
        
        $request->session()->flash('alert-success', 'Message added successfully!');
        
        return redirect('/portfolio/guestbook');
    }

    public function edit($id)
    {
        $message   = Message::findOrFail($id);
        return view('home.portfolio.guestbook.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {

        $input = $request->all();
        
        $messages = [
            'name.required' => 'Please fill your name.',
            'message.required' => 'Please fill your message.',
        ];

        $this->validate($request,[
            'name' => 'required|max:255',
            'message' => 'required',
        ], $messages);
        
        $data = Message::findOrFail($id);
        $data->fill($input)->save();
        $request->session()->flash('alert-success', 'Message updated successfully!');
        return redirect('/portfolio/guestbook');
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('home.portfolio.guestbook.show', compact('message'));
    }

    public function destroy($id, Request $request)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        $request->session()->flash('alert-success', 'Message deleted successfully!');
        return redirect('/portfolio/guestbook');
    } 

}