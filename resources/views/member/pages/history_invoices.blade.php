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
                <a class="btn btn-falcon-default btn-sm me-1 mb-2 mb-sm-0" href="/transaction/download/{{$transaction->id}}" type="button"><span class="fas fa-arrow-down me-1"> </span>Download (.pdf)</a>
                <a class="btn btn-falcon-success btn-sm mb-2 mb-sm-0" href="{{URL::previous()}}"
                    type="button">Kembali</a></div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-body">
        <div class="row align-items-center text-center mb-3">
            <div class="col-sm-6 text-sm-start"><img src="{{asset('member/assets/images/logo.png')}}"
                alt="invoice" width="300" /></div>
            <div class="col text-sm-end mt-3 mt-sm-0">
                <h2 class="mb-3">{{$transaction->subsidiary->name}}</h2>
                <h5>{{$transaction->doorsmeer->name}}</h5>
                <p class="fs--1 mb-0">{{$transaction->subsidiary->location}}</p>
            </div>
            <div class="col-12">
                <hr />
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <h6 class="text-500">Tagihan kepada</h6>
                <h5>{{$transaction->user->name}}</h5>
                <p class="fs--1" style="width: 200px">{{$transaction->user->address}}</p>
                <p class="fs--1">{{$transaction->user->email}}<br />{{$transaction->user->phone}}</p>
            </div>
            <div class="col-sm-auto ms-auto">
                <div class="table-responsive">
                    <table class="table table-sm table-borderless fs--1">
                        <tbody>
                            <tr>
                                <th class="text-sm-end">Nomor faktur:</th>
                                <td>{{$transaction->id}}</td>
                            </tr>
                            <tr>
                                <th class="text-sm-end">Tanggal faktur:</th>
                                <td>{{$transaction->created_at}}</td>
                            </tr>
                            <tr>
                                <th class="text-sm-end">Tanggal jatuh tempo:</th>
                                <td>Setelah menerima</td>
                            </tr>
                            <tr class="alert-success fw-bold">
                                <th class="text-sm-end">Jumlah yang harus dibayar:</th>
                                <td>Rp @convert($transaction->plan->price)</td>
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
                            <h6 class="mb-0 text-nowrap">{{$transaction->plan->name}}</h6>
                        </td>
                        <td>
                            @foreach ($transaction->plan->washing_plans as $item)
                            <div class="fs--2 text-500">{{$item->name}} <br></div>
                            @endforeach
                        </td>
                        <td class="align-middle text-end">{{$transaction->count()}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <table class="table table-sm table-borderless fs--1 text-end">
                    <tr class="">
                        <th class="text-900">Total:</th>
                        <td class="fw-semi-bold">Rp @convert($transaction->plan->price)</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer bg-light">
        <p class="fs--1 mb-0"><strong>Catatan: </strong>Terimakasih telah memilih jasa kami, kami nantikan kunjungan
            selanjutnya!</p>
    </div>
</div>

@endsection
