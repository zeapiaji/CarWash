@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0"></h5>
            </div>
            <div class="card-body bg-light">
                <form action="/update/cashier/{{ $data->id }}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-lg-6">
                        <label class="form-label" for="name">Nama</label>
                        <input class="form-control" id="name" name="name" type="text" value="{{$data->name}}" />
                        <div class="mt-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" value="{{$data->email}}" />
                        </div>
                        {{--  <div class="mt-3">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group">
                            <input class="form-control" id="pass" name="password" type="password" value="{{$data->password}}" />
                                <span id="mybutton" onclick="change()" class="input-group-text">

                                <!-- icon mata bawaan bootstrap  -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </span>
                      </div>
                        </div>  --}}
                        <div class="mt-3">
                            <label class="form-label" for="address">Alamat</label>
                        <textarea class="form-control" id="address" name="address" cols="30"
                            rows="3">{{$data->address}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt">
                            <label class="form-label" for="phone">Telepon</label>
                            <input class="form-control" id="phone" name="phone" type="number"
                                value="{{$data->phone}}" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="gender">Jenis kelamin</label>
                            <select class="form-select" name="gender" aria-label="Default select example">
                                @foreach ($gender as $q)
                                <option value="{{ $q->id }}" name="gender">{{ $q->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                           <label class="form-label" for="bootstrap-wizard-gender">Jabatan</label>
                                <select class="form-select" name="role" id="bootstrap-wizard-gender">
                                    {{--  <option>Pilih level ...</option>  --}}
                                    {{-- @dd($data->model_has_role) --}}
                                    @foreach ($role as $item)
                                    <option value="{{$item->name}}" name="role"
                                        {{ ($item->id == $selectedRole) ? 'selected' : '' }}>{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="datepicker">Tanggal lahir</label>
                            <input class="form-control datetimepicker" id="datepicker" name="birth" type="text"
                                placeholder="d/m/y" data-options='{"disableMobile":true}' value="{{ $data ->birth }}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
      
    </div>
    <div class="col-lg-4 ps-lg-2">
        
            
           
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Area Berbahaya</h5>
                </div>
                <div class="card-body bg-light">
                    <p class="fs--1">Akun admin dengan email {{$data->email}} akan dihapus.</p>
                    <a class="btn btn-falcon-danger d-block" href="/delete/admin/{{$data->id}}">Hapus Admin</a>
                </div>
            </div>
    </div>
</div>

</div>


@endsection
