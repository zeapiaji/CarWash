@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')
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
            <a href="{{ url('plans/add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
        </div>

        {{-- Table  --}}
        <div class="table-responsive scrollbar">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Plan_id</th>
                  <th scope="col">Fitur</th>
                  <th class="text-end" scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->plan_id }}</td>
                  <td>{{ $item->feature }}</td>
                  <td class="text-end">
                    <div>
                        <a href="/plans/edit/{{ $item->id }}">
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
