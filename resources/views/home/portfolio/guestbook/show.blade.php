@extends('home.layouts.master')

@section('page')

    Portfolio

@endsection

@section('content')

 <div class="row">      
        <div class="col-md-12"> 
            <div class="card">
                <div class="header">
                    <h4 class="title">Portfolio</h4>
                    <p class="category">Guestbook</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-bordered">
                        <thead>       
                            <meta name="csrf-token" content="{{ csrf_token() }}">                            
                        </thead>
                        <body>  
                            <div id="app">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2" align="center">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <h4>Show Message</h4>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Name</th>
                                                                <th>Message</th>
                                                                <th>Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $message->id }}</td>
                                                                <td>{{ $message->name }}</td>
                                                                <td>{{ $message->message }}</td>
                                                                <td>{{ $message->created_at }}</td>
                                                                <td>                                                                    
                                                                    <a href="{{ url('/portfolio/guestbook') }}"> All Message</a> | 
                                                                    <a href="{{ url('/portfolio/guestbook/'.$message->id.'/destroy') }}"> Delete</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{ Html::script('/assets/js/jquery-3.2.1.js') }}
                            {{ Html::script('/assets/js/app.js') }} 
                        </body>                                      
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection