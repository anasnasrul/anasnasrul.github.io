@extends('home.layouts.master')

@section('content')

 <div class="row">      
        <div class="col-md-12"> 
            <div class="card">
                <div class="header">
                    <h4 class="title">Portfolio</h4>
                    <p class="category">Register</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>                       
                            @include('home.portfolio.register.details')                           
                        </thead>                                          
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection