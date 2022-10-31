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
    <div class="col-xxl-6 col-lg-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="row g-3 mb-3">
                <div class="col-sm-4 col-md-4">
                    <div class="card overflow-hidden" style="min-width: 12rem">
                      <div class="bg-holder bg-card" style="background-image:url({{asset('admin/assets/img/icons/spot-illustrations/corner-1.png')}});"></div>
                      <!--/.bg-holder-->
                      <div class="card-body position-relative">
                        <h6>Info Kendaraan </h6>
                        <div class="display-4 fs-2 mb-1 fw-normal font-sans-serif text-warning">{{Auth::user()->car->name}}</div>
                        <div class="fs-0 mb-0 fw-bolder">{{Auth::user()->car->number_plate}}</div>
                        <div class="mt-3">
                            <div class="d-flex flex-row-reverse">
                                <div class="d-flex">
                                    <a class="btn btn-sm btn-primary me-2 mb-1" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="/member/edit/car/{{Auth::user()->id}}"><span class="fas fa-cog"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>

              <div class="col-sm-4 col-md-4">
                <div class="card overflow-hidden" style="min-width: 12rem">
                    <div class="bg-holder bg-card" style="background-image:url({{asset('admin/assets/img/icons/spot-illustrations/corner-1.png')}});"></div>
                    <!--/.bg-holder-->
                    <div class="card-body position-relative">
                      <h6>Invoice</h6>
                      <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                        data-countup='{"endValue":{{$onDoorsmeer}},"suffix":" Kendaraan"}'>0</div><a
                        class="fw-semi-bold fs--1 text-nowrap" href="#onDoorsmeer">Kelola<span
                          class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
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
                        <a href="" class="btn btn-falcon-success">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body border-top">
                <div class="row g-5">
                    <div class="col-2">
                        <div class="fw-bolder text-end">
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
                            <div class="mt-2" style="width: 250px">
                                {{Auth::user()->address}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
