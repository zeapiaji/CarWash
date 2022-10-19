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
                <h5 class="text-primary">Welcome to Falcon! </h5>
                <h6 class="text-600">Here are some quick links for you to start </h6>
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
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-header bg-light">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="mb-0">Dalam Antrian</h6>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
                @foreach ($entry as $item)
                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                  <div class="col ps-card py-1 position-static">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-name rounded-circle bg-soft-primary text-dark"><span class="fs-0 text-primary">F</span></div>
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">{{$item->user->name}}</a><span class="badge rounded-pill ms-2 bg-200 text-primary">38%</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col py-1">
                    <div class="row flex-end-center g-0">
                      <div class="col-auto pe-2">
                        <div class="fs--1 fw-semi-bold">12:50:00</div>
                      </div>
                      <div class="col-5 pe-card ps-2">
                        <div class="progress bg-200 me-2" style="height: 5px;">
                          <div class="progress-bar rounded-pill" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="card h-100">
            <div class="card-header d-flex flex-between-center">
                <h5 class="mb-0">Progress Cuci</h5><a class="btn btn-link btn-sm px-0" href="#!">Report<span
                        class="fas fa-chevron-right ms-1 fs--2"> </span></a>
            </div>
            <div class="card-body">
                <p class="fs--1 text-600">See team members' time worked, <br /> activity levels, and progress</p>
                <div class="progress mb-3 rounded-pill" style="height: 6px;">
                    <div class="progress-bar bg-progress-gradient rounded-pill" role="progressbar"
                        style="width: 75%" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 text-primary">75% completed</p>
                <p class="mb-0 fs--2 text-500">qweqweqwe</p>
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
                        <p class="fs--1 text-600 mb-0">The very first general meeting for planning Falcon’s design
                            and development roadmap</p>
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
                                <h6>Customers<span class="badge badge-soft-warning rounded-pill ms-2">-0.23%</span>
                                </h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                                    data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>0</div><a
                                    class="fw-semi-bold fs--1 text-nowrap"
                                    href="../app/e-commerce/customers.html">See all<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
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
                                <h6>Orders<span class="badge badge-soft-info rounded-pill ms-2">0.0%</span></h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                                    data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>0</div><a
                                    class="fw-semi-bold fs--1 text-nowrap"
                                    href="../app/e-commerce/orders/order-list.html">All orders<span
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
                                <h6>Report for this week</h6>
                            </div>
                            <div class="col-auto d-flex">
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 me-3 shadow-none"
                                    id="echart-bar-report-for-this-week-option-1"><span
                                        class="fas fa-circle text-primary fs--2 me-1"></span><span class="text">This
                                        Week </span></div>
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none"
                                    id="echart-bar-report-for-this-week-option-2"><span
                                        class="fas fa-circle text-300 fs--2 me-1"></span><span class="text">Last
                                        Week</span></div>
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
                            href="#!">See all projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-lg-6 order-xxl-1">
        <div class="card h-100">
            <div class="card-header bg-light d-flex flex-between-center">
                <h5 class="mb-0">Project Locations</h5>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                        class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                        type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="viewport"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs--1"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="documentations"><a
                            class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Move</a><a
                            class="dropdown-item" href="#!">Resize</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning"
                            href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                    </div>
                </div>
            </div>
            <div class="card-body h-100 p-0">
                <div class="h-100 bg-white" id="map" style="min-height: 300px;"></div>
            </div>
            <div class="card-footer bg-light">
                <div class="row justify-content-between">
                    <div class="col-auto"><select class="form-select form-select-sm">
                            <option value="week" selected="selected">Last 7 days</option>
                            <option value="month">Last month</option>
                            <option value="year">Last year</option>
                        </select></div>
                    <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span
                                class="d-none d-sm-inline-block me-1">Location</span>overview<span
                                class="fa fa-chevron-right ms-1 fs--1"></span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-lg-6">
        <div class="card h-100">
            <div class="card-header d-flex flex-between-center">
                <h6 class="mb-0">Project Statistics</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                        class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                        type="button" id="dropdown-project-statistics" data-bs-toggle="dropdown"
                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2"
                        aria-labelledby="dropdown-project-statistics"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row mb-2">
                    <div class="col-6 border-end border-200">
                        <h4 class="mb-0">5,432</h4>
                        <p class="fs--1 text-600 mb-0">Total Work Hours</p>
                    </div>
                    <div class="col-3 border-end text-center border-200">
                        <h4 class="fs-0 mb-0">13</h4>
                        <p class="fs--1 text-600 mb-0">Projects</p>
                    </div>
                    <div class="col-3 text-center">
                        <h4 class="fs-0 mb-0">7</h4>
                        <p class="fs--1 text-600 mb-0">Ongoing</p>
                    </div>
                </div>
                <div class="overflow-visible progress mt-4 rounded-3" style="height: 6px;">
                    <div class="overflow-visible progress-bar bg-progress-gradient border-end border-white border-2 rounded-end rounded-pill"
                        role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"><span class="mt-n4 text-900 fw-bold">25%</span></div>
                    <div class="overflow-visible progress-bar bg-secondary border-end border-white border-2"
                        role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                        aria-valuemax="100"><span class="mt-n4 text-900 fw-bold">45%</span></div>
                    <div class="overflow-visible progress-bar bg-warning border-end border-white border-2"
                        role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                        aria-valuemax="100"><span class="mt-n4 text-900 fw-bold">15%</span></div>
                    <div class="overflow-visible progress-bar bg-info rounded-start rounded-pill" role="progressbar"
                        style="width: 15%" aria-valuenow="15" aria-valuemin="15" aria-valuemax="100"><span
                            class="mt-n4 text-900 fw-bold">15%</span></div>
                </div>
                <p class="fs--1 mb-2 mt-3">Assignees in Sprint</p>
                <div class="avatar-group avatar-group-dense mb-3">
                    <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                        <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                    </div>
                    <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                        <img class="rounded-circle" src="../assets/img/team/2-thumb.png" alt="" />
                    </div>
                    <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                        <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                    </div>
                    <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                        <img class="rounded-circle" src="../assets/img/team/4-thumb.png" alt="" />
                    </div>
                    <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                        <img class="rounded-circle" src="../assets/img/team/5-thumb.png" alt="" />
                    </div>
                    <div class="avatar avatar-2xl border border-3 border-light rounded-circle">
                        <div class="avatar-name rounded-circle "><span>+50</span></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <h6>Project </h6>
                    <h6>Team</h6>
                </div>
                <div class="d-flex flex-between-center rounded-3 bg-light p-3 mb-2"><a href="#!">
                        <h6 class="mb-0"><span class="fas fa-circle fs--1 me-3 text-primary"></span>Organizing UI
                        </h6>
                    </a><a class="fs--2 text-600 mb-0" href="#!">ThemeWagon</a></div>
                <div class="d-flex flex-between-center rounded-3 bg-light p-3 mb-2"><a href="#!">
                        <h6 class="mb-0"><span class="fas fa-circle fs--1 me-3 text-warning"></span>Create Mobile
                            View</h6>
                    </a><a class="fs--2 text-600 mb-0" href="#!">Mailbluster</a></div>
                <div class="d-flex flex-between-center rounded-3 bg-light p-3 mb-2"><a href="#!">
                        <h6 class="mb-0"><span class="fas fa-circle fs--1 me-3 text-secondary"></span>Create Landing
                            Pages</h6>
                    </a><a class="fs--2 text-600 mb-0" href="#!">BlackBOx</a></div>
                <div class="d-flex flex-between-center rounded-3 bg-light p-3"><a href="#!">
                        <h6 class="mb-0"><span class="fas fa-circle fs--1 me-3 text-info"></span>Front end issues
                        </h6>
                    </a><a class="fs--2 text-600 mb-0" href="#!">Falcon Team</a></div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-lg-6 order-xxl-1">
        <div class="card h-100">
            <div class="card-header">
                <h6 class="mb-0">Recent Activity</h6>
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
                                <p class="fs--1 text-600 mb-0">Fixed some bugs and spelling errors on this update
                                </p>
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
    <div class="col-xxl-4 col-lg-6 order-xxl-3">
        <div class="card h-100 members-activity">
            <div class="card-header bg-light py-2 d-flex flex-between-center">
                <h6 class="mb-0">Members Activity</h6>
                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                        class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                        type="button" id="dropdown-members-activity" data-bs-toggle="dropdown"
                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2"
                        aria-labelledby="dropdown-members-activity"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                    </div>
                </div>
            </div>
            <div class="card-body scrollbar-overlay">
                <div class="row g-2 mb-4">
                    <div class="col-12 d-flex align-items-center">
                        <div class="avatar avatar-xl rounded-circle">
                            <img class="rounded-circle" src="../assets/img/team/4-thumb.png" alt="" />
                        </div>
                        <h6 class="mb-0 ps-2">Chandler Bing</h6>
                    </div>
                    <div class="col-4 position-relative"><img class="w-100"
                            src="../assets/img/management/activity-1.png" alt="..." />
                        <div
                            class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-soft-danger">
                            20%</div>
                    </div>
                    <div class="col-4 position-relative"><img class="w-100"
                            src="../assets/img/management/activity-2.png" alt="..." />
                        <div
                            class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-soft-primary">
                            67%</div>
                    </div>
                    <div class="col-4 position-relative"><img class="w-100"
                            src="../assets/img/management/activity-3.png" alt="..." />
                        <div
                            class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-soft-success">
                            89%</div>
                    </div>
                </div>
                <div class="row g-2 mb-4">
                    <div class="col-12 d-flex align-items-center">
                        <div class="avatar avatar-xl rounded-circle">
                            <img class="rounded-circle" src="../assets/img/team/5-thumb.png" alt="" />
                        </div>
                        <h6 class="mb-0 ps-2">Jared Dunn</h6>
                    </div>
                    <div class="col-4 position-relative"><img class="w-100"
                            src="../assets/img/management/activity-4.png" alt="..." />
                        <div
                            class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-soft-success">
                            20%</div>
                    </div>
                    <div class="col-4 position-relative"><img class="w-100"
                            src="../assets/img/management/activity-5.png" alt="..." />
                        <div
                            class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-soft-danger">
                            67%</div>
                    </div>
                    <div class="col-4 position-relative"><img class="w-100"
                            src="../assets/img/management/activity-6.png" alt="..." />
                        <div
                            class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-soft-primary">
                            89%</div>
                    </div>
                </div>
                <div class="row g-2 mb-4">
                    <div class="col-12 d-flex align-items-center">
                        <div class="avatar avatar-xl rounded-circle">
                            <img class="rounded-circle" src="../assets/img/team/16.jpg" alt="" />
                        </div>
                        <h6 class="mb-0 ps-2">Monica Geller</h6>
                    </div>
                    <div class="col-4 position-relative"><img class="w-100"
                            src="../assets/img/management/activity-7.png" alt="..." />
                        <div
                            class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-soft-danger">
                            20%</div>
                    </div>
                    <div class="col-4 position-relative"><img class="w-100"
                            src="../assets/img/management/activity-8.png" alt="..." />
                        <div
                            class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-soft-success">
                            67%</div>
                    </div>
                    <div class="col-4 position-relative"><img class="w-100"
                            src="../assets/img/management/activity-9.png" alt="..." />
                        <div
                            class="badge rounded-pill position-absolute top-100 start-50 translate-middle badge-soft-primary">
                            89%</div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!">See all
                    projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
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
                                <th>Member info</th>
                                <th class="text-center">Attendance</th>
                                <th class="text-center">Today</th>
                                <th class="text-end">This Week</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-2xl status-online">
                                            <img class="rounded-circle" src="../assets/img/team/7.jpg" alt="" />
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Gavin Belson</a></h6>
                                            <p class="text-500 fs--2 mb-0">CRM dashboard design</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-warning">Late</small></td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-danger">12%</small>
                                    <p class="fs--2 mb-0">1h:52m </p>
                                </td>
                                <td class="align-middle">
                                    <div class="row g-2 justify-content-end">
                                        <div class="col-auto"><small
                                                class="badge fw-semi-bold rounded-pill badge-soft-primary">68%</small>
                                            <p class="fs--2 mb-0">1h:52m </p>
                                        </div>
                                        <div class="col-auto mt-auto">
                                            <div class="mb-1"
                                                data-echarts='{"tooltip":{"show":false},"series":[{"data":[15,22,28,20,20,35]}]}'>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-2xl status-online">
                                            <img class="rounded-circle" src="../assets/img/team/9.jpg" alt="" />
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Rsuss Hanneman</a></h6>
                                            <p class="text-500 fs--2 mb-0">Smart Learning Management</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-success">intime</small>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-success">86%</small>
                                    <p class="fs--2 mb-0">1h:52m </p>
                                </td>
                                <td class="align-middle">
                                    <div class="row g-2 justify-content-end">
                                        <div class="col-auto"><small
                                                class="badge fw-semi-bold rounded-pill badge-soft-warning">45%</small>
                                            <p class="fs--2 mb-0">1h:52m </p>
                                        </div>
                                        <div class="col-auto mt-auto">
                                            <div class="mb-1"
                                                data-echarts='{"tooltip":{"show":false},"series":[{"data":[30,20,40,18,20,35]}]}'>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-2xl status-away">
                                            <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Peter Gregory</a></h6>
                                            <p class="text-500 fs--2 mb-0">Graduate Network</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-success">intime</small>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-success">97%</small>
                                    <p class="fs--2 mb-0">1h:52m </p>
                                </td>
                                <td class="align-middle">
                                    <div class="row g-2 justify-content-end">
                                        <div class="col-auto"><small
                                                class="badge fw-semi-bold rounded-pill badge-soft-primary">60%</small>
                                            <p class="fs--2 mb-0">1h:52m </p>
                                        </div>
                                        <div class="col-auto mt-auto">
                                            <div class="mb-1"
                                                data-echarts='{"tooltip":{"show":false},"series":[{"data":[20,22,18,30,20,35]}]}'>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-2xl status-online">
                                            <img class="rounded-circle" src="../assets/img/team/avatar.png"
                                                alt="" />
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Jian-Yang</a></h6>
                                            <p class="text-500 fs--2 mb-0">Quality testing</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-success">intime</small>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-warning">34%</small>
                                    <p class="fs--2 mb-0">1h:52m </p>
                                </td>
                                <td class="align-middle">
                                    <div class="row g-2 justify-content-end">
                                        <div class="col-auto"><small
                                                class="badge fw-semi-bold rounded-pill badge-soft-success">80%</small>
                                            <p class="fs--2 mb-0">1h:52m </p>
                                        </div>
                                        <div class="col-auto mt-auto">
                                            <div class="mb-1"
                                                data-echarts='{"tooltip":{"show":false},"series":[{"data":[30,22,18,20,20,35]}]}'>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-bottom border-200">
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-2xl status-do-not-disturb">
                                            <img class="rounded-circle" src="../assets/img/team/16.jpg" alt="" />
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Laurie Bream</a></h6>
                                            <p class="text-500 fs--2 mb-0">Accounts</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-warning">Late</small></td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-primary">12%</small>
                                    <p class="fs--2 mb-0">1h:52m </p>
                                </td>
                                <td class="align-middle">
                                    <div class="row g-2 justify-content-end">
                                        <div class="col-auto"><small
                                                class="badge fw-semi-bold rounded-pill badge-soft-danger">68%</small>
                                            <p class="fs--2 mb-0">1h:52m </p>
                                        </div>
                                        <div class="col-auto mt-auto">
                                            <div class="mb-1"
                                                data-echarts='{"tooltip":{"show":false},"series":[{"data":[20,22,18,20,20,35]}]}'>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-2xl status-online">
                                            <img class="rounded-circle" src="../assets/img/team/25.jpg" alt="" />
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Fionna Mayer</a></h6>
                                            <p class="text-500 fs--2 mb-0">SAAS dashboard design</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-danger">Absent</small>
                                </td>
                                <td class="align-middle text-center"><small
                                        class="badge fw-semi-bold rounded-pill badge-soft-primary">12%</small>
                                    <p class="fs--2 mb-0">1h:52m </p>
                                </td>
                                <td class="align-middle">
                                    <div class="row g-2 justify-content-end">
                                        <div class="col-auto"><small
                                                class="badge fw-semi-bold rounded-pill badge-soft-success">68%</small>
                                            <p class="fs--2 mb-0">1h:52m </p>
                                        </div>
                                        <div class="col-auto mt-auto">
                                            <div class="mb-1"
                                                data-echarts='{"tooltip":{"show":false},"series":[{"data":[30,22,18,30,20,35]}]}'>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light py-2">
                <div class="row flex-between-center">
                    <div class="col-auto"><select class="form-select form-select-sm">
                            <option>Last 7 days</option>
                            <option>Last Month</option>
                            <option>Last Year</option>
                        </select></div>
                    <div class="col-auto"><a class="btn btn-sm btn-link px-0 fw-medium" href="#!">View All<span
                                class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 order-xxl-3">
        <div class="card" id="runningProjectTable" data-list='{"valueNames":["projects","worked","time","date"]}'>
            <div class="card-header">
                <h6 class="mb-0">Running Projects</h6>
            </div>
            <div class="card-body p-0">
                <div class="scrollbar">
                    <table
                        class="table mb-0 table-borderless fs--2 border-200 overflow-hidden table-running-project">
                        <thead class="bg-light">
                            <tr class="text-800">
                                <th class="sort" data-sort="projects">Projects</th>
                                <th class="sort text-center" data-sort="worked">Worked</th>
                                <th class="sort text-center" data-sort="time">Progress</th>
                                <th class="sort text-center" data-sort="date">Due Date</th>
                                <th class="text-end">Members</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div
                                                class="avatar-name rounded-circle text-primary bg-soft-primary fs-0">
                                                <span>C</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">CRM dashboard design</a></h6>
                                            <p class="text-500 fs--2 mb-0">Falcon</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill"
                                            role="progressbar" style="width: 50%" aria-valuenow="43.72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">12h:50m:00s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">01/02/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/1-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/2-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <div class="avatar-name rounded-circle "><span>+2</span></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div
                                                class="avatar-name rounded-circle text-success bg-soft-success fs-0">
                                                <span>U</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">UI/UX Redesign</a></h6>
                                            <p class="text-500 fs--2 mb-0">Themewagon</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill"
                                            role="progressbar" style="width: 70%" aria-valuenow="43.72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">11h:50m:00s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">04/02/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/3-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/4-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <div class="avatar-name rounded-circle "><span>+5</span></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div class="avatar-name rounded-circle text-info bg-soft-info fs-0">
                                                <span>F</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">F.A.Q Section</a></h6>
                                            <p class="text-500 fs--2 mb-0">Mailbluster</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill"
                                            role="progressbar" style="width: 60%" aria-valuenow="43.72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">3h:30m:50s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">01/02/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/5-thumb.png"
                                                alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/7.jpg" alt="" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div
                                                class="avatar-name rounded-circle text-warning bg-soft-warning fs-0">
                                                <span>D</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Drip Campaign Feature</a></h6>
                                            <p class="text-500 fs--2 mb-0">Themewagon</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill"
                                            role="progressbar" style="width: 80%" aria-valuenow="43.72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">12h:20m:00s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">22/03/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/7.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <div class="avatar-name rounded-circle "><span>+2</span></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div class="avatar-name rounded-circle text-danger bg-soft-danger fs-0">
                                                <span>S</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Studio Recording</a></h6>
                                            <p class="text-500 fs--2 mb-0">Mailbluster Marketing</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill"
                                            role="progressbar" style="width: 40%" aria-valuenow="43.72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">11h:10m:00s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">28/02/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="avatar avatar-xl">
                                            <div
                                                class="avatar-name rounded-circle text-success bg-soft-success fs-0">
                                                <span>P</span></div>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                    href="../pages/user/profile.html">Project Managenemt</a></h6>
                                            <p class="text-500 fs--2 mb-0">Themewagon</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="progress rounded-3 worked" style="height: 6px;">
                                        <div class="progress-bar bg-progress-gradient rounded-pill"
                                            role="progressbar" style="width: 50%" aria-valuenow="43.72"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="align-middle text-center time">
                                    <p class="fs--1 mb-0 fw-semi-bold">12h:30m:30s</p>
                                </td>
                                <td class="align-middle text-center date">
                                    <p class="fs--1 mb-0 fw-semi-bold">08/01/22</p>
                                </td>
                                <td>
                                    <div class="avatar-group justify-content-end">
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/16.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/25.jpg" alt="" />
                                        </div>
                                        <div class="avatar avatar-xl border border-3 border-light rounded-circle">
                                            <img class="rounded-circle" src="../assets/img/team/18.jpg" alt="" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light py-0 text-center"><a class="btn btn-sm btn-link py-2" href="#!">Show
                    All Projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
        </div>
    </div>
</div>
<div class="row g-3">
    <div class="col-xxl-8">
        <div class="card overflow-hidden h-100">
            <div class="card-body p-0 management-calendar">
                <div class="row g-3">
                    <div class="col-md-7">
                        <div class="p-card">
                            <div class="d-flex justify-content-between">
                                <div class="order-md-1"><button class="btn btn-sm border me-1 shadow-sm"
                                        type="button" data-event="prev" data-bs-toggle="tooltip"
                                        title="Previous"><span class="fas fa-chevron-left"></span></button><button
                                        class="btn btn-sm text-secondary border px-sm-4 shadow-sm" type="button"
                                        data-event="today">Today</button><button
                                        class="btn btn-sm border ms-1 shadow-sm" type="button" data-event="next"
                                        data-bs-toggle="tooltip" title="Next"><span
                                            class="fas fa-chevron-right"></span></button></div><button
                                    class="btn btn-sm text-primary border order-md-0" type="button"
                                    data-bs-toggle="modal" data-bs-target="#addEventModal"> <span
                                        class="fas fa-plus me-2"></span>New Schedule</button>
                            </div>
                        </div>
                        <!-- Find the JS file for the following calendar at: src/js/calendar/management-calendar.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="calendar-outline px-3" id="managementAppCalendar"
                            data-calendar-option='{"title":"management-calendar-title","day":"management-calendar-day","events":"management-calendar-events"}'>
                        </div>
                    </div>
                    <div class="col-md-5 bg-light pt-3">
                        <div class="px-3">
                            <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2" id="management-calendar-title"></h4>
                            <p class="text-500 mb-0" id="management-calendar-day"></p>
                            <ul class="list-unstyled mt-3 scrollbar management-calendar-events"
                                id="management-calendar-events"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4">
        <div class="card h-100">
            <div class="card-header">
                <h6 class="mb-0">To Do List</h6>
            </div>
            <div class="card-body p-0 scrollbar to-do-list-body-height">
                <div
                    class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                    <div class="form-check mb-0 d-flex align-items-center"><input
                            class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-primary"
                            type="checkbox" id="checkbox-todo-0" /><label class="form-check-label mb-0 p-3"
                            for="checkbox-todo-0">Design a facebook ad</label></div>
                    <div class="d-flex align-items-center">
                        <div class="hover-actions"><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-clock"></span></button><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-user-plus"> </span></button></div>
                        <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                                type="button" id="management-to-do-list-0" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="management-to-do-list-0"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                    <div class="form-check mb-0 d-flex align-items-center"><input
                            class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-secondary"
                            type="checkbox" id="checkbox-todo-1" /><label class="form-check-label mb-0 p-3"
                            for="checkbox-todo-1">Analyze Data</label></div>
                    <div class="d-flex align-items-center">
                        <div class="hover-actions"><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-clock"></span></button><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-user-plus"> </span></button></div>
                        <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                                type="button" id="management-to-do-list-1" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="management-to-do-list-1"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                    <div class="form-check mb-0 d-flex align-items-center"><input
                            class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-success"
                            type="checkbox" id="checkbox-todo-2" /><label class="form-check-label mb-0 p-3"
                            for="checkbox-todo-2">Youtube campaign</label></div>
                    <div class="d-flex align-items-center">
                        <div class="hover-actions"><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-clock"></span></button><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-user-plus"> </span></button></div>
                        <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                                type="button" id="management-to-do-list-2" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="management-to-do-list-2"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                    <div class="form-check mb-0 d-flex align-items-center"><input
                            class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-warning"
                            type="checkbox" id="checkbox-todo-3" /><label class="form-check-label mb-0 p-3"
                            for="checkbox-todo-3">Assign 10 employee</label></div>
                    <div class="d-flex align-items-center">
                        <div class="hover-actions"><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-clock"></span></button><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-user-plus"> </span></button></div>
                        <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                                type="button" id="management-to-do-list-3" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="management-to-do-list-3"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                    <div class="form-check mb-0 d-flex align-items-center"><input
                            class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-danger"
                            type="checkbox" id="checkbox-todo-4" /><label class="form-check-label mb-0 p-3"
                            for="checkbox-todo-4">Meeting at 12</label></div>
                    <div class="d-flex align-items-center">
                        <div class="hover-actions"><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-clock"></span></button><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-user-plus"> </span></button></div>
                        <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                                type="button" id="management-to-do-list-4" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="management-to-do-list-4"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item border-bottom">
                    <div class="form-check mb-0 d-flex align-items-center"><input
                            class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-info"
                            type="checkbox" id="checkbox-todo-5" /><label class="form-check-label mb-0 p-3"
                            for="checkbox-todo-5">Meeting at 10</label></div>
                    <div class="d-flex align-items-center">
                        <div class="hover-actions"><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-clock"></span></button><button
                                class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span
                                    class="fas fa-user-plus"> </span></button></div>
                        <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none"
                                type="button" id="management-to-do-list-5" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="management-to-do-list-5"><a class="dropdown-item"
                                    href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!"><span
                        class="fas fa-plus me-1 fs--2"></span>Add New Task</a></div>
        </div>
    </div>
</div>
@endsection
