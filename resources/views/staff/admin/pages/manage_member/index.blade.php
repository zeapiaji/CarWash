@extends('staff.admin.app')
@section('content')

@include('staff.admin.partials.menu')
<!--  -->
<div class="card mb-3" id="customersTable"
    data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Member</h5>
            </div>
            <div class="col-8 col-sm-auto text-end ps-2">
                <div class="d-none" id="table-customers-actions">
                    <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button></div>
                </div>
                <div id="table-customers-replace-element">
                    <a class="btn btn-falcon-default btn-sm" href="/add/member" type="button">
                        <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Tambah Pegawai</span>
                    </a>
                    <button class="btn btn-falcon-default btn-sm mx-2" type="button">
                        <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Filter</span>
                    </button>
                    <button class="btn btn-falcon-default btn-sm" type="button">
                        <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Export</span></button></div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                <thead class="bg-200 text-900">
                    <tr>
                        <th>
                            <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input"
                                    id="checkbox-bulk-customers-select" type="checkbox"
                                    data-bulk-select='{"body":"table-customers-body","actions":"table-customers-actions","replacedElement":"table-customers-replace-element"}' />
                            </div>
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Nama</th>
                        <th class="sort pe-1 align-middle white-space-nowrap ps-3" data-sort="car">Mobil</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="license-plate">Plat Nomor</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="phone">Telepon</th>
                        <th class="sort pe-1 align-middle white-space-nowrap ps-5" data-sort="address"
                            style="min-width: 200px;">Alamat</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="joined">Bergabung</th>
                        <th class="align-middle no-sort"></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-customers-body">
                    {{-- @dd($data) --}}
                    @foreach ($data as $item)
                    <tr class="btn-reveal-trigger">
                        <td class="align-middle py-2" style="width: 28px;">
                            <div class="form-check fs-0 mb-0 d-flex align-items-center"><input class="form-check-input"
                                    type="checkbox" id="customer-0" data-bulk-select-row="data-bulk-select-row" /></div>
                        </td>

                        <td class="name align-middle white-space-nowrap py-2"><a href="customer-details.html">
                                <div class="d-flex d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2">
                                        <div class="avatar-name rounded-circle"><span>RA</span></div>
                                    </div>
                                    <div class="flex-1">
                                        <h5 class="mb-0 fs--1">{{$item->name}}</h5>
                                    </div>
                                </div>
                            </a></td>
                            {{-- @dd($item) --}}
                        <td class="email align-middle ps-3 py-2">{{$item->car->name}}
                        </td>
                        <td class="email align-middle py-2">{{$item->car->number_plate}}
                        </td>
                        <td class="email align-middle py-2"><a href="mailto:{{$item->email}}">{{$item -> email}}</a>
                        </td>
                        <td class="phone align-middle white-space-nowrap py-2"><a href="tel:{{$item->phone}}">{{$item->phone}}</a></td>
                        <td class="address align-middle white-space-nowrap ps-5 py-2">{{$item->address}}</td>
                        <td class="joined align-middle py-2">{{$item->created_at}}</td>

                        <td class="align-middle white-space-nowrap py-2 text-end">
                            <div class="dropdown font-sans-serif position-static"><button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="customer-dropdown-0" data-bs-toggle="dropdown" data-boundary="window"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--1"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                    aria-labelledby="customer-dropdown-0">
                                    <div class="bg-white py-2"><a class="dropdown-item" href="/edit/member/{{$item->id}}">Sunting</a><a
                                            class="dropdown-item text-danger" href="/delete/member/{{$item->id}}">Hapus</a></div>
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
