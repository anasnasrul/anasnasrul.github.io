@extends('home.layouts.master')

@section('content')

 <div class="row"> 		
        <div class="col-md-12">   
            <div class="card">                
                <div class="header">
                    <h4 class="title">Pendidikan</h4>
                    <p class="category">Daftar Pendidikan</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama Sekolah</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Periode</th>
                            <th>Status</th>
                            <th>IPK</th>
                        </tr>
                        </thead>
                        <tbody>
                            @include('home.pendidikan.details')                                 
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection