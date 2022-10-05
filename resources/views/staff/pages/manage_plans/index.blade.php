@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')
{{-- <div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col d-none d-sm-block">
                <span class="fas fa-users" style="color: #344050; font-size:20px;"></span>
                <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Kelola Paket Pencucian</h4>
            </div>
            <div class="col-auto d-none d-sm-block">
                <h6 class="d-none d-sm-inline-block ms-1">Total Paket</h6>
                <span class="fw-bolder mx-1" style="font-size:20px">|</span>
                <h6 class="d-none d-sm-inline-block" data-countup='{"endValue":{{$totalPaket}}}'>0</h6>
            </div>
        </div>
    </div>
</div> --}}

<div class="card mb-3">
    <div class="card-body">
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
            <div class="fs-1">Carwash</div>
            <h3 class="fs-2 fs-md-3">
                Kelola Paket Pencucian
            </h3>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/add/pricing" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
        </div>
        {{-- <div class="col-12 col-lg-9 col-xl-10 col-xxl-8"><br>
            <div class="row">
                <div class="col-md">
                    <div class="border rounded-3 overflow-hidden mb-3 mb-md-0">
                        <div class="d-flex flex-between-center p-4">
                            <div>
                                @foreach($plans as $p)
                                <h3 class="fw-light fs-5 mb-0 text-primary">Paket 1</h3>
                                <h2 class="fw-light mt-0 text-primary">
                                    <sup class="fs-1">Rp</sup>
                                    <span class="fs-3">25</span>
                                    <span class="fs--2 mt-1">K</span>
                                </h2>
                            </div>
                        </div>
                        <div class="p-4 bg-light">
                            <ul class="list-unstyled">
                                <li>text</li>
                            </ul>
                            <button class="btn btn-outline-primary">edit</button>
                            <button class="btn btn-outline-primary">hapus</button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="border rounded-3 overflow-hidden mb-3 mb-md-0">
                        <div class="d-flex flex-between-center p-4">
                            <div>
                                <h3 class="fw-light fs-5 mb-0 text-primary">Paket 1</h3>
                                <h2 class="fw-light mt-0 text-primary">
                                    <sup class="fs-1">Rp</sup>
                                    <span class="fs-3">25</span>
                                    <span class="fs--2 mt-1">K</span>
                                </h2>
                            </div>
                        </div>
                        <div class="p-4 bg-light">
                            <ul class="list-unstyled">
                                <li>text</li>
                            </ul>
                            <button class="btn btn-outline-primary">edit</button>
                            <button class="btn btn-outline-primary">hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        {{-- Table  --}}
        <div class="table-responsive scrollbar">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Paket</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Fitur</th>
                  <th scope="col">Type_id/Mobil</th>
                  <th class="text-end" scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($plans as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->harga }}</td>
                  <td>{{ $item->fitur }}</td>
                  <td>{{ $item->type_id }}</td>
                  {{-- <td>{{ $item->type_id->name }}</td> --}}
                  <td class="text-end">
                    <div>
                        <a href="{{ url('pricing/edit/'.$item->id) }}">
                            <button class="btn btn-link p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <span class="text-500 fas fa-edit"></span>
                            </button>
                        </a>
                        <form action="{{ url('pricing/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Hapus paket ini?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-link p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                <span class="text-500 fas fa-trash-alt"></span>
                            </button>
                        </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

    </div>
    </div>
</div>

@endsection
