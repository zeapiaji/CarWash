@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">Tambah Cabang</h5>
            </div>
        </div>
    </div>
</div>
<form action="/create/subsidiary" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card mb-3" style="min-height: 365px;">
        <div class="card-header">
            <h5 class="mb-0">Data Cabang</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row g-3">
                <div class="col-lg-12">
                    <label class="form-label" for="name">Nama</label>
                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{old('name')}}"/>
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="col-lg-12">
                    <label class="form-label" for="address">Lokasi</label>
                    <textarea class="form-control @error('location') is-invalid @enderror" id="address" name="location" cols="30" rows="3">{{old('location')}}</textarea>
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
                <button class="btn btn-primary" type="submit">Tambah</button>
            </div>
        </div>
    </div>

</form>

@endsection
