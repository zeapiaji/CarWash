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
<form action="/update/member" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Data Akun Member</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="col-lg-6">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control" id="name" name="name" type="text" value="{{$data->name}}" />
                            <div class="mt-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email"
                                    value="{{$data->email}}" />
                            </div>
                            <div class="mt-3">
                                <label class="form-label" for="phone">Telepon</label>
                                <input class="form-control" id="phone" name="phone" type="number"
                                    value="{{$data->phone}}" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="datepicker">Tanggal Lahir</label>
                            <input class="form-control datetimepicker" id="datepicker" type="text" placeholder="d/m/y"
                                value="{{$data->birth}}" name="birth" data-options='{"disableMobile":true}' />
                            <div class="mt-3">
                                <label class="form-label" for="bootstrap-wizard-gender">Gender</label>
                                <select class="form-select" name="gender" id="bootstrap-wizard-gender">
                                    <option>Pilih gender ...</option>
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
                            <textarea class="form-control" id="address" name="address" cols="30"
                                rows="3">{{$data->address}}</textarea>
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
                        <h5 class="mb-0">Data Kendaraan Member</h5>
                    </div>
                    <div class="card-body bg-light">
                        <label class="form-label" for="car">Mobil</label>
                        <input class="form-control" id="car" name="car" type="text" value="{{$data->car->name}}" />
                        <div class="mt-3">
                            <label class="form-label" for="bootstrap-wizard-gender">Tipe</label>
                            <select class="form-select" name="type" id="bootstrap-wizard-gender">
                                <option>Pilih jenis mobil ...</option>
                                @foreach ($car_type as $item)
                                <option value="{{$item->id}}" name="type"
                                    {{ ($item->id == $data->car->type_id) ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="number_plate">Plat Nomor</label>
                            <input class="form-control" id="number_plate" name="number_plate" type="text"
                                value="{{$data->car->number_plate}}" />
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Area Berbahaya</h5>
                    </div>
                    <div class="card-body bg-light">
                        <p class="fs--1">Akun dengan email {{$data->email}} akun dihapus.</p>
                        <a class="btn btn-falcon-danger d-block" href="/delete/member/{{$data->id}}">Hapus Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
