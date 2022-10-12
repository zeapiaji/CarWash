@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')
<div class="card mb-3">
    <div class="card-body">
        <div class="col-12 text-center mb-4">
            <div class="fs-1">Kelola Pencucian</div>
            <h3 class="fs-2 fs-md-3">
                Carwash
            </h3>
        </div>

        <form action="#" method="POST">

          {{ csrf_field() }}
          <div class="form-group form-floating mb-3">
            <input class="form-control" id="paket" type="name" name="name" placeholder="Paket" />
            <label for="name">Paket</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="harga" type="harga" name="harga" placeholder="Rp xxx" />
            <label for="harga">Fitur</label>
          <br>
          <button class="btn btn-primary" type="submit">Simpan</button>
        </form>    
    </div>
</div><br>
@endsection