@extends('home.layouts.master')

@section('content')

 <div class="row"> 	
        <div class="col-md-12">    
            <div class="card">                
                <div class="header">
                    <h4 class="title">Keterampilan</h4>
                    <p class="category">Daftar Keterampilan</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Deskripsi</th>                            
                        </tr>
                        </thead>
                        <tbody>
                            @include('home.keterampilan.details')                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection