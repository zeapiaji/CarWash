@include('member.partials.head')
@include('member.partials.js')
@extends('staff.layouts.app')
@section('content')
@include('staff.partials.menu')

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col d-none d-sm-block">
                <span class="fas fa-users" style="color: #344050; font-size:20px;"></span>
                <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Kelola Paket Pencucian</h4>
            </div>
            <div class="col-auto d-none d-sm-block">
                <a href="/add/pricing" class="btn btn-falcon-default btn-sm mx-2">Tambah Paket</a>
                <h6 class="d-none d-sm-inline-block ms-1">Total Admin</h6>
                <span class="fw-bolder mx-1" style="font-size:20px">|</span>
            </div>
        </div>
    </div>
</div>

<div class="card p-4">
    <div id="pricing-plan" class="pricing-plan-main-block">
        <div class="pricing-plan-tab text-center align-item-center">
            <ul class="nav nav-tabs" role="tablist">
                @foreach ($carType as $item)
                <li role="presentation"><a href="#plan-{{$item->id}}" aria-controls="plan-{{$item->id}}" role="tab"
                        data-toggle="tab"><span>
                            <i class="icon-{{$item->id}}"></i>
                        </span>{{$item->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="plan-1">
                <div class="row">
                    @foreach ($washingPlans as $item)
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">{{$item->price}}</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">{{$item->price}}</h2>
                                <div class="pricing-duration">25 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    {{-- @dd($item->washing_plans) --}}
                                    {{-- @foreach ($item->washing_plans as $feature) --}}
                                    <li>{{$item->name}}</li>
                                    {{-- @endforeach --}}
                                </ul>
                            <a href="#" class="btn btn-default">Mulai Berlangganan</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 2</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">499k</h2>
                                <div class="pricing-duration">45 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlangganan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 3</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">799k</h2>
                                <div class="pricing-duration">60 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                    <li>Vakum Interior</li>
                                    <li>Penutup Pintu & Plastik</li>
                                    <li>Pengharum Ruangan</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 4</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">999k</h2>
                                <div class="pricing-duration">100 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                    <li>Vakum Interior</li>
                                    <li>Penutup Pintu & Plastik</li>
                                    <li>Pengharum Ruangan</li>
                                    <li>Pembersihan Dasbor</li>
                                    <li>Pengharum ruangan</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="plan-2">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 1</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$69.00</h2>
                                <div class="pricing-duration">25 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlangganan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 2</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$89.00</h2>
                                <div class="pricing-duration">45 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 3</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$109.00</h2>
                                <div class="pricing-duration">60 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                    <li>Vakum Interior</li>
                                    <li>Penutup Pintu & Plastik</li>
                                    <li>Pengharum Ruangan</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 4</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$309.00</h2>
                                <div class="pricing-duration">100 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                    <li>Vakum Interior</li>
                                    <li>Penutup Pintu & Plastik</li>
                                    <li>Pengharum Ruangan</li>
                                    <li>Pembersihan Dasbor</li>
                                    <li>Pengharum ruangan</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="plan-3">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 1</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$89.00</h2>
                                <div class="pricing-duration">25 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 2</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$109.00</h2>
                                <div class="pricing-duration">45 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 3</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$149.00</h2>
                                <div class="pricing-duration">60 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                    <li>Vakum Interior</li>
                                    <li>Penutup Pintu & Plastik</li>
                                    <li>Pengharum Ruangan</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 4</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$199.00</h2>
                                <div class="pricing-duration">100 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                    <li>Vakum Interior</li>
                                    <li>Penutup Pintu & Plastik</li>
                                    <li>Pengharum Ruangan</li>
                                    <li>Pembersihan Dasbor</li>
                                    <li>Pengharum ruangan</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="plan-4">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 1</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$99.00</h2>
                                <div class="pricing-duration">25 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 2</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$149.00</h2>
                                <div class="pricing-duration">45 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 3</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$199.00</h2>
                                <div class="pricing-duration">60 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                    <li>Vakum Interior</li>
                                    <li>Penutup Pintu & Plastik</li>
                                    <li>Pengharum Ruangan</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket 4</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">$249.00</h2>
                                <div class="pricing-duration">100 Mins</div>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    <li>Cuci Eksterior</li>
                                    <li>Pengeringan Mobil</li>
                                    <li>Cuci Roda</li>
                                    <li>Ganti Ban</li>
                                    <li>Cuci Jendela</li>
                                    <li>Sabun clear wax</li>
                                    <li>Vakum Interior</li>
                                    <li>Penutup Pintu & Plastik</li>
                                    <li>Pengharum Ruangan</li>
                                    <li>Pembersihan Dasbor</li>
                                    <li>Pengharum ruangan</li>
                                </ul>
                                <a href="#" class="btn btn-default">Mulai Berlanggana</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
