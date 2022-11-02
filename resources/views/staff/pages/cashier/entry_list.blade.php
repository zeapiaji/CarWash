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
                <h6 class="text-500">Kelola antrian cabang {{Auth::user()->staff->subsidiary->name}}</h6>
              </div>
        </div>
    </div>
    <div class="col-xxl-6 col-lg-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="row g-3 mb-3">
              <div class="col-sm-4 col-md-4">
                <div class="card overflow-hidden" style="min-width: 12rem">
                  <div class="bg-holder bg-card" style="background-image:url({{asset('admin/assets/img/icons/spot-illustrations/corner-5.png')}});"></div>
                  <!--/.bg-holder-->
                  <div class="card-body position-relative">
                    <h6>Doorsmeer</h6>
                    <div class="d-flex display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning" data-countup='{"endValue":{{$doorsmeer->count()}}}'>0</div>
                    <a class="fw-semi-bold fs--1 text-nowrap" href="#entry">Kelola<span
                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="card overflow-hidden" style="min-width: 12rem">
                  <div class="bg-holder bg-card" style="background-image:url({{asset('admin/assets/img/icons/spot-illustrations/corner-1.png')}});"></div>
                  <!--/.bg-holder-->
                  <div class="card-body position-relative">
                    <h6>Dalam Antrian</h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                      data-countup='{"endValue":{{$entry->count()}},"suffix":" Kendaraan"}'>0</div><a
                      class="fw-semi-bold fs--1 text-nowrap" href="#entry">Kelola<span
                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="card overflow-hidden" style="min-width: 12rem">
                    <div class="bg-holder bg-card" style="background-image:url({{asset('admin/assets/img/icons/spot-illustrations/corner-1.png')}});"></div>
                    <!--/.bg-holder-->
                    <div class="card-body position-relative">
                      <h6>Dicuci</h6>
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
    <div class="col-xxl-3 col-md-6">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-header bg-light">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="mb-0">Dalam Antrian</h6>
                    </div>
                </div>
            </div>
            <div class="card-body p-3" id="entry">
                <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                    <div class="table-responsive scrollbar">
                      <table class="table table-sm table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th>Pemilik</th>
                                <th>Paket</th>
                                <th>Plat Nomor</th>
                                <th>Tanggal Antrian</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($entry as $item)
                            <tr>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->plans->name}}</td>
                                <td>{{$item->user->car->number_plate}}</td>
                                <td>{{$item->created_at}}</td>
                                <td class="text-end">
                                    <a class="drop-toggle" id="activeLinkExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="text-primary fas fa-hands-wash"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="activeLinkExample">
                                                @foreach ($emptyDoorsmeer as $item2)
                                                <a class="dropdown-item" href="/entry/wash/{{$item2->id}}/entry/{{$item->user->id}}">{{$item2->name}}</a>
                                                @endforeach
                                              </div>
                                    <a class="btn p-0 ms-2" href="/entry/delete/{{$item->id}}"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><span
                                            class="text-danger fas fa-trash-alt"></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-2 col-md-6">
        <div class="card mb-3">
            <div class="card-header bg-light">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="mb-0">Dicuci</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            @foreach ($doorsmeer as $item)
            <div class="col-6">
                <div class="card overflow-hidden" id="onDoorsmeer">
                    <div class="bg-holder bg-card"
                        style="background-image:url({{asset('admin/assets/img/icons/spot-illustrations/corner-5.png')}});">
                    </div>
                    <!--/.bg-holder-->
                    <div class="card-body position-relative">
                        <h6>{{$item->name ?? 'Doorsmeer Kosong'}}</h6>
                        <div class="display-4 fs-2 mb-1 fw-normal font-sans-serif text-warning">{{$item->user->name ?? 'Kosong'}}</div>
                        <div class="fs-0 mb-0 fw-bolder">{{$item->user->car->number_plate ?? ''}}</div>
                        <p class="fs--2">{{$item->user->car->name ?? ''}} &nbsp; <strong>{{$item->user->car->car_type->name ?? ''}}</strong></p>
                        @if (!$item->user == null)
                        <div class="mt-3">
                            <div class="d-flex flex-row-reverse">
                                <div class="d-flex">
                                    <a class="btn btn-sm btn-primary me-2 mb-1" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Selesai Cuci" href="/entry/wash/payment/{{$item->id}}"><span class="fas fa-check"></span></a>
                                </div>
                                <div class="d-flex">
                                    <a class="btn btn-sm btn-warning me-2 mb-1" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembalikan ke Antrian" href="/entry/wash/cancel/{{$item->id}}"><span class="fas fa-backspace"></span></a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
