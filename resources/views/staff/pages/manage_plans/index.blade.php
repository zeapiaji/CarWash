@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col d-none d-sm-block">
                <span class="fa-user-friends" style="color: #344050; font-size:20px;"></span>
                <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Kelola Paket Pencucian</h4>
            </div>
            {{-- <div class="col-auto d-none d-sm-block">
                <h6 class="d-none d-sm-inline-block ms-1">Total Admin</h6>
                <span class="fw-bolder mx-1" style="font-size:20px">|</span>
                <h6 class="d-none d-sm-inline-block" data-countup='{"endValue":{{$totalAdmin}}}'>0</h6>
            </div> --}}
        </div>
    </div>
</div>

<div class="card mb-3" id="customersTable"
    data-list='{"valueNames":["name","car","number-plate","email","phone"],"page":10,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <input type="search" class="form-control search-input search" placeholder="cari..">
            </div>
            <div class="col-8 col-sm-auto text-end ps-2">
                <div class="d-none" id="table-customers-actions">
                    <div class="d-flex">
                        <button class="btn btn-falcon-danger btn-sm ms-2" id="multiple-delete"
                            data-route="{{ route('superadmin.multiple-delete-admin')}}">
                            <span class="fas fa-user-slash" data-fa-transform="shrink-3 down-2"></span>
                            <div class="d-none d-sm-inline-block ms-1">Hapus</div>
                        </button>
                    </div>
                </div>
                <div id="table-customers-replace-element">
                    <a class="btn btn-falcon-success btn-sm mx-2" href="/add/pricing">
                        <span class="fas fa-user-plus" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Tambah Paket</span>
                    </a>
                    <a class="btn btn-falcon-primary btn-sm mx-2" id="import" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fas fa-file-import" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Impor</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="impor">
                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#error-modal">XLSX</a>
                    </div>

                    <a class="btn btn-falcon-primary btn-sm" id="export" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fas fa-file-export" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Ekspor</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="export">
                        <a class="dropdown-item" href="/export-admin-xlsx">XLSX</a>
                        <a class="dropdown-item" href="/export-admin-csv">CSV</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/export-admin-pdf">PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden" id="customers-table">
                <thead class="bg-200 text-900">
                    <tr>
                        <th>
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input check-all" id="checkbox-bulk-customers-select"
                                    type="checkbox"
                                    data-bulk-select='{"body":"table-customers-body","actions":"table-customers-actions","replacedElement":"table-customers-replace-element"}' />
                            </div>
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Paket</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="price">Harga</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">type_id</th>
                        <th class="align-middle no-sort"></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-customers-body">
                    {{-- @dd($data) --}}
                    @foreach($plans as $item)
                    <tr class="btn-reveal-trigger">
                        <td class="align-middle py-2" style="width: 28px;">
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input check" type="checkbox" id="customer-{{$item->id}}"
                                    value="{{$item->id}}" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                        </td>
                        <td class="email align-middle py-2">{{$item->name}}</td>
                        <td class="email align-middle py-2">{{$item->price}}</td>

                        <td class="align-middle white-space-nowrap py-2 text-end">
                            <div class="dropdown font-sans-serif position-static"><button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="customer-dropdown-0" data-bs-toggle="dropdown" data-boundary="window"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--1"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                    aria-labelledby="customer-dropdown-0">
                                    <div class="bg-white rounded-2 py-2"><a class="dropdown-item border-bottom"
                                            href="/edit/admin/{{$item->id}}">Sunting</a>
                                        <a class="dropdown-item text-danger"
                                            href="/delete/admin/{{$item->id}}">Hapus</a></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer d-flex align-items-center justify-content-center"><button
            class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span
                class="fas fa-chevron-left"></span></button>
        <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
            data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
    </div>
</div>


@endsection
