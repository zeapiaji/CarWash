@extends('staff.admin.app')
@section('content')

@include('staff.admin.partials.menu')

<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="mb-0">Profile Settings</h5>
        </div>
        <div class="card-body bg-light">
                <form action="" method="POST" class="row g-3">
                    @csrf
                    <div class="col-lg-6">
                        <label class="form-label" for="name">Nama</label>
                        <input class="form-control" id="name" name="name" type="text" />
                        <div class="mt-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt">
                            <label class="form-label" for="phone">Telepon</label>
                            <input class="form-control" id="phone" name="phone" type="number" />
                        </div>
                        <div class="mt-5">
                            <select class="form-select" name="gender" aria-label="Default select example">
                                @foreach ($gender as $q)
                                <option value="{{ $q->id }}" name="gender">{{ $q->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="address">Alamat</label>
                        <textarea name="address" id="address" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-left">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </form>
            </div>
            @endsection
