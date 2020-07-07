@extends('home.layouts.master')

@section('content')

 <div class="row"> 		
        <div class="col-md-12">   
            <div class="card">
                {{ Html::style('assets/bootstrap-4.0.0-dist/css/bootstrap.min.css') }}
                <div class="header">
                    <h4 class="title">Training</h4>
                    <p class="category">Daftar Training</p>
                </div>                
                <div class="content table-responsive table-full-width">                    
                    <table class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Penyedia</th>
                            <th>Lokasi</th> 
                            <th>Periode</th>
                            <th>Status</th> 
                            <th>Deskripsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @include('home.training.details')                                                        
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection