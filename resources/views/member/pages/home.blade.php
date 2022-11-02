@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')
<div class="row g-3 mb-3">
    <div class="col-xxl-6 col-lg-12">
        <div class="card h-100">
            <div class="bg-holder bg-card"
                style="background-image:url({{asset('admin/assets/img/icons/spot-illustrations/corner-3.png')}});"></div>
            <!--/.bg-holder-->
            <div class="card-header z-index-1">
                <h5 class="text-primary">Selamat datang {{Auth::user()->name}}! </h5>
              </div>
        </div>
    </div>
    <div class="col-xxl-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="">
                        <h5>Informasi Kendaraan</h5>
                    </div>
                    <div class="ms-auto">
                        <a href="/member/edit/car/{{Auth::id()}}" class="btn btn-falcon-success">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body border-top">
                <div class="row g-5 p-2">
                    <div class="col-2">
                        <div class="fw-bolder text-start">
                            <div class="mt-2">
                                Nama
                            </div>
                            <div class="mt-2">
                                Plat Nomor
                            </div>
                            <div class="mt-2">
                                Tipe
                            </div>
                        </div>
                    </div>
                    <div class="ms-5 col">
                        <div class="fw-bolder text-500">
                            <div class="mt-2">
                                {{Auth::user()->car->name}}
                            </div>
                            <div class="mt-2">
                                {{Auth::user()->car->number_plate}}
                            </div>
                            <div class="mt-2">
                                {{Auth::user()->car->car_type->name}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="">
                        <h5>Informasi Akun</h5>
                    </div>
                    <div class="ms-auto">
                        <a href="/member/edit/{{Auth::id()}}" class="btn btn-falcon-success">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body border-top">
                <div class="row g-5 p-2">
                    <div class="col-2">
                        <div class="fw-bolder text-start">
                            <div class="mt-2">
                                Username
                            </div>
                            <div class="mt-2">
                                Email
                            </div>
                            <div class="mt-2">
                                Telepon
                            </div>
                            <div class="mt-2">
                                Gender
                            </div>
                            <div class="mt-2">
                                Kelahiran
                            </div>
                            <div class="mt-2">
                                Alamat
                            </div>
                        </div>
                    </div>
                    <div class="ms-5 col">
                        <div class="fw-bolder text-500">
                            <div class="mt-2">
                                {{Auth::user()->name}}
                            </div>
                            <div class="mt-2">
                                {{Auth::user()->email}}
                            </div>
                            <div class="mt-2">
                                {{Auth::user()->phone}}
                            </div>
                            <div class="mt-2">
                                {{Auth::user()->gender->name}}
                            </div>
                            <div class="mt-2">
                                {{Auth::user()->birth}}
                            </div>
                            <div class="mt-2" style="width: 250px">
                                {{Auth::user()->address}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Area Berbahaya</h5>
            </div>
            <div class="card-body bg-light">
                <p class="fs--1">Akun anda akan dihapus.</p>
                <a class="btn btn-falcon-danger d-block" href="/member/delete/">Hapus Akun</a>
            </div>
        </div>
    </div>
</div>
@endsection
