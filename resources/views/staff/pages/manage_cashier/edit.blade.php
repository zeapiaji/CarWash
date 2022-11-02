@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="row g-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="col d-none d-sm-block">
                    <span class="fas fa-user" style="color: #344050; font-size:20px;"></span>
                    <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Edit Kasir {{$data->name}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Data Akun</h5>
            </div>
            <div class="card-body bg-light">
                <form action="/update/cashier/{{ $data->id }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-lg-6">
                        <label class="form-label" for="name">Nama</label>
                        <input class="form-control @error('name')is-invalid

                        @enderror" id="name" name="name" type="text" value="{{$data->name}}" />

                        <div class="mt-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control @error('email')is-invalid

                            @enderror" id="email" name="email" type="email" value="{{$data->email}}" />

                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="address">Alamat</label>
                        <textarea class="form-control @error('address')is-invalid

                        @enderror" id="address" name="address" cols="30"
                            rows="3">{{$data->address}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt">
                            <label class="form-label" for="phone">Telepon</label>
                            <input class="form-control @error('phone')is-invalid

                            @enderror" id="phone" name="phone" type="number"
                                value="{{$data->phone}}" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="gender">Jenis kelamin</label>
                            <select class="form-select @error('gender')is-invalid

                            @enderror" name="gender" aria-label="Default select example">
                                @foreach ($gender as $q)
                                <option value="{{ $q->id }}" name="gender">{{ $q->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                           <label class="form-label" for="bootstrap-wizard-gender">Jabatan</label>
                                <select class="form-select @error('subsidiary')is-invalid

                                @enderror" name="role" id="bootstrap-wizard-gender">
                                    {{--  <option>Pilih level ...</option>  --}}
                                    {{-- @dd($data->model_has_role) --}}
                                    @foreach ($role as $item)
                                    <option value="{{$item->name}}" name="role"
                                        {{ ($item->id == $selectedRole) ? 'selected' : '' }}>{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="datepicker">Tanggal lahir</label>
                            <input class="form-control datetimepicker @error('birth')is-invalid

                            @enderror" id="datepicker" name="birth" type="text"
                                placeholder="d/m/y" data-options='{"disableMobile":true}' value="{{ $data ->birth }}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                        <button class="btn btn-primary" type="submit">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-lg-4 ps-lg-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Area Berbahaya</h5>
                </div>
                <div class="card-body bg-light">
                    <p class="fs--1">Akun dengan email {{$data->email}} akan dihapus.</p>
                    <a class="btn btn-falcon-danger d-block" href="/delete/cashier/{{$data->id}}">Hapus Kasir</a>
                </div>
            </div>
    </div>
</div>

</div>


@endsection
