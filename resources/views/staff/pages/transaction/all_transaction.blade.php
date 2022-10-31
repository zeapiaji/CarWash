@extends('staff.layouts.app')
@section('content')
@include('staff.partials.menu')
<div class="card h-100">
    <div class="card-header">
        <h6 class="mb-0">Riwayat Transaksi</h6>
    </div>
    <div class="card-body scrollbar recent-activity-body-height ps-2">
        <div class="row g-3 p-3">
            @foreach ($subsidiary as $item)
            <div class="col-3">
                <div class="card overflow-hidden" style="min-width: 12rem">
                    <div class="bg-holder bg-card"
                      style="background-image:url({{asset('admin/assets/img/icons/spot-illustrations/corner-5.png')}});"></div>
                    <!--/.bg-holder-->
                    <div class="card-body position-relative">
                      <h6>{{$item->name}}</h6>
                      <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning">{{$item->name}}</div><a
                        class="fw-semi-bold fs--1 text-nowrap" href="/transaction/subsidiary/{{$item->id}}">Lihat Transaksi<span
                          class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
