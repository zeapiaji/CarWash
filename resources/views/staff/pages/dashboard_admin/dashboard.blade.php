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
                <h6 class="text-600">Beberapa link yang mungkin berguna </h6>
            </div>
            <div class="card-body z-index-1">
                <div class="row g-2 h-100 align-items-end">
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                    class="fas fa-chess-rook text-primary"></span></div>
                            <div class="flex-1"><a class="stretched-link" href="#!">
                                    <h6 class="text-800 mb-0">General</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Customize with a few clicks</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                    class="fas fa-crown text-warning"></span></div>
                            <div class="flex-1"><a class="stretched-link" href="#!">
                                    <h6 class="text-800 mb-0">Upgrade to pro</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Try Pro for 14 days free! </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                    class="fas fa-video text-success"></span></div>
                            <div class="flex-1"><a class="stretched-link" href="#!">
                                    <h6 class="text-800 mb-0">Create a meeting</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Manage and update your meetings</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                    class="fas fa-user text-info"></span></div>
                            <div class="flex-1"><a class="stretched-link" href="#!">
                                    <h6 class="text-800 mb-0">Members activity</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Monitor activity and supervise</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="card h-100">
            <div class="card-header d-flex flex-between-center">
                <h5 class="mb-0">Proses pencucian</h5><a class="btn btn-link btn-sm px-0" href="#!">Report<span
                        class="fas fa-chevron-right ms-1 fs--2"> </span></a>
            </div>
            <div class="card-body">
                <p class="fs--1 text-600">See team members' time worked, <br /> activity levels, and progress</p>
                <div class="progress mb-3 rounded-pill" style="height: 6px;">
                    <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar" style="width: 75%"
                        aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 text-primary">75% completed</p>
                <p class="mb-0 fs--2 text-500">Jan 1st to 30th</p>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="card h-100">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col">
                        <p class="mb-1 fs--2 text-500">Upcoming schedule</p>
                        <h5 class="text-primary fs-0">Falcon discussion</h5>
                    </div>
                    <div class="col-auto">
                        <div class="bg-soft-primary px-3 py-3 rounded-circle text-center"
                            style="width:60px;height:60px;">
                            <h5 class="text-primary mb-0 d-flex flex-column mt-n1"><span>09</span><small
                                    class="text-primary fs--2 lh-1">MAR</small></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex align-items-end">
                <div class="row g-3 justify-content-between">
                    <div class="col-10 mt-0">
                        <p class="fs--1 text-600 mb-0">The very first general meeting for planning Falcon’s design and
                            development roadmap</p>
                    </div>
                    <div class="col-auto"><button class="btn btn-success w-100 fs--1" type="button"><span
                                class="fas fa-video me-2"></span>Join meeting</button></div>
                    <div class="col-auto ps-0">
                        <div class="avatar-group avatar-group-dense">
                            <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                            </div>
                            <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                <img class="rounded-circle" src="../assets/img/team/2-thumb.png" alt="" />
                            </div>
                            <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                            </div>
                            <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                <div class="avatar-name rounded-circle "><span>+50</span></div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <h6>Customers<span class="badge badge-soft-warning rounded-pill ms-2">-0.23%</span></h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                                    data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>0</div><a
                                    class="fw-semi-bold fs--1 text-nowrap" href="../app/e-commerce/customers.html">See
                                    all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row flex-between-center g-card">
                            <div class="col-auto">
                                <h6>Laporan pencucian hari ke hari</h6>
                            </div>
                            <div class="col-auto d-flex">
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 me-3 shadow-none"
                                    id="echart-bar-report-for-this-week-option-1"><span
                                        class="fas fa-circle text-primary fs--2 me-1"></span><span class="text">Minggu
                                        ini </span></div>
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none"
                                    id="echart-bar-report-for-this-week-option-2"><span
                                        class="fas fa-circle text-300 fs--2 me-1"></span><span class="text">Minggu
                                        lalu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/report-for-this-week.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="echart-bar-report-for-this-week" data-echart-responsive="true"
                            data-chart="{&quot;option1&quot;:&quot;echart-bar-report-for-this-week-option-1&quot;,&quot;option2&quot;:&quot;echart-bar-report-for-this-week-option-2&quot;}">
                        </div>
                    </div>
                    <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2"
                            href="#!">See all projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-1">
        <div class="card-header">
            <div class="row">
                <div class="col d-none d-sm-block">
                    <span class="fas fa-users" style="color: #344050; font-size:20px;"></span>
                    <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Pegawai</h4>
                </div>
                <div class="col-auto d-none d-sm-block">
                    <h6 class="d-none d-sm-inline-block ms-1">Total pegawai</h6>
                    <span class="fw-bolder mx-1" style="font-size:20px">|</span>
                    <h6 class="d-none d-sm-inline-block" data-countup='{"endValue":{{$data->count()}}}'>0</h6>
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
                <div class="row g-3 timeline timeline-primary timeline-past pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-envelope"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1">Antony Hopkins sent an Email</h6>
                                <p class="fs--1 text-600 mb-0">Got an email for previous year sale report</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">2m ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 timeline timeline-primary timeline-past pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-archive"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1">Emma archived a board</h6>
                                <p class="fs--1 text-600 mb-0">A finished project's board is archived recently</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">26m ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 timeline timeline-primary timeline-current pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-code"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1">Falcon v3.0.0 released with new features</h6>
                                <p class="fs--1 text-600 mb-0">Falcon new version is released successfully with new
                                    Dashboards</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">1h ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 timeline timeline-primary  pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-code-branch"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1">Rowan shared a link to the board</h6>
                                <p class="fs--1 text-600 mb-0">A link is shared with attachments</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">3h ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 timeline timeline-primary">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary far fa-file-code"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0">
                            <div class="col">
                                <h6 class="text-800 mb-1">Anna updated a file</h6>
                                <p class="fs--1 text-600 mb-0">Fixed some bugs and spelling errors on this update</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">4h ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-lg-6 order-xxl-1">
        <div class="card h-100">
            <div class="card-header">
                <h6 class="mb-0">Riwayat Transaksi</h6>
            </div>
            <div class="card-body scrollbar recent-activity-body-height ps-2">
                <div class="row g-3 timeline timeline-primary timeline-past pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-envelope"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1">Antony Hopkins sent an Email</h6>
                                <p class="fs--1 text-600 mb-0">Got an email for previous year sale report</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">2m ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 timeline timeline-primary timeline-past pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-archive"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1">Emma archived a board</h6>
                                <p class="fs--1 text-600 mb-0">A finished project's board is archived recently</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">26m ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 timeline timeline-primary timeline-current pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-code"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1">Falcon v3.0.0 released with new features</h6>
                                <p class="fs--1 text-600 mb-0">Falcon new version is released successfully with new
                                    Dashboards</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">1h ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 timeline timeline-primary  pb-card">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary fas fa-code-branch"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0 border-bottom pb-card">
                            <div class="col">
                                <h6 class="text-800 mb-1">Rowan shared a link to the board</h6>
                                <p class="fs--1 text-600 mb-0">A link is shared with attachments</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">3h ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 timeline timeline-primary">
                    <div class="col-auto ps-4 ms-2">
                        <div class="ps-2">
                            <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span
                                    class="text-primary far fa-file-code"></span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gx-0">
                            <div class="col">
                                <h6 class="text-800 mb-1">Anna updated a file</h6>
                                <p class="fs--1 text-600 mb-0">Fixed some bugs and spelling errors on this update</p>
                            </div>
                            <div class="col-auto">
                                <p class="fs--2 text-500 mb-0">4h ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
