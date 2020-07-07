@foreach ($users as $user)
<tr>
    <th>ID</th>    
    <td>{{ $user->id }}</td>    
</tr>
<tr>
    <th>Name</th>
    <td>{{ $user->name }}</td>
</tr>
<tr>
    <th>Email</th>
    <td>{{ $user->email }}</td>
</tr>
<tr>
    <th>Registered At</th>
    <td>{{ $user->created_at }}</td>
</tr>
@endforeach