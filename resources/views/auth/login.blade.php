@extends('auth.layouts.app')

@section('auth')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
            <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape"
                    src="{{asset('admin/assets/img/icons/spot-illustrations/bg-shape.png')}}" alt="" width="250"><img
                    class="bg-auth-circle-shape-2"
                    src="{{asset('admin/assets/img/icons/spot-illustrations/shape-1.png')}}" alt="" width="150">
                <div class="card overflow-hidden z-index-1">
                    <div class="card-body p-0">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 text-center bg-card-gradient">
                                <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                    <div class="bg-holder bg-auth-card-shape"
                                        style="background-image:url('{{asset('admin/assets/img/icons/spot-illustrations/half-circle.png')}}">
                                    </div>
                                    <!--/.bg-holder-->
                                    <div class="z-index-1 position-relative"><a
                                            class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder"
                                            href="/">Car Wash</a>
                                        <p class="opacity-75 text-white">With the power of Falcon, you can now focus
                                            only on functionaries for your digital products, while leaving the UI design
                                            on us!</p>
                                    </div>
                                </div>
                                <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                    <p class="text-white">Tidak punya akun?<br><a
                                            class="text-decoration-underline link-light" href="/register">Mulai sekarang!</a></p>
                                    <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read our <a
                                            class="text-decoration-underline text-white" href="#!">terms</a> and <a
                                            class="text-decoration-underline text-white" href="#!">conditions </a></p>
                                </div>
                            </div>
                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <div class="row flex-between-center">
                                        <div class="text-center">
                                            <h3>Login</h3>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email
                                                address
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
                                                type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Ingat saya') }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-auto">@if (Route::has('password.request'))
                                                <a class="fs--1" href="{{ route('password.request') }}">
                                                    {{ __('Lupa Password?') }}
                                                </a>
                                                @endif</div>
                                        </div>
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3"
                                                type="submit" name="submit">Masuk</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
