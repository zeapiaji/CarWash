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
<form action="/member/update" method="POST">
    @csrf
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Data Akun Member</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row g-3">
                <input type="hidden" name="id" value="{{Auth::id()}}">
                <div class="col-lg-6">
                    <label class="form-label" for="name">Nama</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{Auth::user()->name}}" />
                    <div class="mt-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email"
                            value="{{auth::user()->email}}" />
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="phone">Telepon</label>
                        <input class="form-control" id="phone" name="phone" type="number"
                            value="{{auth::user()->phone}}" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt">
                        <label class="form-label" for="phone">Telepon</label>
                        <input class="form-control" id="phone" name="phone" type="number"
                            value="{{auth::user()->phone}}" />
                    </div>
                    <div class="mt-3">
                    <label class="form-label" for="datepicker">Tanggal Lahir</label>
                    <input class="form-control datetimepicker" id="datepicker" type="text" placeholder="d/m/y"
                        value="{{auth::user()->birth}}" name="birth" data-options='{"disableMobile":true}' />
                        </div>
                        <div class="mt-3">
                        <label class="form-label" for="bootstrap-wizard-gender">Jenis kelamin</label>
                        <select class="form-select" name="gender" id="bootstrap-wizard-gender">
                            @foreach ($gender as $item)
                            <option value="{{$item->id}}" name="gender"
                                {{ ($item->id == auth::user()->gender_id) ? 'selected' : ''}}>{{$item->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label class="form-label" for="address">Alamat</label>
                    <textarea class="form-control" id="address" name="address" cols="30"
                        rows="2">{{auth::user()->address}}</textarea>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="card-footer">
                <div class="col-12 d-flex justify-content-end">
                    <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                    <button class="btn btn-primary" type="submit">Ubah</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
