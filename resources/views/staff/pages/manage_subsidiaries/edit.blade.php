@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">{{$data->name}}</h5>
            </div>
        </div>
    </div>
</div>
<form action="/update/subsidiary/{{$data->id}}" method="POST">
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
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{$data->name}}" />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="location">Lokasi</label>
                            <textarea class="form-control @error('location') is-invalid @enderror" id="location" name="location" cols="30"
                                rows="3">{{$data->location}}</textarea>
                            @error('location')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
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
                        <p class="fs--1">Cabang dengan nama <strong>{{$data->name}}</strong> akan dihapus.</p>
                        <a class="btn btn-falcon-danger d-block" href="/delete/member/{{$data->id}}">Hapus Cabang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection
