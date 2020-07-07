@extends('home.layouts.master')

@section('content')

 <div class="row">      
        <div class="col-md-12"> 
            <div class="card">
                <div class="header">
                    <h4 class="title">Portfolio</h4>
                    <p class="category">Chat</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-bordered">
                        <thead>       
                            <meta name="csrf-token" content="{{ csrf_token() }}">                            
                        </thead>
                        <body>                             
                        @include('home.portfolio.chat.details')   
                        </body>                                      
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection