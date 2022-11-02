@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')
<!--  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col d-none d-sm-block">
                <span class="fas fa-users" style="color: #344050; font-size:20px;"></span>
                <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Kelola Cabang</h4>
            </div>
            <div class="col-auto d-none d-sm-block">
                <h6 class="d-none d-sm-inline-block ms-1">Total Cabang</h6>
                <span class="fw-bolder mx-1" style="font-size:20px">|</span>
                <h6 class="d-none d-sm-inline-block" data-countup='{"endValue":{{$totalSubsidiaries}}}'>0</h6>
            </div>
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
                    <a class="btn btn-falcon-success btn-sm mx-2" href="/add/subsidiary">
                        <span class="fas fa-user-plus" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Tambah Cabang</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden" id="customers-table">
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Nama</th>
                        {{-- <th class="sort pe-1 align-middle white-space-nowrap" data-sort="admin">Admin</th> --}}
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="location">Lokasi</th>
                        <th class="align-middle no-sort white-space-nowrap"></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-customers-body">
                    @foreach ($data as $item)
                    <tr class="btn-reveal-trigger">
                        <td class="name align-middle white-space-nowrap py-2">
                            <a href="/detail/subsidiary/{{$item->id}}">
                                <div class="d-flex d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2">
                                        <div class="avatar-name rounded-circle">
                                            <span>{{mb_substr($item->name, 0, 2)}}</span></div>
                                    </div>
                                    <div class="flex-1">
                                        <h5 class="mb-0 fs--1">{{$item->name}}</h5>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td class="location align-middle py-2">{{$item->location}}</td>

                        <td class="align-middle py-2">
                            <a class="btn p-0" href="/edit/subsidiary/{{$item->id}}" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Edit">
                                <span class="text-500 fas fa-edit"></span>
                            </a>
                            <a class="btn p-0 ms-2" href="/delete/subsidiary/{{$item->id}}" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hapus">
                                <span class="text-500 fas fa-trash-alt"></span>
                            </a>
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



<script type="text/javascript">
    $(document).ready(function () {

        $("#customers-table").TableCheckAll();

        $('#multiple-delete').on('click', function () {
            var button = $(this);
            var selected = [];
            $('#customers-table .check:checked').each(function () {
                selected.push($(this).val());
            });

            Swal.fire({
                icon: 'warning',
                title: 'Are you sure you want to delete selected record(s)?',
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: button.data('route'),
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            'selected': selected
                        },
                        success: function (response, textStatus, xhr) {
                            Swal.fire({
                                icon: 'success',
                                title: response,
                                showDenyButton: false,
                                showCancelButton: false,
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                window.location = '/manage-admin'
                            });
                        }
                    });
                }
            });
        });

    });

</script>

@endsection
