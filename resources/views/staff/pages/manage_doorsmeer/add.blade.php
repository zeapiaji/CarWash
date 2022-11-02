@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')


<form action="/doorsmeer/store" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Tambah Doorsmeer di Cabang {{Auth::user()->staff->subsidiary->name}}</h5>
                </div>
                <div class="card-body bg-light">
                    <label class="form-label" for="name">Nama Doorsmeer</label>
                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text"/>
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <p class="text-500 fs--1 mt-1 mb-1">*doorsmeer digunakan sebagai tempat cuci kendaraan.</p>
                <div class="card-footer">
                    <div class="col-12 d-flex justify-content-end">
                        <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                        <button class="btn btn-primary" type="submit">Tambahkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
