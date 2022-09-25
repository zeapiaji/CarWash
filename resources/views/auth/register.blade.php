@extends('auth.layouts.app')

@section('auth')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

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
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
<main class="main" id="top">
    <div class="container-fluid">
        <div class="row justify-content-center pt-4">
            <div class="col-sm-10 col-lg-7 col-xxl-5"><a class="d-flex flex-center mb-4"
                    href="/"><img class="me-2"
                        src="{{asset('admin/assets/img/icons/spot-illustrations/falcon.png')}}" alt="" width="45" /><span
                        class="font-sans-serif fw-bolder fs-4 d-inline-block">falcon</span></a>
                <div class="card theme-wizard" id="wizard">
                    <div class="card-header bg-light pt-1 pb-1">
                        <ul class="nav justify-content-between nav-wizard">
                            <li class="nav-item"><a class="nav-link active fw-semi-bold"
                                    href="#bootstrap-wizard-tab1" data-bs-toggle="tab"
                                    data-wizard-step="data-wizard-step"><span
                                        class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                class="fas fa-lock"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Account</span></a></li>
                            <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab2"
                                    data-bs-toggle="tab" data-wizard-step="data-wizard-step"><span
                                        class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                class="fas fa-user"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Personal</span></a></li>
                            <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab4"
                                    data-bs-toggle="tab" data-wizard-step="data-wizard-step"><span
                                        class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                class="fas fa-thumbs-up"></span></span></span><span
                                        class="d-none d-md-block mt-1 fs--1">Selesai</span></a></li>
                        </ul>
                    </div>
                    <div class="card-body py-4" id="wizard-controller">
                        <div class="tab-content">
                            <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel"
                                aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">
                                <form class="needs-validation" novalidate="novalidate">
                                    <div class="mb-3">
                                        <label class="form-label"
                                            for="bootstrap-wizard-wizard-name">Nama
                                        </label>
                                        <input class="form-control" type="text" name="name"
                                            placeholder="Nama lengkap" id="bootstrap-wizard-wizard-name" required="require"/>
                                        <div class="invalid-feedback">Masukan nama!</div>
                                    </div>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-wizard-email">Email*</label><input
                                            class="form-control" type="email" name="email"
                                            placeholder="Alamat email"
                                            pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$"
                                            required="required" id="bootstrap-wizard-wizard-email"
                                            data-wizard-validate-email="true" />
                                        <div class="invalid-feedback">Masukan email!</div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-wizard-password">Password*</label><input
                                                    class="form-control" type="password" name="password"
                                                    placeholder="Password" required="required"
                                                    id="bootstrap-wizard-wizard-password"
                                                    data-wizard-validate-password="true" />
                                                <div class="invalid-feedback">Masukan password!</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3"><label class="form-label"
                                                    for="bootstrap-wizard-wizard-confirm-password">Confirm
                                                    Password*</label><input class="form-control" type="password"
                                                    name="confirmPassword" placeholder="Confirm Password"
                                                    required="required"
                                                    id="bootstrap-wizard-wizard-confirm-password"
                                                    data-wizard-validate-confirm-password="true" />
                                                <div class="invalid-feedback">Password tidak sama</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            name="terms" required="required" checked="checked"
                                            id="bootstrap-wizard-wizard-checkbox" /><label
                                            class="form-check-label" for="bootstrap-wizard-wizard-checkbox">I
                                            accept the <a href="#!">terms </a>and <a href="#!">privacy
                                                policy</a></label></div>
                                </form>
                            </div>
                            <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                aria-labelledby="bootstrap-wizard-tab2" id="bootstrap-wizard-tab2">
                                <form>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-gender">Jenis Kelamin</label><select
                                            class="form-select" name="gender" id="bootstrap-wizard-gender">
                                            <option value="">Pilih jenis kelaminmu ...</option>
                                            <option value="Male">Laki-laki</option>
                                            <option value="Female">Perempuan</option>
                                        </select></div>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-wizard-phone">Telepon</label><input
                                            class="form-control" type="text" name="phone" placeholder="Telepon"
                                            id="bootstrap-wizard-wizard-phone" /></div>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-wizard-datepicker">Tanggal Lahir</label><input
                                            class="form-control datetimepicker" type="text" placeholder="d/m/y"
                                            data-options='{"dateFormat":"d/m/y","disableMobile":true}'
                                            id="bootstrap-wizard-wizard-datepicker" /></div>
                                    <div class="mb-3"><label class="form-label"
                                            for="bootstrap-wizard-wizard-address">Alamat</label><textarea
                                            class="form-control" rows="3"
                                            id="bootstrap-wizard-wizard-address"></textarea></div>
                                </form>
                            </div>
                            <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel"
                                aria-labelledby="bootstrap-wizard-tab4" id="bootstrap-wizard-tab4">
                                <div class="wizard-lottie-wrapper">
                                    <div class="lottie wizard-lottie mx-auto my-3"
                                        data-options='{"path":"../../assets/img/animated-icons/celebration.json"}'>
                                    </div>
                                </div>
                                <h4 class="mb-1">Your account is all set!</h4>
                                <p>Now you can access to your account</p><a class="btn btn-primary px-5 my-3"
                                    href="wizard.html">Start Over</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="px-sm-3 px-md-5">
                            <ul class="pager wizard list-inline mb-0">
                                <li class="previous"><button class="btn btn-link ps-0" type="button"><span
                                            class="fas fa-chevron-left me-2"
                                            data-fa-transform="shrink-3"></span>Prev</button></li>
                                <li class="next"><button class="btn btn-primary px-5 px-sm-6"
                                        type="submit">Next<span class="fas fa-chevron-right ms-2"
                                            data-fa-transform="shrink-3"> </span></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px">
                    <div class="modal-content position-relative p-5">
                        <div class="d-flex align-items-center">
                            <div class="lottie me-3"
                                data-options='{"path":"../../assets/img/animated-icons/warning-light.json"}'>
                            </div>
                            <div class="flex-1"><button
                                    class="btn btn-link text-danger position-absolute top-0 end-0 mt-2 me-2"
                                    data-bs-dismiss="modal"><span class="fas fa-times"></span></button>
                                <p class="mb-0">You don't have access to the link. Please try again.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
