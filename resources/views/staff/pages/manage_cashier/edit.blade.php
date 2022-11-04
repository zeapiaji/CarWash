@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">{{$data->name}} (<a href="mailto:tony@gmail.com">{{$data->email}}</a>)</h5>
            </div>
        </div>
    </div>
</div>
<form action="/update/cashier/{{$data->id}}" method="POST">
    @csrf
    <input type="hidden" name="password" value="{{$data->password}}">
    <div class="row g-3">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Data Akun Kasir</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control @error('name')is-invalid @enderror" id="name" name="name"
                                type="text" value="{{ $data->name }}" />
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="mt-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control @error('email')is-invalid @enderror" id="email" name="email"
                                    type="email" value="{{$data->email}}" />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label class="form-label" for="phone">Telepon</label>
                                <input class="form-control @error('phone')is-invalid @enderror" id="phone" name="phone"
                                    type="number" value="{{$data->phone}}" />
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="datepicker">Tanggal Lahir</label>
                            <input class="form-control datetimepicker @error('birth')is-invalid @enderror"
                                id="datepicker" type="text" placeholder="d/m/y" value="{{$data->birth}}" name="birth"
                                data-options='{"disableMobile":true}' />
                            @error('birth')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="mt-3">
                                <label class="form-label" for="bootstrap-wizard-gender">Gender</label>
                                <select class="form-select @error('gender_id')is-invalid

                                @enderror" name="gender" id="bootstrap-wizard-gender">
                                    <option value="">Pilih gender ...</option>
                                    @foreach ($gender as $item)
                                    <option value="{{$item->id}}" name="gender"
                                        {{ ($item->id == $data->gender_id) ? 'selected' : ''}}>{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="address">Alamat</label>
                            <textarea class="form-control @error('address')is-invalid @enderror" id="address"
                                name="address" cols="30" x rows="3">{{$data->address}}</textarea>
                            @error('address')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
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
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <h5 class="mb-0">Kasir Cabang <strong>{{$data->staff->subsidiary->name}}</strong></h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="bootstrap-wizard-gender">Jabatan</label>
                            <select class="form-select @error('role')is-invalid @enderror" name="role"
                                id="bootstrap-wizard-gender">
                                <option value="">Pilih jabatan ...</option>
                                @foreach ($role as $item)
                                <option value="{{$item->name}}" name="role"
                                    {{ ($item->id == $selectedRole) ? 'selected' : ''}}>{{$item->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="bootstrap-wizard-gender">Ganti Cabang</label>
                            <select class="form-select @error('subsidiary')is-invalid @enderror" name="subsidiary"
                                id="bootstrap-wizard-gender">
                                <option value="">Pilih Cabang ...</option>
                                @foreach ($subsidiary as $item)
                                <option value="{{$item->id}}" name="role"
                                    {{ ($item->id == $data->staff->subsidiary_id) ? 'selected' : ''}}>{{$item->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Area Berbahaya</h5>
                </div>
                <div class="card-body bg-light">
                    <p class="fs--1">Akun Kasir dengan email {{$data->email}} akan dihapus.</p>
                    <a class="btn btn-falcon-danger d-block" href="/delete/cashier/{{$data->id}}">Hapus Kasir</a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
