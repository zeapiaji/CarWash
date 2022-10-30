<table>
    <tr>
        <th>nama</th>
        <th>email</th>
        <th>telepon</th>
        <th>alamat</th>
        <th>tanggal_lahir</th>
        <th>gender</th>
       
        
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->user->name}}</td>
        <td>{{$item->user->email}}</td>
        <td>{{$item->user->phone}}</td>
        <td>{{$item->user->address}}</td>
        <td>{{$item->user->birth}}</td>
        <td>{{$item->user->gender->name}}</td>
        
       
    </tr>
    @endforeach
</table>
