@extends('home.layouts.master')

@section('content')

 <div class="row"> 		
        <div class="col-md-12">    
            <div class="card">
                <div class="header">
                    <h4 class="title">Profile</h4>
                    <p class="category">My Profile</p>

                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead class="thead-dark">                       
                            @include('home.profile.details')                           
                        </thead>                                          
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection