@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')
<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">{{$data->plans_id}} (<a href="mailto:tony@gmail.com">{{$data->feature}}</a>)</h5>
            </div>
        </div>
    </div>
</div>

{{-- Form Edit Plans --}}
<form action="/plans/update/{{ $data->id }}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Data Pencucian</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="feature">Fitur</label>
                            <input class="form-control" id="feature" name="feature" type="text" value="{{$data->feature}}" />
                        </div>
                        <div class="col-lg-6">
                                <label class="form-label" for="bootstrap-wizard-paket">Paket</label>
                                <select class="form-select" name="paket" id="bootstrap-wizard-paket">
                                    <option>Pilih paket ...</option>
                                    @foreach ($plans as $item)
                                    <option value="{{$item->id}}" name="paket"
                                        {{ ($item->id == $data->type_id) ? 'selected' : ''}}>{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                            <button class="btn btn-primary" type="submit">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection