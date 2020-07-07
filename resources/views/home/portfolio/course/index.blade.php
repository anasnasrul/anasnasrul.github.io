@extends('home.layouts.master')

@section('content')

<div class="container">
    <div class="row">      
        <div class="col-md-12"> 
            <div class="card">
                <div class="header">
                    <h4 class="title">Online Course</h4>
                    <p class="category">Course List</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-bordered">                        
                        <body>                             
                        @include('home.portfolio.course.details')   
                        </body>                                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection