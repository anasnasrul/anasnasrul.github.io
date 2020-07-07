@extends('home.layouts.master')

@section('content')

<div class="container">
    <div class="row">      
        <div class="col-md-11"> 
            <div class="card">
                <div class="header" align="center">
                    <img src="/assets/img/bannerudemy.jpg" widht="80px" height="50px">                   
                </div>
                <div class="content table-responsive table-full-width" >
                    <table class="table table-bordered">                        
                        <body>                             
                        @include('home.portfolio.course.udemy.details')   
                        </body>                                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection