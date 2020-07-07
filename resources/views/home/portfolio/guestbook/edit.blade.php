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
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h3>Edit Message</h3>
                                                <form id="contactForm" action="{{ url('/portfolio/guestbook/'.$message->id) }}" method="POST">
                                                    <input name="_method" type="hidden" value="PUT">

                                                    @if (count($errors) > 0)
                                                        <div class="alert alert-danger hide-box mt-4" id="contactError">
                                                            <p><strong>Error!</strong> Problem updating message.</p>
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif

                                                    {{ csrf_field() }}
                                                    
                                                    <div class="form-group">
                                                        <label>Name *</label>
                                                        <input type="text" value="{{ $message->name }}" maxlength="100" class="form-control" name="name" id="name" placeholder="Name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Message *</label>
                                                        <textarea maxlength="5000" rows="8" class="form-control" name="message" id="message" placeholder="Message">{{ $message->message }}</textarea>                 
                                                    </div>

                                                    <input type="submit" value="Update Message" class="btn btn-primary">
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ Html::script('/asset/js/jquery-3.2.1.js') }}
                        {{ Html::script('/asset/js/app.js') }} 
                        </body>                                      
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection