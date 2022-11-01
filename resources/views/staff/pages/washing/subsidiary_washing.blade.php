@extends('staff.layouts.app')
@section('content')
@include('staff.partials.menu')
<div class="card h-100">
    <div class="card-header">
        <h6 class="mb-0">Riwayat Pencucian</h6>
    </div>
    <div class="card-body scrollbar recent-activity-body-height ps-2">

        @foreach ($transaction as $item)
                <div class="row g-3 timeline timeline-primary timeline-past pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-check-circle"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1"><strong>{{ $item->staff->user->name ?? ''}}</strong> selesai mencuci <strong>{{$item->user->name}}</strong> di doorsmeer {{$item->doorsmeer->name}}</h6>
                                <div class="fs-0 fw-bolder">{{$item->user->name}}</div>
                                <div class="d-flex border-top">
                                    <div class="fs--1 fw-bolder">{{$item->user->car->number_plate}}</div>
                                    <div class="fs--1 ms-2">{{$item->user->car->name}}</div>
                                    <div class="fs--1 ms-2">{{$item->user->car->car_type->name}}</div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">{{$item->created_at->format('M-d H:i:s')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
    </div>
</div>

@endsection
