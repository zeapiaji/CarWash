@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<form action="/create/pricing-1" method="POST">
    @csrf
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Tambah Fitur di Paket 1</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row g-3">
                <div class="col-lg-12">
                    <label class="form-label" for="price">Harga Paket</label>
                    <div class="input-group"><span class="input-group-text">Rp</span><input class="form-control" type="number" name="price"/></div>
                </div>
                <div class="col-12">
                    <label class="form-label" for="name">Fitur 1</label>
                    <input class="form-control" id="name" name="feature[]" type="text" />
                    <label class="form-label" for="name">Fitur 2</label>
                    <input class="form-control" id="name" name="feature[]" type="text" />
                    <label class="form-label" for="name">Fitur 3</label>
                    <input class="form-control" id="name" name="feature[]" type="text" />
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="col-12 d-flex justify-content-end">
                <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                <button class="btn btn-primary" type="submit">Tambah Fitur</button>
            </div>
        </div>
    </div>
</form>

@endsection
