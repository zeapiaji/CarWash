<table>
    <tr>
        <th>nama</th>
        <th>telepon</th>
        <th>alamat</th>
        <th>email</th>
        <th>plat_nomor</th>
        <th>mobil</th>
        <th>tipe</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->car->number_plate ?? ''}}</td>
        <td>{{$item->car->name ?? ''}}</td>
        <td>{{$item->car->car_type->name ?? ''}}</td>
    </tr>
    @endforeach
</table>
