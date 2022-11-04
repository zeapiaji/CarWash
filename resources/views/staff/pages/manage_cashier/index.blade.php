@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::alert')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col d-none d-sm-block">
                <span class="fas fa-users" style="color: #344050; font-size:20px;"></span>
                <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Kelola Kasir</h4>
            </div>
            <div class="col-auto d-none d-sm-block">
                <h6 class="d-none d-sm-inline-block ms-1">Total Kasir</h6>
                <span class="fw-bolder mx-1" style="font-size:20px">|</span>
                <h6 class="d-none d-sm-inline-block" data-countup='{"endValue":{{$data->count()}}}'>0</h6>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3" id="customersTable"
data-list='{"valueNames":["name","phone","email","gender"],"page":10,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <input type="search" class="form-control search-input search"  placeholder="cari..">
            </div>
            <div class="col-8 col-sm-auto text-end ps-2">
                <div class="d-none" id="table-customers-actions">
                    <div class="d-flex">
                        <button class="btn btn-falcon-default btn-sm text-danger ms-2" id="multiple-delete"
                            data-route="{{ route('admin.multiple-delete-cashier')}}">Hapus</button>
                    </div>
                </div>
                <div id="table-customers-replace-element">
                        <a href="/cashier/input" class="btn btn-falcon-default btn-sm mx-2">Tambah</a>

                    <a class="btn btn-falcon-default btn-sm" id="export" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fas fa-file-export" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Ekspor</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="export">
                        <a class="dropdown-item" href="/export-cashier-xlsx">XLSX</a>
                        <a class="dropdown-item" href="/export-cashier-csv">CSV</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/export-cashier-pdf">PDF</a>
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
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Nama</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="phone">Telepon</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="gender">Jenis Kelamin</th>
                        @role('super_admin')
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="cabang">Cabang</th>
                        @endrole
                        <th class="align-middle no-sort"></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-customers-body">
                        {{--  @dd($data)  --}}
                    @foreach ($data as $item)
                    <tr class="btn-reveal-trigger">
                        <td class="name align-middle white-space-nowrap py-2">
                            <a href="/detail/cashier/{{$item->user->id}}">
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
                        </td>
                        <td class="phone align-middle py-2">{{$item->user->phone}}</td>
                        <td class="email align-middle py-2"><a href="mailto:{{$item->user->email}}">{{$item->user->email}}</a></td>
                        <td class="gender align-middle py-2">{{$item -> user->gender -> name}}</td>
                        @role('super_admin')
                        <td class="cabang align-middle py-2" data-sort="cabang">{{$item->subsidiary->name ?? ''}}</td>
                        @endrole
                        <td class="align-middle white-space-nowrap py-2 text-end">
                            <div class="dropdown font-sans-serif position-static"><button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="customer-dropdown-0" data-bs-toggle="dropdown" data-boundary="window"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--1"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                    aria-labelledby="customer-dropdown-0">
                                    <div class="bg-white rounded-2 py-2"><a class="dropdown-item border-bottom"
                                            href="/edit/cashier/{{$item->user->id}}">Sunting</a>
                                        <a class="dropdown-item text-danger"
                                            href="/delete/cashier/{{$item->user->id}}">Hapus</a></div>
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
                                window.location = '/manage-cashier'
                            });
                        }
                    });
                }
            });
        });

    });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
@endsection
