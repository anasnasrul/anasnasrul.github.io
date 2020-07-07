@extends('home.layouts.master')

@section('content')

 <div class="row">      
        <div class="col-md-12"> 
            <div class="card">
                <div class="header">
                    <h4 class="title">Portfolio</h4>
                    <p class="category">User Profile</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-bordered">
                        <thead>       
                            <tr>
                                <th colspan="2">User Details <a href="" class="pull-right"><i class="fa fa-cogs"></i> Edit user</a></th>
                            </tr>                      
                        </thead> 
                        @include('home.portfolio.userprofile.details')                                         
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection