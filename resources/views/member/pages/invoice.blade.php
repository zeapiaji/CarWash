@extends('staff.layouts.app')
@section('content')
@include('staff.partials.menu')

<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0"></h5>
            </div>
            <div class="col-auto">
                    class="btn btn-falcon-success btn-sm mb-2 mb-sm-0" href="" type="button"><span
                        class="fas fa-dollar-sign me-1"></span>Terima Pembayaran</a></div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-body">
        <div class="row align-items-center text-center mb-3">
            <div class="col-sm-6 text-sm-start"><img src="{{asset('admin/assets/img/logos/logo-invoice.png')}}" alt="invoice"
                    width="150" /></div>
            <div class="col text-sm-end mt-3 mt-sm-0">
                <h2 class="mb-3">{{$entry->subsidiary->name}}</h2>
                <h5>{{$doorsmeer->name}}</h5>
                <p class="fs--1 mb-0">{{$entry->subsidiary->location}}</p>
            </div>
            <div class="col-12">
                <hr />
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <h6 class="text-500">Tagihan kepada</h6>
                <h5>{{$entry->user->name}}</h5>
                <p class="fs--1" style="width: 200px">{{$entry->user->address}}</p>
                <p class="fs--1">{{$entry->user->email}}<br />{{$entry->user->phone}}</p>
            </div>
            <div class="col-sm-auto ms-auto">
                <div class="table-responsive">
                    <table class="table table-sm table-borderless fs--1">
                        <tbody>
                            <tr>
                                <th class="text-sm-end">Tanggal faktur:</th>
                                <td>{{$entry->updated_at->format('Y-m-d')}}</td>
                            </tr>
                            <tr>
                                <th class="text-sm-end">Tanggal jatuh tempo:</th>
                                <td>Setelah menerima</td>
                            </tr>
                            <tr class="alert-success fw-bold">
                                <th class="text-sm-end">Jumlah yang harus dibayar:</th>
                                <td>Rp {{$entry->plans->price}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="table-responsive scrollbar mt-4 fs--1">
            <table class="table table-striped border-bottom">
                <thead class="light">
                    <tr class="bg-primary text-white dark__bg-1000">
                        <th class="border-0">Produk</th>
                        <th class="border-0">Fitur</th>
                        <th class="border-0 text-end">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">
                            <h6 class="mb-0 text-nowrap">{{$entry->plans->name}}</h6>
                        </td>
                        <td>
                            @foreach ($entry->plans->washing_plans as $item)
                            <div class="fs--2 text-500">{{$item->name}} <br></div>
                            @endforeach
                        </td>
                        <td class="align-middle text-end">{{$entry->count()}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <table class="table table-sm table-borderless fs--1 text-end">
                    <tr class="">
                        <th class="text-900">Total:</th>
                        <td class="fw-semi-bold">Rp {{$entry->plans->price}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer bg-light">
        <p class="fs--1 mb-0"><strong>Catatan: </strong>Terimakasih telah memilih jasa kami, kami nantikan kunjungan selanjutnya!</p>
    </div>
</div>

@endsection
