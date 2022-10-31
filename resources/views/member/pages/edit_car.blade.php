@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">{{auth::user()->name}} (<a href="mailto:tony@gmail.com">{{auth::user()->email}}</a>)</h5>
            </div>
        </div>
    </div>
</div>
<form action="/member/update/car" method="POST">
    @csrf
    <div class="card mb-3 overflow-hidden">
        <div class="card-header">
            <h5 class="mb-0">Data Kendaraan Member</h5>
        </div>
        <div class="card-body bg-light">
            <label class="form-label" for="car">Mobil</label>
            <input class="form-control" id="car" name="car" type="text" value="{{auth::user()->car->name}}"/>
            <div class="mt-3">
                <label class="form-label" for="bootstrap-wizard-gender">Tipe</label>
                <select class="form-select" name="type" id="bootstrap-wizard-gender">
                    <option>Pilih jenis mobil ...</option>
                    @foreach ($carType as $item)
                    <option value="{{$item->id}}" name="type"
                        {{ ($item->id == auth::user()->car->type_id) ? 'selected' : ''}}>{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <label class="form-label" for="number_plate">Plat Nomor</label>
                <input class="form-control" id="number_plate" name="number_plate" type="text"
                    value="{{auth::user()->car->number_plate}}" />
            </div>
        </div>
        <div class="card-footer">
            <div class="col-12 d-flex justify-content-end">
                <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                <button class="btn btn-primary" type="submit">Ubah</button>
            </div>
        </div>
    </div>
</form>

@endsection
