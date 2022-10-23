@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')


<form action="/doorsmeer/update/{{$data->id}}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-lg-6 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Data Doorsmeer</h5>
                </div>
                <div class="card-body bg-light">
                    <label class="form-label" for="name">Nama</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{$data->name}}" />
                <div class="card-footer">
                    <div class="col-12 d-flex justify-content-end">
                        <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                        <button class="btn btn-primary" type="submit">Ubah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
