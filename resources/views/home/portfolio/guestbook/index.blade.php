@extends('home.layouts.master')

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
                        <thead class="thead-dark">       
                            <meta name="csrf-token" content="{{ csrf_token() }}">                            
                        </thead>
                        <body>                             
                        @include('home.portfolio.guestbook.details')   
                        </body>                                      
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection