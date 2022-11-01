@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<form action="/pricing/update/price/{{$price->id}}" method="POST">
    @csrf
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Harga Fitur</h5>
        </div>
        <div class="card-body bg-light">
                <div class="col-12">
                    <label class="form-label" for="name">Harga</label>
                    <input class="form-control" id="name" name="price" type="text" value="{{$price->price}}" placeholder="Rp"/>
                </div>
        </div>
        <div class="card-footer">
            <div class="col-12 d-flex justify-content-end">
                <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                <button class="btn btn-primary" type="submit">Ubah Fitur</button>
            </div>
        </div>
    </div>
</form>

@endsection
