@extends('home.layouts.master')

@section('content')

 <div class="row"> 		
        <div class="col-md-12">  
            <div class="card">
                <div class="header">
                    <h4 class="title">Pengalaman Bekerja</h4>
                    <p class="category">Daftar Pengalaman Bekerja</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Posisi</th>
                            <th>Periode</th>
                            <th>Deskripsi</th>                            
                        </tr>
                        </thead>
                        <tbody>                            
                            @include('home.pengalamanbekerja.details')                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection