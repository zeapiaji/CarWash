@extends('staff.layouts.app')
@section('content')

@include('staff.partials.menu')
<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col d-none d-sm-block">
                <span class="fas fa-users" style="color: #344050; font-size:20px;"></span>
                <h4 class="d-none d-sm-inline-block fw-bolder ms-1">Lihat Cabang</h4>
            </div>
            <div class="col-auto d-none d-sm-block">
                <h6 class="d-none d-sm-inline-block ms-1">Total Cabang</h6>
                <span class="fw-bolder mx-1" style="font-size:20px">|</span>
                <h6 class="d-none d-sm-inline-block" data-countup='{"endValue":{{$data->count()}}}'>0</h6>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row g-3">
            @foreach ($data as $item)
            <div class="col-4">
                <div class="card bg-dark text-white overflow-hidden light" style="max-width: 30rem;">
                    <a href="">
                        <div class="card-img-top"><img class="img-fluid"
                                src="{{asset('admin/assets/img/generic/3.jpg')}}" alt="Card image" /></div>
                        <div class="card-img-overlay d-flex align-items-end">
                            <h5 class="card-title text-white">{{$item->name}}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
