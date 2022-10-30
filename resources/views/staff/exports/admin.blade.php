<table>
    <tr>
        <th>nama</th>
        <th>email</th>
        <th>telepon</th>
        <th>alamat</th>
        <th>tanggal_lahir</th>
        <th>gender</th>
        <th>cabang</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->birth}}</td>
        <td>{{$item->gender->name}}</td>
        <td>{{$item->staff->subsidiary->name}}</td>
    </tr>
    @endforeach
</table>

