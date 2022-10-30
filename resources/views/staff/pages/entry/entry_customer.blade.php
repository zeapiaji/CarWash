@extends('staff.pages.entry.layouts.app')
@section('content')

<div class="row min-vh-100 flex-center g-0">
    <div class="col-lg-5 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape"
            src="{{asset('admin/assets/img/icons/spot-illustrations/bg-shape.png')}}" alt="" width="250"><img
            class="bg-auth-circle-shape-2"
            src="{{asset('admin/assets/img/icons/spot-illustrations/shape-1.png')}}" alt="" width="150">
        <div class="card overflow-hidden z-index-1">
            <div class="card-body p-0">
                <div class="d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                        <div class="row flex-between-center">
                            <div class="col-auto">
                                <h3>Mulai Antri</h3>
                            </div>
                        </div>
                        <form method="POST" action="{{route('entry.customer_post')}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="email">Email
                                </label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between"><label class="form-label"
                                        for="password">Password</label></div><input id="password"
                                    type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="plan">Paket</label>
                                <select class="form-select" id="plan" name="plan">
                                    <option value="">Pilih Paket ...</option>
                                    @foreach ($plans as $item)
                                    <option value="{{$item->id}}" name="plan">{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="subsidiary">Cabang</label>
                                <select class="form-select" id="subsidiary" name="subsidiary">
                                    <option value="">Pilih cabang ...</option>
                                    @foreach ($subsidiaries as $item)
                                    <option value="{{$item->id}}" name="subsidiary">{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                                <p class="fs--2">*antri di cabang yang dipilih.</p>
                            </div>
                            <div class="row flex-between-center">
                                <div class="col-auto">
                                </div>
                                <div class="col-auto">
                                    <a class="fs--1" href="{{ route('register') }}">
                                        {{ __('Tidak Punya Akun?') }}
                                    </a>
                                </div>
                            </div>
                            <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                    name="submit">Log in</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
