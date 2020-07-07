@extends('home.layouts.master')

@section('content')

<div class="container">
    <div class="row">      
        <div class="col-md-12"> 
            <div class="card">
                <div class="header" align="center">
                    <img src="/assets/img/bannersololearn.jpg" widht="90px" height="60px">                      
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-bordered">
                        <body>                             
                        @include('home.portfolio.course.sololearn.details')   
                        </body>                                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection