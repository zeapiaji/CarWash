@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">{{$data->user->name}} (<a href="mailto:tony@gmail.com">{{$data->user->email}}</a>)</h5>
            </div>
        </div>
    </div>
</div>
<form action="/update/admin/{{$data->user->id}}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Data Akun Admin</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control" id="name" name="name" type="text" value="{{$data->user->name}}" />
                            <div class="mt-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email"
                                    value="{{$data->user->email}}" />
                            </div>
                            <div class="mt-3">
                                <label class="form-label" for="phone">Telepon</label>
                                <input class="form-control" id="phone" name="phone" type="number"
                                    value="{{$data->user->phone}}" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="bootstrap-wizard-gender">Jabatan</label>
                                <select class="form-select" name="role" id="bootstrap-wizard-gender">
                                    <option>Pilih level ...</option>
                                    {{-- @dd($data->model_has_role) --}}
                                    @foreach ($role as $item)
                                    <option value="{{$item->name}}" name="role"
                                        {{ ($item->id == $selectedRole) ? 'selected' : ''}}>{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                            <div class="mt-3">
                                <label class="form-label" for="datepicker">Tanggal Lahir</label>
                                <input class="form-control datetimepicker" id="datepicker" type="text" placeholder="d/m/y"
                                    value="{{$data->user->birth}}" name="birth" data-options='{"disableMobile":true}' />
                            </div>
                            <div class="mt-3">
                                <label class="form-label" for="bootstrap-wizard-gender">Gender</label>
                                <select class="form-select" name="gender" id="bootstrap-wizard-gender">
                                    <option>Pilih gender ...</option>
                                    @foreach ($gender as $item)
                                    <option value="{{$item->id}}" name="gender"
                                        {{ ($item->id == $data->user->gender_id) ? 'selected' : ''}}>{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="address">Alamat</label>
                            <textarea class="form-control" id="address" name="address" cols="30"
                                rows="3">{{$data->user->address}}</textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                            <button class="btn btn-primary" type="submit">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3 overflow-hidden">
                    <div class="card-header">
                        <h5 class="mb-0">Admin Cabang <strong>{{$data->subsidiary->name}}</strong></h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row">
                            <div class="col-6 border-end">
                                <p>Jumlah Pegawai</p>
                            </div>
                            <div class="col-auto">
                                <p>{{$totalEmployee}}</p>
                            </div>
                            <div class="col-6 border-end">
                                <p>Lokasi</p>
                            </div>
                            <div class="col-auto">
                                <p>{{$data->subsidiary->location}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Area Berbahaya</h5>
                    </div>
                    <div class="card-body bg-light">
                        <p class="fs--1">Akun admin dengan email {{$data->user->email}} akan dihapus.</p>
                        <a class="btn btn-falcon-danger d-block" href="/delete/admin/{{$data->user->id}}">Hapus Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
