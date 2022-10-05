@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')
<div class="card mb-3">
    <div class="card-body">
        <div class="col-12 text-center mb-4">
            <div class="fs-1">Manage Pricing</div>
            <h3 class="fs-2 fs-md-3">
                Form Pricing
            </h3>
        </div>

        <form action="/pricing" method="POST">

          {{ csrf_field() }}
          <div class="form-group form-floating mb-3">
            <input class="form-control" id="paket" type="name" name="name" placeholder="Paket" />
            <label for="name">Paket</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="harga" type="harga" name="harga" placeholder="Rp xxx" />
            <label for="harga">Harga Paket</label>
              @if($errors->has('harga'))
              <div class="text-danger">
                  {{ $errors->first('harga')}}
              </div>
              @endif
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="fitur" type="fitur" name="fitur" placeholder="Fitur Paket" />
            <label for="fitur">Fitur Paket</label>
              @if($errors->has('fitur'))
              <div class="text-danger">
                  {{ $errors->first('fitur')}}
              </div>
              @endif
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="type_id" type="type_id" name="type_id" placeholder="Type_id/Mobil" />
            <label for="type_id">Type_id/Mobil</label>
              @if($errors->has('type_id'))
              <div class="text-danger">
                  {{ $errors->first('type_id')}}
              </div>
              @endif
          </div><br>
          <button class="btn btn-primary" type="submit">Simpan</button>
        </form>    
    </div>
</div>
@endsection