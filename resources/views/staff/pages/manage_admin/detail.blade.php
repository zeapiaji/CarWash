@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">{{$data->name}} (<a href="mailto:tony@gmail.com">{{$data->email}}</a>)</h5>
            </div>
            <div class="col-auto d-none d-sm-block">
                <button class="btn btn-falcon-default btn-sm dropdown-toggle ms-2 dropdown-caret-none" type="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                        class="fas fa-ellipsis-h"></span></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/edit/admin/{{$data->id}}}">Sunting</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="/delete/admin/{{$data->id}}">Hapus Member</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body bg-light border-top">
        <div class="row">
            <div class="col-lg col-xxl-5">
                <h6 class="fw-semi-bold ls mb-3 text-uppercase">Informasi Akun Admin</h6>
                <div class="row">
                    <div class="col-6 col-sm-5">
                        <p class="fw-semi-bold mb-1">Email</p>
                    </div>
                    <div class="col"><a href="mailto:{{$data->email}}">{{$data->email}}</a></div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-5">
                        <p class="fw-semi-bold mb-1">Telepon</p>
                    </div>
                    <div class="col">
                        <p class="fst-italic text-400 mb-1"><a href="tel:{{$data->phone}}">{{$data->phone}}</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-5">
                        <p class="fw-semi-bold mb-1">Jenis Kelamin</p>
                    </div>
                    <div class="col">
                        <p class="mb-1" style="width: 200px">{{$data->gender->name}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-5">
                        <p class="fw-semi-bold mb-1">Tanggal Lahir</p>
                    </div>
                    <div class="col">
                        <p class="mb-1" style="width: 200px">{{$data->birth}}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 col-sm-5">
                        <p class="fw-semi-bold mb-1">Alamat</p>
                    </div>
                    <div class="col">
                        <p class="mb-1" style="width: 200px">{{$data->address}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-5">
                        <p class="fw-semi-bold mb-1">Bergabung Pada</p>
                    </div>
                    <div class="col">{{$data->created_at}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer border-top text-end">
        <a class="btn btn-falcon-default btn-sm" href="{{ URL::previous() }}">
            Kembali
        </a>
    </div>
</div>

@endsection
