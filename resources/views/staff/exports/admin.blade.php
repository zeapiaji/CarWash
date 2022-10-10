<table>
    <tr>
        <th>nama</th>
        <th>email</th>
        <th>telepon</th>
        <th>alamat</th>
        <th>tanggal_lahir</th>
        <th>gender</th>
        <th hidden>gender_id</th>
        <th>password</th>
        <th>cabang</th>
        <th hidden>cabang_id</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->user->name}}</td>
        <td>{{$item->user->email}}</td>
        <td>{{$item->user->phone}}</td>
        <td>{{$item->user->address}}</td>
        <td>{{$item->user->birth}}</td>
        <td>{{$item->user->gender->name}}</td>
        <td hidden>{{$item->user->gender->id}}</td>
        <td>{{$item->user->password}}</td>
        <td>{{$item->subsidiary->name}}</td>
        <td hidden>{{$item->subsidiary->id}}</td>
    </tr>
    @endforeach
</table>
