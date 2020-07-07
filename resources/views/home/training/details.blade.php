<div class="container">
    {{ $training->links() }}
    <p><a href="/">Home</a></p>

    @foreach ($training as $trainings)
    <tr>
        <td>{{ $trainings->id }}</td>
        <td>{{ $trainings->nama }}</td>
        <td>{{ $trainings->penyedia }}</td>
        <td>{{ $trainings->lokasi }}</td>
        <td>{{ $trainings->periode }}</td>
        <td>{{ $trainings->status }}</td>
        <td>{{ $trainings->deskripsi }}</td>
    </tr>
    @endforeach    
</div>

    
 
 
    

