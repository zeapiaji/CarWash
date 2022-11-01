@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<div class="row g-3 mb-3">
    <div class="col-xxl-6 col-lg-12">
        <div class="card h-100">
            <div class="bg-holder bg-card"
                style="background-image:url(../assets/img/icons/spot-illustrations/corner-3.png);"></div>
            <!--/.bg-holder-->
            <div class="card-header z-index-1">
                <h5 class="text-primary">Selamat datang {{Auth::user()->name}}! </h5>
                <h6 class="text-600">Kelola Cabang {{Auth::user()->staff->subsidiary->name}} </h6>
            </div>

        </div>
    </div>
</div>
<div class="row g-3 mb-3">
    <div class="col-xxl-6 col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="row g-3 mb-3">
                    <div class="col-sm-6 col-md-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(../assets/img/icons/spot-illustrations/corner-1.png);">
                            </div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Kasir</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                                    data-countup='{"endValue":{{$data->count()}}}'>0</div><a
                                    class="fw-semi-bold fs--1 text-nowrap" href="/manage-cashier">Kelola
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(../assets/img/icons/spot-illustrations/corner-2.png);">
                            </div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Doorsmeer</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                                    data-countup='{"endValue":{{$doorsmeer->count()}}}'>0</div><a
                                    class="fw-semi-bold fs--1 text-nowrap"
                                    href="/doorsmeer">Kelola<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xxl-8 order-xxl-2">
        <div class="card mb-1">
            <div class="card-header">
                <div class="row">
                    <div class="col d-none d-sm-block">
                        <span class="fas fa-users" style="color: #344050; font-size:20px;"></span>
                        <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Kasir</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-8 order-xxl-2">
        <div class="card h-100">
            <div class="card-body p-0">
                <div class="scrollbar">
                    <table
                        class="table table-dashboard mb-0 table-borderless fs--1 border-200 overflow-hidden rounded-3 table-member-info">
                        <thead class="bg-light">
                            <tr class="text-900">
                                <th>Nama</th>
                                <th class="text-center">Telepon</th>
                                <th class="text-center">Email</th>
                                <th class="text-end">Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{--  @dd($data)  --}}
                            @foreach ($data as $item)
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <a href="/detail/cashier/{{$item->id}}">
                                            <div class="d-flex d-flex align-items-center">
                                                <div class="avatar avatar-xl me-2">
                                                    <div class="avatar-name rounded-circle">
                                                        <span>{{mb_substr($item->user->name, 0, 2)}}</span></div>
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="mb-0 fs--1">{{$item->user->name}}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-warning">{{$item->user->phone}}</small>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-danger">{{$item->user->email}}</small>
                                </td>


                                <td class="align-middle">
                                    <div class="row g-2 justify-content-end">
                                        <div class="col-auto"><small
                                                class="badge fw-semi-bold rounded-pill badge-soft-primary">{{$item->user-> gender -> name}}</small>

                                        </div>

                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light py-2">
                <div class="row flex-between-center">
                    <div class="col-auto"></div>
                    <div class="col-auto"><a class="btn btn-sm btn-link px-0 fw-medium"
                            href="/manage-cashier">Kelola<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-6 col-lg-6 order-xxl-1">
        <div class="card h-100">
            <div class="card-header">
                <h6 class="mb-0">Riwayat Pencucian</h6>
            </div>
            <div class="card-body scrollbar recent-activity-body-height ps-2">
                {{-- @foreach($account->revisionHistory as $history )
    <li>{{ $history->userResponsible()->first_name }} changed {{ $history->fieldName() }} from {{ $history->oldValue() }} to {{ $history->newValue() }}</li>
@endforeach --}}
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
    </div>
    <div class="col-xxl-6 col-lg-6 order-xxl-1">
        <div class="card h-100">
            <div class="card-header">
                <h6 class="mb-0">Riwayat Transaksi</h6>
            </div>
            <div class="card-body scrollbar recent-activity-body-height ps-2">
                @foreach ($transaction as $item)
                <div class="row g-3 timeline timeline-primary timeline-past pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-file-invoice-dollar"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1">{{ $item->staff->user->name ?? ''}} menerima transaksi dari {{$item->user->name}}</h6>
                                <a href="/history/transaction/{{$item->id}}" class="fs--1">Lihat Riwayat</a>
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
    </div>
</div>


@endsection
