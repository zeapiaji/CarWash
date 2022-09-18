@extends('admin.app')
@section('dashboard')

<div class="row g-3 mb-3">
    <div class="col-xxl-8">
      <div class="card overflow-hidden mb-3">
        <div class="card-header audience-chart-header p-0 bg-light scrollbar-overlay">
          <ul class="nav nav-tabs border-0 chart-tab flex-nowrap" id="audience-chart-tab" role="tablist">
            <li class="nav-item" role="presentation"><a class="nav-link mb-0 active" id="users-tab" data-bs-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="true">
                <div class="audience-tab-item p-2 pe-4">
                  <h6 class="text-800 fs--2 text-nowrap">Users</h6>
                  <h5 class="text-800">3.9K</h5>
                  <div class="d-flex align-items-center"><span class="fas fa-caret-up text-success"></span>
                    <h6 class="fs--2 mb-0 ms-2 text-success">62.0%</h6>
                  </div>
                </div>
              </a></li>
            <li class="nav-item" role="presentation"><a class="nav-link mb-0" id="sessions-tab" data-bs-toggle="tab" href="#sessions" role="tab" aria-controls="sessions" aria-selected="false">
                <div class="audience-tab-item p-2 pe-4">
                  <h6 class="text-800 fs--2 text-nowrap">Sessions</h6>
                  <h5 class="text-800">6.3K</h5>
                  <div class="d-flex align-items-center"><span class="fas fa-caret-up text-success"></span>
                    <h6 class="fs--2 mb-0 ms-2 text-success">46.2%</h6>
                  </div>
                </div>
              </a></li>
            <li class="nav-item" role="presentation"><a class="nav-link mb-0" id="rate-tab" data-bs-toggle="tab" href="#rate" role="tab" aria-controls="rate" aria-selected="false">
                <div class="audience-tab-item p-2 pe-4">
                  <h6 class="text-800 fs--2 text-nowrap">Bounce Rate</h6>
                  <h5 class="text-800">9.49%</h5>
                  <div class="d-flex align-items-center"><span class="fas fa-caret-down text-warning"></span>
                    <h6 class="fs--2 mb-0 ms-2 text-warning">56.1%</h6>
                  </div>
                </div>
              </a></li>
            <li class="nav-item" role="presentation"><a class="nav-link mb-0" id="duration-tab" data-bs-toggle="tab" href="#duration" role="tab" aria-controls="duration" aria-selected="false">
                <div class="audience-tab-item p-2 pe-4">
                  <h6 class="text-800 fs--2 text-nowrap">Session Duration</h6>
                  <h5 class="text-800">4m 03s</h5>
                  <div class="d-flex align-items-center"><span class="fas fa-caret-down text-warning"></span>
                    <h6 class="fs--2 mb-0 ms-2 text-warning">32.2%</h6>
                  </div>
                </div>
              </a></li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="users" role="tabpanel" aria-labelledby="users-tab">
              <!-- Find the JS file for the following chart at: src/js/charts/echarts/audience.js-->
              <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
              <div class="echart-audience" data-echart-responsive="true" style="height:320px;"></div>
            </div>
            <div class="tab-pane" id="sessions" role="tabpanel" aria-labelledby="sessions-tab">
              <div class="echart-audience" data-echart-responsive="true" style="height:320px;"></div>
            </div>
            <div class="tab-pane" id="rate" role="tabpanel" aria-labelledby="rate-tab">
              <div class="echart-audience" data-echart-responsive="true" style="height:320px;"></div>
            </div>
            <div class="tab-pane" id="duration" role="tabpanel" aria-labelledby="duration-tab">
              <div class="echart-audience" data-echart-responsive="true" style="height:320px;"></div>
            </div>
          </div>
        </div>
        <div class="card-footer bg-light py-2">
          <div class="row flex-between-center g-0">
            <div class="col-auto"><select class="form-select form-select-sm audience-select-menu">
                <option value="week" selected="selected">Last 7 days</option>
                <option value="month">Last month</option>
              </select></div>
            <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Visitors overview<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-5.png);"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
          <div class="row g-2 align-items-sm-center">
            <div class="col-auto"><img src="../assets/img/icons/connect-circle.png" alt="" height="55" /></div>
            <div class="col">
              <div class="row align-items-center">
                <div class="col col-lg-8">
                  <h5 class="fs-0 mb-3 mb-sm-0 text-primary">Connect your domain to your website and get things done faster with Falcon</h5>
                </div>
                <div class="col-12 col-sm-auto ms-auto"><button class="btn btn-falcon-primary" type="button">Connect</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-4">
      <div class="card h-100 bg-line-chart-gradient">
        <div class="card-header bg-transparent light">
          <h5 class="text-white">Users online right now</h5>
          <div class="real-time-user display-1 fw-normal text-white" data-countup='{"endValue":119}'>0</div>
        </div>
        <div class="card-body text-white fs--1 light pb-0">
          <p class="border-bottom pb-2" style="border-color: rgba(255, 255, 255, 0.15) !important">Page views / second</p><!-- Find the JS file for the following chart at: src/js/charts/echarts/real-time-users.js-->
          <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
          <div class="echart-real-time-users" style="height:150px" data-echart-responsive="true"></div>
          <div class="list-group-flush mt-4">
            <div class="rounded-2" style="border:1px solid rgba(255, 255, 255, 0.15)">
              <div class="px-3 bg-transparent text-white d-flex justify-content-between px-0 py-1 fw-semi-bold border-top-0" style="border-bottom:1px solid rgba(255, 255, 255, 0.15)">
                <p class="mb-0">Most Active Pages</p>
                <p class="mb-0">User Count</p>
              </div>
              <div class="px-3 bg-transparent text-white d-flex justify-content-between px-0 py-1" style="border-bottom:1px solid rgba(255, 255, 255, 0.05)">
                <p class="mb-0">/bootstrap-themes/</p>
                <p class="mb-0">3</p>
              </div>
              <div class="px-3 bg-transparent text-white d-flex justify-content-between px-0 py-1" style="border-bottom:1px solid rgba(255, 255, 255, 0.05)">
                <p class="mb-0">/tags/html5/</p>
                <p class="mb-0">3</p>
              </div>
              <div class="px-3 bg-transparent text-white d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-bottom:1px solid rgba(255, 255, 255, 0.05)">
                <p class="mb-0">/</p>
                <p class="mb-0">2</p>
              </div>
              <div class="px-3 bg-transparent text-white d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-bottom:1px solid rgba(255, 255, 255, 0.05)">
                <p class="mb-0">/preview/falcon/dashboard/</p>
                <p class="mb-0">2</p>
              </div>
              <div class="px-3 bg-transparent text-white d-flex justify-content-between px-0 py-1" style="border-bottom:1px solid rgba(255, 255, 255, 0.05)">
                <p class="mb-0">/100-best-themes...all-time/</p>
                <p class="mb-0">1</p>
              </div>
              <div class="px-3 bg-transparent text-white d-flex justify-content-between px-0 py-1" style="border-bottom:1px solid rgba(255, 255, 255, 0.05)">
                <p class="mb-0">/product/falcon-admin-dashboard/</p>
                <p class="mb-0">1</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-end bg-transparent light"><a class="text-white" href="#!">Real-time data<span class="fa fa-chevron-right ms-1 fs--1"></span></a></div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-4">
      <div class="card echart-session-by-browser-card h-100">
        <div class="card-header d-flex flex-between-center bg-light py-2">
          <h6 class="mb-0">Session By Browser</h6>
          <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-session-by-browser" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-session-by-browser"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
            </div>
          </div>
        </div>
        <div class="card-body d-flex flex-column justify-content-between py-0">
          <div class="my-auto py-5 py-md-0">
            <!-- Find the JS file for the following chart at: src/js/charts/echarts/session-by-browser.js-->
            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
            <div class="echart-session-by-browser h-100" data-echart-responsive="true"></div>
          </div>
          <div class="border-top">
            <table class="table table-sm mb-0">
              <tbody>
                <tr>
                  <td class="py-3">
                    <div class="d-flex align-items-center"><img src="../assets/img/icons/chrome-logo.png" alt="" width="16" />
                      <h6 class="text-600 mb-0 ms-2">Chrome</h6>
                    </div>
                  </td>
                  <td class="py-3">
                    <div class="d-flex align-items-center"><span class="fas fa-circle fs--2 me-2 text-primary"></span>
                      <h6 class="fw-normal text-700 mb-0">50.3%</h6>
                    </div>
                  </td>
                  <td class="py-3">
                    <div class="d-flex align-items-center justify-content-end"><span class="fas fa-caret-down text-danger"></span>
                      <h6 class="fs--2 mb-0 ms-2 text-700">2.9%</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <div class="d-flex align-items-center"><img src="../assets/img/icons/safari-logo.png" alt="" width="16" />
                      <h6 class="text-600 mb-0 ms-2">Safari</h6>
                    </div>
                  </td>
                  <td class="py-3">
                    <div class="d-flex align-items-center"><span class="fas fa-circle fs--2 me-2 text-success"></span>
                      <h6 class="fw-normal text-700 mb-0">30.1%</h6>
                    </div>
                  </td>
                  <td class="py-3">
                    <div class="d-flex align-items-center justify-content-end"><span class="fas fa-caret-up text-success"></span>
                      <h6 class="fs--2 mb-0 ms-2 text-700">29.4%</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <div class="d-flex align-items-center"><img src="../assets/img/icons/firefox-logo.png" alt="" width="16" />
                      <h6 class="text-600 mb-0 ms-2">Mozilla</h6>
                    </div>
                  </td>
                  <td class="py-3">
                    <div class="d-flex align-items-center"><span class="fas fa-circle fs--2 me-2 text-info"></span>
                      <h6 class="fw-normal text-700 mb-0">20.6%</h6>
                    </div>
                  </td>
                  <td class="py-3">
                    <div class="d-flex align-items-center justify-content-end"><span class="fas fa-caret-up text-success"></span>
                      <h6 class="fs--2 mb-0 ms-2 text-700">220.7%</h6>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer bg-light py-2">
          <div class="row flex-between-center g-0">
            <div class="col-auto"><select class="form-select form-select-sm" data-target=".echart-session-by-browser">
                <option value="week" selected="selected">Last 7 days</option>
                <option value="month">Last month</option>
                <option value="year">Last Year</option>
              </select></div>
            <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Browser overview<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-4">
      <div class="card">
        <div class="card-header d-flex align-items-center bg-light py-2">
          <h6 class="mb-0 flex-1">Users By Country</h6>
          <div class="btn-reveal-trigger"><button class="btn btn-link btn-reveal btn-sm session-by-country-map-reset" type="button"><span class="fas fa-sync-alt fs--1"></span></button></div>
          <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-session-by-country" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-session-by-country"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- Find the JS file for the following chart at: src/js/charts/echarts/session-by-country-map.js-->
          <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
          <div class="echart-session-by-country-map w-100 h-100" data-echart-responsive="true"></div><!-- Find the JS file for the following chart at: src/js/charts/echarts/session-by-country.js-->
          <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
          <div class="echart-session-by-country h-100" data-echart-responsive="true"></div>
        </div>
        <div class="card-footer bg-light py-2">
          <div class="row flex-between-center g-0">
            <div class="col-auto"><select class="form-select form-select-sm audience-select-menu">
                <option value="week" selected="selected">Last 7 days</option>
                <option value="month">Last month</option>
                <option value="year">Last Year</option>
              </select></div>
            <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Country overview<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-4">
      <div class="card h-100">
        <div class="card-header">
          <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/signal.png" alt="" height="35" />
            <h5 class="fs-0 fw-normal text-800 mb-0">Ask Falcon Intelligence</h5>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="scrollbar-overlay pt-0 px-card ask-analytics">
            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
              <div class="d-flex align-items-center mb-3"><span class="fas fa-code-branch text-primary"></span><a class="stretched-link text-decoration-none" href="#!">
                  <h5 class="fs--1 text-600 mb-0 ps-3">Content Analysis</h5>
                </a></div>
              <h5 class="fs--1 text-800">Which landing pages with over 10 sessions have the worst bounce rates?</h5>
            </div>
            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
              <div class="d-flex align-items-center mb-3"><span class="fas fa-bug text-primary"></span><a class="stretched-link text-decoration-none" href="#!">
                  <h5 class="fs--1 text-600 mb-0 ps-3">Technical performance</h5>
                </a></div>
              <h5 class="fs--1 text-800">Show me a trend of my average page load time over the last 3 months</h5>
            </div>
            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
              <div class="d-flex align-items-center mb-3"><span class="fas fa-project-diagram text-primary"></span><a class="stretched-link text-decoration-none" href="#!">
                  <h5 class="fs--1 text-600 mb-0 ps-3">Technical performance</h5>
                </a></div>
              <h5 class="fs--1 text-800">What are my top default channel groupings by user?</h5>
            </div>
            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
              <div class="d-flex align-items-center mb-3"><span class="fas fa-map-marker-alt text-primary"></span><a class="stretched-link text-decoration-none" href="#!">
                  <h5 class="fs--1 text-600 mb-0 ps-3">Geographic Analysis</h5>
                </a></div>
              <h5 class="fs--1 text-800">What pages do people from California go to the most?</h5>
            </div>
          </div>
        </div>
        <div class="card-footer bg-light text-end me-1 py-2"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">More Insights<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
      </div>
    </div>
  </div>
  <div class="row g-3 mb-3">
    <div class="col-lg-7">
      <div class="card mb-3">
        <div class="card-header d-flex flex-between-center bg-light py-2">
          <h6 class="mb-0">Active Users</h6>
          <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-active-user-report" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user-report"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-auto mt-md-0">
              <div class="row flex-md-column justify-content-between h-md-100 ms-0">
                <div class="col border-end border-md-end-0 border-md-bottom pt-3">
                  <h6 class="fs--2 text-700"><span class="fas fa-circle text-primary me-2"></span>Mobile</h6>
                  <h5 class="text-700 fs-0">10,325</h5>
                </div>
                <div class="col border-end border-md-end-0 border-md-bottom pt-3 pt-md-4">
                  <h6 class="fs--2 text-700"><span class="fas fa-circle text-success me-2"></span>Desktop</h6>
                  <h5 class="text-700 fs-0">4,235</h5>
                </div>
                <div class="col pt-3 pt-md-4">
                  <h6 class="fs--2 text-700"><span class="fas fa-circle text-info me-2"></span>Tablet</h6>
                  <h5 class="text-700 fs-0">3,575</h5>
                </div>
              </div>
            </div>
            <div class="col-md-auto echart-active-users-report-container">
              <!-- Find the JS file for the following chart at: src/js/charts/echarts/active-users-report.js-->
              <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
              <div class="echart-active-users-report h-100" data-echart-responsive="true"></div>
            </div>
          </div>
        </div>
        <div class="card-footer bg-light py-2">
          <div class="row flex-between-center g-0">
            <div class="col-auto"><select class="form-select form-select-sm audience-select-menu">
                <option value="week" selected="selected">Last 7 days</option>
                <option value="month">Last month</option>
                <option value="year">Last Year</option>
              </select></div>
            <div class="col-auto">
              <h6 class="mb-0"><a class="py-2" href="#!">Active users report<span class="fas fa-chevron-right ms-1 fs--2"></span></a></h6>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body py-5 py-sm-3">
          <div class="row g-5 g-sm-0">
            <div class="col-sm-4">
              <div class="border-sm-end border-300">
                <div class="text-center">
                  <h6 class="text-700">Completed Goals</h6>
                  <h3 class="fw-normal text-700">1727</h3>
                </div>
                <div class="echart-goal-charts" data-echart-responsive="true" data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[172,129,123,158,196,106,187,198,152,175,178,165,188,139,115,131,143,140,112,167,180,156,121,190,100],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"16px","left":"0","bottom":"0","top":"0"}}'></div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="border-sm-end border-300">
                <div class="text-center">
                  <h6 class="text-700">Value</h6>
                  <h3 class="fw-normal text-700">$34.2M</h3>
                </div>
                <div class="echart-goal-charts" data-echart-responsive="true" data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[170,156,171,193,108,178,163,175,117,123,174,199,122,111,113,140,192,167,186,172,131,187,135,115,118],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"16px","left":"16px","bottom":"0","top":"0"}}'></div>
              </div>
            </div>
            <div class="col-sm-4">
              <div>
                <div class="text-center">
                  <h6 class="text-700">Conversion Rate</h6>
                  <h3 class="fw-normal text-700">19.67%</h3>
                </div>
                <div class="echart-goal-charts" data-echart-responsive="true" data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[199,181,155,164,108,158,117,148,121,152,189,116,111,130,113,171,193,104,110,153,190,162,180,114,183],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"0","left":"16px","bottom":"0","top":"0"}}'></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card h-100">
        <div class="card-header d-flex flex-between-center bg-light py-2">
          <h6 class="mb-0">Ad campaigns perfomance</h6>
          <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-campaign-perfomance" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-campaign-perfomance"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
            </div>
          </div>
        </div>
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-6">
              <div>
                <h6 class="text-700">Revenue</h6>
                <h3 class="fw-normal text-700">$10.87k</h3>
              </div>
              <div class="w-100" style="min-height:50px;" data-echart-responsive="true" data-echarts='{"series":[{"type":"line","data":[101,165,140,162,121,190,139],"symbol":"none","color":"#f5803e","areaStyle":{"color":{"type":"linear","x":0,"y":0,"x2":0,"y2":1,"colorStops":[{"offset":0,"color":"rgba(245, 128, 62, .25)"},{"offset":1,"color":"rgba(245, 128, 62, 0)"}]}}}],"xAxis":{"boundaryGap":false},"grid":{"right":"20px","left":"0","bottom":"0","top":"20px"}}'></div>
            </div>
            <div class="col-6">
              <div>
                <h6 class="text-700">Clicks</h6>
                <h3 class="fw-normal text-700">3.8k</h3>
              </div>
              <div class="w-100" style="min-height:50px;" data-echart-responsive="true" data-echarts='{"series":[{"type":"line","data":[119,199,195,101,155,131,180],"symbol":"none"}],"xAxis":{"boundaryGap":false},"grid":{"right":"20px","left":"0","bottom":"0","top":"20px"}}'></div>
            </div>
          </div>
          <div class="mx-ncard">
            <div class="table-responsive scrollbar">
              <table class="table fs--1 mb-0 overflow-hidden">
                <thead class="bg-100 text-800">
                  <tr>
                    <th class="text-nowrap">Top Campaigns</th>
                    <th class="text-nowrap text-end">Cost</th>
                    <th class="text-nowrap text-end">Revenue from Ads</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-truncate">Black Friday Sale</td>
                    <td class="text-truncate text-end">$1304.28</td>
                    <td class="text-truncate text-end">$543217.65</td>
                  </tr>
                  <tr>
                    <td class="text-truncate">Christmas Bundle</td>
                    <td class="text-truncate text-end">$9876.56</td>
                    <td class="text-truncate text-end">$3904</td>
                  </tr>
                  <tr>
                    <td class="text-truncate">Halloween Party Started 🎃 👻</td>
                    <td class="text-truncate text-end">$3267.84</td>
                    <td class="text-truncate text-end">$7654.8</td>
                  </tr>
                  <tr>
                    <td class="text-truncate">Grab your reward</td>
                    <td class="text-truncate text-end">$87545.28</td>
                    <td class="text-truncate text-end">$68654.35</td>
                  </tr>
                  <tr>
                    <td class="text-truncate">Black Friday Sale</td>
                    <td class="text-truncate text-end">$1304.28</td>
                    <td class="text-truncate text-end">$3904</td>
                  </tr>
                  <tr>
                    <td class="text-truncate">Boxing Day offer</td>
                    <td class="text-truncate text-end">$1200.5</td>
                    <td class="text-truncate text-end">$5004.87</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card-footer bg-light py-2">
          <div class="row flex-between-center">
            <div class="col-auto"><select class="form-select form-select-sm audience-select-menu">
                <option value="week" selected="selected">Last 7 days</option>
                <option value="month">Last month</option>
                <option value="year">Last Year</option>
              </select></div>
            <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Ad campaigns<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row g-3 mb-3">
    <div class="col-lg-5 col-xxl-4">
      <div class="card">
        <div class="card-header bg-light py-3">
          <h6 class="mb-0">Users at a Time</h6>
        </div>
        <div class="card-body">
          <!-- Find the JS file for the following chart at: src/js/charts/echarts/users-by-time.js-->
          <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
          <div class="echart-users-by-time h-100" data-echart-responsive="true"></div>
        </div>
        <div class="card-footer bg-light py-2">
          <div class="row flex-between-center">
            <div class="col-auto"><select class="form-select form-select-sm audience-select-menu">
                <option value="week" selected="selected">Last 7 days</option>
                <option value="month">Last month</option>
                <option value="year">Last Year</option>
              </select></div>
            <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Overview<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-xxl-8">
      <div class="card h-100" id="table" data-list='{"valueNames":["path","views","time","exitRate"],"page":8,"pagination":true,"fallback":"pages-table-fallback"}'>
        <div class="card-header">
          <div class="row flex-between-center">
            <div class="col-auto col-sm-6 col-lg-7">
              <h6 class="mb-0 text-nowrap py-2 py-xl-0">What are my top pages today?</h6>
            </div>
            <div class="col-auto col-sm-6 col-lg-5">
              <div class="h-100">
                <form>
                  <div class="input-group"><input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search for a page" aria-label="search" />
                    <div class="input-group-text bg-transparent"><span class="fa fa-search fs--1 text-600"></span></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 py-0">
          <div class="table-responsive scrollbar">
            <table class="table fs--1 mb-0 overflow-hidden">
              <thead class="bg-200 text-900">
                <tr>
                  <th class="sort pe-1 align-middle white-space-nowrap" data-sort="path">Page Path</th>
                  <th class="sort pe-1 align-middle white-space-nowrap text-end" data-sort="views">Page Views</th>
                  <th class="sort pe-1 align-middle white-space-nowrap text-end" data-sort="time">Avg Time on Page</th>
                  <th class="sort pe-card align-middle white-space-nowrap text-end" data-sort="exitRate">Exit Rate</th>
                </tr>
              </thead>
              <tbody class="list">
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/sparrow/landing-page</a></td>
                  <td class="align-middle white-space-nowrap views text-end">1455</td>
                  <td class="align-middle white-space-nowrap time text-end">2m:25s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">20.4%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/falcon/pages/starter.html</a></td>
                  <td class="align-middle white-space-nowrap views text-end">1422</td>
                  <td class="align-middle white-space-nowrap time text-end">2m:14s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">52.4%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/pages/falcon-webapp-theme</a></td>
                  <td class="align-middle white-space-nowrap views text-end">1378</td>
                  <td class="align-middle white-space-nowrap time text-end">2m:23s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">25.1%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/product/sparrow-bootstrap-theme</a></td>
                  <td class="align-middle white-space-nowrap views text-end">1144</td>
                  <td class="align-middle white-space-nowrap time text-end">2m:2s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">6.3%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/themes/falcon/components</a></td>
                  <td class="align-middle white-space-nowrap views text-end">11047</td>
                  <td class="align-middle white-space-nowrap time text-end">1m:16s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">49.3%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/themewagon.com/themes/free-website-template</a></td>
                  <td class="align-middle white-space-nowrap views text-end">1007</td>
                  <td class="align-middle white-space-nowrap time text-end">0m:34s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">35.9%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/mailbluster.com/about</a></td>
                  <td class="align-middle white-space-nowrap views text-end">997</td>
                  <td class="align-middle white-space-nowrap time text-end">1m:5s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">87.3%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/technext.it/services</a></td>
                  <td class="align-middle white-space-nowrap views text-end">983</td>
                  <td class="align-middle white-space-nowrap time text-end">1m:16s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">74.3%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/themewagon.com/themes/free-website-template</a></td>
                  <td class="align-middle white-space-nowrap views text-end">971</td>
                  <td class="align-middle white-space-nowrap time text-end">1m:06s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">49.3%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/blog/mailbluster-vs-sendy</a></td>
                  <td class="align-middle white-space-nowrap views text-end">996</td>
                  <td class="align-middle white-space-nowrap time text-end">1m:26s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">4.3%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/blog/mailbluster-vs-emailoctopus</a></td>
                  <td class="align-middle white-space-nowrap views text-end">890</td>
                  <td class="align-middle white-space-nowrap time text-end">1m:19s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">49.3%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/themewagon.com/themes/bootstrap-template</a></td>
                  <td class="align-middle white-space-nowrap views text-end">11047</td>
                  <td class="align-middle white-space-nowrap time text-end">1m:16s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">21.5%</td>
                </tr>
                <tr class="btn-reveal-trigger">
                  <td class="align-middle white-space-nowrap path"><a class="text-primary fw-semi-bold" href="#!">/themewagon.com/themes/free-website-template</a></td>
                  <td class="align-middle white-space-nowrap views text-end">11047</td>
                  <td class="align-middle white-space-nowrap time text-end">0m:54s</td>
                  <td class="align-middle text-end exitRate text-end pe-card">62.5%</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="text-center d-none" id="pages-table-fallback">
            <p class="fw-bold fs-1 mt-3">No Page found</p>
          </div>
        </div>
        <div class="card-footer">
          <div class="row align-items-center">
            <div class="pagination d-none"></div>
            <div class="col">
              <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
            </div>
            <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row g-3 mb-3">
    <div class="col-lg-5 col-xxl-6">
      <div class="card">
        <div class="card-header">
          <h5 class="text-900 fs-0 mb-2">Trend of Bounce Rate</h5>
          <h6 class="mb-0 fs--2 text-500">Nov 1, 2020–Jan 31, 2021</h6>
        </div>
        <div class="card-body">
          <!-- Find the JS file for the following chart at: src/js/charts/echarts/bounce-rate.js-->
          <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
          <div class="echart-bounce-rate h-100" data-echart-responsive="true"></div>
        </div>
        <div class="card-footer bg-light py-2">
          <div class="row flex-between-center g-0">
            <div class="col-auto"><select class="form-select form-select-sm" data-target=".echart-bounce-rate">
                <option value="week">Last 7 days</option>
                <option value="month" selected="selected">Last month</option>
              </select></div>
            <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">View full report<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-xxl-6">
      <div class="card">
        <div class="card-header d-flex flex-between-center bg-light py-2">
          <h6 class="mb-0">Traffic source</h6>
          <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-traffic-channel" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-traffic-channel"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- Find the JS file for the following chart at: src/js/charts/echarts/traffic-channels.js-->
          <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
          <div class="echart-traffic-channels h-100" data-echart-responsive="true"></div>
        </div>
        <div class="card-footer bg-light py-2">
          <div class="row flex-between-center g-0">
            <div class="col-auto"><select class="form-select form-select-sm audience-select-menu">
                <option value="week" selected="selected">Last 7 days</option>
                <option value="month">Last month</option>
                <option value="year">Last Year</option>
              </select></div>
            <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Acquisition overview<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
