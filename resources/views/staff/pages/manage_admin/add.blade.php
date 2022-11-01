@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<form action="/create/admin" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    {{-- NAME, EMAIL, PHONE, ADDRESS, BIRTH, GENDER --}}
                    <h5 class="mb-0">Tambah Akun Admin</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control
                                @error('name')is-invalid

                                @enderror" id="name" name="name" type="text" value="{{ old('name') }}" />

                            @error('name')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                            @enderror

                            <div class="mt-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control
                                @error('email')is-invalid

                                @enderror" id="email" name="email" type="email" value="{{ old('email') }}" />

                                @error('email')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                                @enderror

                            </div>

                            <div class="mt-3">
                                <label class="form-label" for="phone">Telepon</label>
                                <input class="form-control
                                    @error('phone')is-invalid

                                    @enderror" id="phone" name="phone" type="number" value="{{ old('phone') }}" />

                                @error('phone')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                                @enderror

                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="">
                                <label class="form-label" for="datepicker">Tanggal Lahir</label>
                                <input class="form-control datetimepicker
                                @error('birth')is-invalid

                                @enderror" id="datepicker" type="text" placeholder="d/m/y" name="birth"
                                    data-options='{"disableMobile":true}' value="{{ old('birth') }}" />

                                @error('birth')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                                @enderror

                            </div>
                            <div class="mt-3">
                                <label class="form-label" for="bootstrap-wizard-gender">Gender</label>
                                <select class="form-select
                                @error('gender')is-invalid

                                @enderror" name="gender" id="bootstrap-wizard-gender">

                                    <option value="">Pilih gender ...</option>
                                    @foreach ($gender as $item)
                                    <option value="{{$item->id}}" name="gender"
                                        {{ (old('gender') == $item->id) ? 'selected' : ''}}>{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>

                                @error('gender')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="address">Alamat</label>
                            <textarea class="form-control
                            @error('address')is-invalid

                            @enderror" id="address" name="address" cols="30" rows="3">{{ old('address') }}</textarea>

                            @error('address')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                            @enderror

                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <a class="btn btn-secondary mx-3" href="{{ URL::previous()}}">Batal</a>
                            <button class="btn btn-primary" type="submit">Buat Akun</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SUBSIDIARY & PASSWORD --}}
        <div class="col-lg-4 ps-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Cabang</h5>
                </div>
                <div class="card-body bg-light">
                    <p class="fs--1">Masukan calon admin ke cabang yang akan dipilih.</p>
                    <select class="form-select js-choice
                    @error('subsidiary')is-invalid

                    @enderror" id="subsidiary" name="subsidiary" data-options='{"removeItemButton":true,"placeholder":true}'>

                    {{--  <option>Pilih cabang ...</option>
                    @foreach ($subsidiaries as $item)
                    <option value="{{$item->id}}" name="subsidiary">{{$item->name}}
                        </option> --}}


                        <option value="">Pilih cabang ...</option>
                        @foreach ($subsidiaries as $item)

                        <option value="{{$item->id}}" name="subsidiary"
                            {{(old('subsidiary') == $item -> id) ? 'selected' : ''}} > {{ $item->name }}
                        </option>

                        @endforeach
                    </select>

                    @error('subsidiary')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Password Akun</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="mb-3"><label class="form-label" for="new-password">Password*</label><input class="form-control

                    @error('password')is-invalid

                    @enderror" id="new-password" type="password" name="password"></div>

                    @error('password')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                    <div class="mb-3"><label class="form-label" for="confirm-password">Konfirmasi
                            Password*</label><input class="form-control
                        @error('password')is-invalid

                        @enderror" id="confirm-password" type="password" name="password_confirmation"></div>

                    @error('password')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>
            </div>
        </div>
    </div>
</form>

@endsection
