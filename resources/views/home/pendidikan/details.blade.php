<div class="container">
     {{ $pendidikan->links() }}
    <p><a href="/">Home</a></p>
    @foreach ($pendidikan as $pendidikans)
    <tr>
        <td>{{ $pendidikans -> id }}</td>
        <td>{{ $pendidikans -> nama_sekolah }}</td>
        <td>{{ $pendidikans -> alamat }}</td>
        <td>{{ $pendidikans -> jurusan }}</td>
        <td>{{ $pendidikans -> periode }}</td>
        <td>{{ $pendidikans -> status }}</td>
        <td>{{ $pendidikans -> ipk }}</td>
    </tr>
     @endforeach
</div>