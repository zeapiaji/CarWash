@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">{{$data->subsidiary->name}}</h5>
            </div>
        </div>
    </div>
</div>
<form action="/update/subsidiary/{{$data->subsidiary->id}}" method="POST">
    @csrf
    <div class="row g-3 mb-3">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3" style="min-height: 365px;">
                <div class="card-header">
                    <h5 class="mb-0">Data Cabang</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control" id="name" name="name" type="text" value="{{$data->subsidiary->name}}" />
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="address">Lokasi</label>
                            <textarea class="form-control" id="address" name="location" cols="30"
                                rows="3">{{$data->subsidiary->location}}</textarea>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="admin">Admin</label>
                            <select class="form-select js-choice" id="admin" name="admin" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option>Pilih admin ...</option>
                                @foreach ($staff as $item)
                                <option value="{{$item->id}}" name="admin"
                                    {{ ($item->user_id == $selectedAdmin->user_id) ? 'selected' : ''}}>
                                        {{$item->user->name}}
                                </option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                        <button class="btn btn-primary" type="submit">Ubah</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3 overflow-hidden">
                    <div class="card-header">
                        <h5 class="mb-0">Info Staff</h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row">
                            <div class="col-6 border-end">
                                Admin
                            </div>
                            <div class="col-auto">
                                <a href="/detail/admin/{{$selectedAdmin->user_id}}">
                                    <p class="">{{$selectedAdmin->user->name}}</p>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 border-end">
                                Total Staff
                            </div>
                            <div class="col-auto">
                                <p>{{$staff->count()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="">Area Berbahaya</h5>
                    </div>
                    <div class="card-body bg-light mb-1">
                        <p class="fs--1">Cabang dengan nama <strong>{{$data->subsidiary->name}}</strong> akan dihapus.</p>
                        <a class="btn btn-falcon-danger d-block" href="/delete/member/{{$data->subsidiary->id}}">Hapus Cabang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection
