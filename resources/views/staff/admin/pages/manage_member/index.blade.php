@extends('staff.admin.app')
@section('content')

@include('staff.admin.partials.menu')
<!--  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Member</h5>
            </div>
            <div class="col-8 col-sm-auto text-end ps-2">
                <div class="d-none" id="table-customers-actions">
                    <div class="d-flex">
                        <button class="btn btn-falcon-default btn-sm ms-2" id="multiple-delete" data-route="{{ route('admin.multiple-delete-member')}}">Hapus</button>
                    </div>
                </div>
                <div id="table-customers-replace-element">
                    <button class="btn btn-falcon-default btn-sm mx-2" type="button">
                        <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Filter</span>
                    </button>

                    <a class="btn btn-falcon-default btn-sm" id="dropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ms-1">Export</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/export-member-xlsx">XLSX</a>
                        <a class="dropdown-item" href="/export-member-csv">CSV</a>
                        <a class="dropdown-item" href="/export-member-tsv">TSV</a>
                        <a class="dropdown-item" href="/export-member-ods">ODS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/export-member-pdf">PDF</a>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden" id="customers-table"
            data-list='{"valueNames":["name","car","number-plate","email","phone"],"page":10,"pagination":true}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <th>
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input check-all" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select='{"body":"table-customers-body","actions":"table-customers-actions","replacedElement":"table-customers-replace-element"}'/></div>
                        </th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Nama</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="car">Mobil</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="number-plate">Plat Nomor</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="phone">Telepon</th>
                        <th class="align-middle no-sort"></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-customers-body">
                    {{-- @dd($data) --}}
                    @foreach ($data as $item)
                    <tr class="btn-reveal-trigger">
                        <td class="align-middle py-2" style="width: 28px;">
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input check" type="checkbox" id="customer-{{$item->id}}" value="{{$item->id}}" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                        </td>

                        <td class="name align-middle white-space-nowrap py-2">
                            <a href="/detail/member/{{$item->id}}">
                                <div class="d-flex d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2">
                                        <div class="avatar-name rounded-circle"><span>{{mb_substr($item->name, 0, 2)}}</span></div>
                                    </div>
                                    <div class="flex-1">
                                        <h5 class="mb-0 fs--1">{{$item->name}}</h5>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td class="car align-middle pt-2">{{$item->car->name}}
                        </td>
                        <td class="number-plate align-middle py-2">{{$item->car->number_plate}}
                        </td>
                        <td class="email align-middle py-2"><a href="mailto:{{$item->email}}">{{$item -> email}}</a>
                        </td>
                        <td class="phone align-middle py-2">{{$item->phone}}</td>

                        <td class="align-middle white-space-nowrap py-2 text-end">
                            <div class="dropdown font-sans-serif position-static"><button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="customer-dropdown-0" data-bs-toggle="dropdown" data-boundary="window"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--1"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                    aria-labelledby="customer-dropdown-0">
                                    <div class="bg-white rounded-2 py-2"><a class="dropdown-item border-bottom" href="/edit/member/{{$item->id}}">Sunting</a>
                                        <a
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

{{-- Upload File Modal --}}
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
      <div class="modal-content position-relative">
        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
          <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
            <h4 class="mb-1" id="modalExampleDemoLabel">Import Excel</h4>
          </div>
          <div class="p-4 pb-0">
            <form>
                <div class="dropzone dropzone-single p-0" data-dropzone="data-dropzone" data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                    <div class="fallback"><input type="file" name="file" /></div>
                    <div class="dz-preview dz-preview-single">
                      <div class="dz-preview-cover dz-complete"><img class="dz-preview-img" src="{{asset('admin/assets/img/generic/image-file-2.png')}}" alt="..." data-dz-thumbnail="" /><a class="dz-remove text-danger" href="#!" data-dz-remove="data-dz-remove"><span class="fas fa-times"></span></a>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                        <div class="dz-errormessage m-1"><span data-dz-errormessage="data-dz-errormessage"></span></div>
                      </div>
                      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                    </div>
                    <div class="dz-message" data-dz-message="data-dz-message">
                      <div class="dz-message-text"><img class="me-2" src="{{asset('admin/assets/img/icons/cloud-upload.svg')}}" width="25" alt="" />Drop your file here</div>
                    </div>
                </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="button">Understood </button>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
    $(document).ready(function() {

      $("#customers-table").TableCheckAll();

      $('#multiple-delete').on('click', function() {
        var button = $(this);
        var selected = [];
        $('#customers-table .check:checked').each(function() {
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
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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
                  window.location='/manage-member'
                });
              }
            });
          }
        });
      });

    });
  </script>

@endsection
