@extends('home.layouts.master')

@section('content')

 <div class="row">      
        <div class="col-md-12"> 
            <div class="card">
                <div class="header">
                    <h4 class="title">Portfolio</h4>
                    <p class="category">Login</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        @include('home.layouts.message')
                        <thead>                       
                            @include('home.portfolio.login.details')                           
                        </thead>                                          
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection