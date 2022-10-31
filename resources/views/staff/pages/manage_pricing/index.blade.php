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
                <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Kelola Paket</h4>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3" id="customersTable"
    data-list='{"valueNames":["name","car","number-plate","email","phone"],"page":10,"pagination":true}'>
    <div class="card-header text-end">
        <div id="table-customers-replace-element">
            <a class="btn btn-falcon-success btn-sm mx-2" href="/pricing/add/pricing-1">
                <span class="fas fa-user-plus" data-fa-transform="shrink-3 down-2"></span>
                <span class="d-none d-sm-inline-block ms-1">Tambah Fitur 1</span>
            </a>
            <a class="btn btn-falcon-success btn-sm mx-2" href="/pricing/add/pricing-2">
                <span class="fas fa-user-plus" data-fa-transform="shrink-3 down-2"></span>
                <span class="d-none d-sm-inline-block ms-1">Tambah Fitur 2</span>
            </a>
            <a class="btn btn-falcon-success btn-sm mx-2" href="/pricing/add/pricing-3">
                <span class="fas fa-user-plus" data-fa-transform="shrink-3 down-2"></span>
                <span class="d-none d-sm-inline-block ms-1">Tambah Fitur 3</span>
            </a>
            <a class="btn btn-falcon-success btn-sm mx-2" href="/pricing/add/pricing-4">
                <span class="fas fa-user-plus" data-fa-transform="shrink-3 down-2"></span>
                <span class="d-none d-sm-inline-block ms-1">Tambah Fitur 4</span>
            </a>
        </div>
    </div>
    <div class="card-body p-4">
        @foreach ($carType as $item)
        <a href="/pricing/{{$item->id}}" class="btn btn-lg btn-falcon-primary ms-3">{{$item->name}}</a>
        @endforeach
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
                                window.location = '/doorsmeer/'
                            });
                        }
                    });
                }
            });
        });

    });

</script>

@endsection
