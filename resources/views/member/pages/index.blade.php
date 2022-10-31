@extends('member.layouts.app')
@section('content')
<div id="home-slider" class="home-slider">
    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-1.jpg')}}')">
        <div class="container">
            <div class="slider-dtl">
                <h4 class="slider-sub-heading">Kami peduli</h4>
                <h1 class="slider-heading">Untuk kendaraan anda</h1>
                <p>Sekarang berlangganan cuci mobil lebih mudah dilakukan, car wash  siap membuat mobil anda berih dan tetap elegant.</p>
                <div class="slider-btn">
                    <a href="#about_us" class="btn btn-default">Tentang kami</a>
                </div>
            </div>
        </div>
    </div>
    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-2.jpg')}}')">
        <div class="container">
            <div class="slider-dtl">
                <h4 class="slider-sub-heading">Memberikan Layanan Terbaik</h4>
                <h1 class="slider-heading">Untuk kendaraan anda</h1>
                <p>Kami memberikan pelayanan terbaik untuk berbagai jenis kendaraan milik anda.</p>
                <div class="slider-btn">
                    <a href="#service" class="btn btn-default">Layanan Kami</a>
                </div>
            </div>
        </div>
    </div>
    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-3.jpg')}}')">
        <div class="container">
            <div class="slider-dtl">
                <h4 class="slider-sub-heading">Harga terbaik</h4>
                <h1 class="slider-heading">Untuk kendaraan anda</h1>
                <p>Kami memberikan harga yang sesuai dengan kualitas jasa yang diberikan oleh kami.</p>
                <div class="slider-btn">
                    <a href="#paket" class="btn btn-default">Tentang kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end slider -->
<!--  who we are -->
<div id="about_us" class="who-we-are-main-block">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section">
                    <h3 class="section-heading">Tentang Kami</h3>
                    <p>Layanan kami bukan hanya sekedar mencuci karena merupakan perawatan nyata untuk mobil Anda. Mobil
                        terlahir kembali karena pengerjaan pada karyawan kami yang terlatih. Penelitian telah
                        menunjukkan, pembersihan tekanan uap mencegah korosi untuk jangka waktu 2 tahun jika
                        dibandingkan dengan penggunaan air biasa untuk pembersihan.</p>
                </div>
                <div class="row who-we-are-points">
                    <div class="col-sm-6">
                        <div class="who-we-are-block">
                            <div class="who-we-are-icon">
                                <i class="icon-1" aria-hidden="true"></i>
                            </div>
                            <div class="who-we-are-dtl">
                                <h5 class="who-we-are-heading">Menghubungi Kami</h5>
                                <p>Hubungi kami untuk pengambilan atau berkendara langsung ke bengkel kami dan
                                    tinggalkan mobil di bawah perawatan kami. Kami selalu melebihi harapan Anda!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="who-we-are-block">
                            <div class="who-we-are-icon">
                                <i class="icon-2" aria-hidden="true"></i>
                            </div>
                            <div class="who-we-are-dtl">
                                <h5 class="who-we-are-heading">Sistem Perawatan Mobil-SPM</h5>
                                <p>Dengan menggunakan SPM kami yang canggih, kami akan memperbaiki mobil Anda dan
                                    mengembalikan kejayaannya persis seperti saat keluar dari ruang pamer!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="who-we-are-block">
                            <div class="who-we-are-icon">
                                <i class="icon-3" aria-hidden="true"></i>
                            </div>
                            <div class="who-we-are-dtl">
                                <h5 class="who-we-are-heading">Pemeriksaan Beberapa Poin</h5>
                                <p>Berdasarkan persyaratan layanan Anda, kami akan memenuhi kebutuhan mobil Anda dan
                                    merekomendasikan template SPM kami sendiri untuk manajemen.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="who-we-are-block">
                            <div class="who-we-are-icon">
                                <i class="icon-8" aria-hidden="true"></i>
                            </div>
                            <div class="who-we-are-dtl">
                                <h5 class="who-we-are-heading">Keamanan Dan Pelayanan</h5>
                                <p>Setelah layanan selesai kami akan mengirimkan mobil Anda ke tempat tinggal atau
                                    kantor Anda sesuai pilihan Anda dalam waktu sesingkat mungkin!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm">
                <div class="who-we-are-img">
                    <img src="{{asset('member/assets/images/who-we-are.jpg')}}" class="img-responsive" alt="who-we-are">
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end who we are -->
<!--  services -->
<div id="service" class="services-main-block">
    <div class="container">
        <div class="section text-center">
            <h3 class="section-heading">LAYANAN KAMI</h3>
            <p class="sub-heading">Halo pelanggan Carwash, kami menghadirkan layanan terbaik untukmu dengan kualitas
                terbaik.</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service-block text-center">
                    <div class="service-icon">
                        <a href="services-details.html"><img
                                src="{{asset('member/assets/images/icons/service-01.png')}}" class="img-responsive"
                                alt="service-01"></a>
                    </div>
                    <div class="service-dtl">
                        <a href="services-details.html">
                            <h5 class="service-heading">Pembersihan Manual</h5>
                        </a>
                        <p>Dengan Pembersihan .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-block text-center">
                    <div class="service-icon">
                        <a href="services-details.html"><img
                                src="{{asset('member/assets/images/icons/service-02.png')}}" class="img-responsive"
                                alt="service-02"></a>
                    </div>
                    <div class="service-dtl">
                        <a href="services-details.html">
                            <h5 class="service-heading">Pemulihan Lampu Depan</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                            enatib.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-block text-center">
                    <div class="service-icon">
                        <a href="services-details.html"><img
                                src="{{asset('member/assets/images/icons/service-03.png')}}" class="img-responsive"
                                alt="service-03"></a>
                    </div>
                    <div class="service-dtl">
                        <a href="services-details.html">
                            <h5 class="service-heading">Penghapusan Goresan</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                            enatib.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-block text-center">
                    <div class="service-icon">
                        <a href="services-details.html"><img
                                src="{{asset('member/assets/images/icons/service-04.png')}}" class="img-responsive"
                                alt="service-04"></a>
                    </div>
                    <div class="service-dtl">
                        <a href="services-details.html">
                            <h5 class="service-heading">Penghapusan Tar</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                            enatib.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-block text-center">
                    <div class="service-icon">
                        <a href="services-details.html"><img
                                src="{{asset('member/assets/images/icons/service-05.png')}}" class="img-responsive"
                                alt="service-05"></a>
                    </div>
                    <div class="service-dtl">
                        <a href="services-details.html">
                            <h5 class="service-heading">Penghilang Bau</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                            enatib.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-block text-center">
                    <div class="service-icon">
                        <a href="services-details.html"><img
                                src="{{asset('member/assets/images/icons/service-06.png')}}" class="img-responsive"
                                alt="service-06"></a>
                    </div>
                    <div class="service-dtl">
                        <a href="services-details.html">
                            <h5 class="service-heading">Pembersihan Mesin</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                            enatib.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-block text-center">
                    <div class="service-icon">
                        <a href="services-details.html"><img
                                src="{{asset('member/assets/images/icons/service-07.png')}}" class="img-responsive"
                                alt="service-07"></a>
                    </div>
                    <div class="service-dtl">
                        <a href="services-details.html">
                            <h5 class="service-heading">Penyikatan Kerak Mobil</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                            enatib.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-block text-center">
                    <div class="service-icon">
                        <a href="services-details.html"><img
                                src="{{asset('member/assets/images/icons/service-08.png')}}" class="img-responsive"
                                alt="service-08"></a>
                    </div>
                    <div class="service-dtl">
                        <a href="services-details.html">
                            <h5 class="service-heading">Layanan Valet</h5>
                        </a>
                        <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                            enatib.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--  end services -->

<!--  facts -->
<div id="facts" class="facts-main-block">
    <div class="parallax" style="background-image: url('{{asset('member/assets/images/bg/facts-bg.jpg')}}')">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="facts-block text-center">
                        <div class="facts-icon">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                        </div>
                        <h2 class="facts-number counter">1025</h2>
                        <div class="facts-text">Kendaraan Dicuci</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="facts-block text-center">
                        <div class="facts-icon">
                            <i class="fa fa-car" aria-hidden="true"></i>
                        </div>
                        <h2 class="facts-number counter">850</h2>
                        <div class="facts-text">Telah Dicuci</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="facts-block text-center">
                        <div class="facts-icon">
                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                        </div>
                        <h2 class="facts-number counter">780</h2>
                        <div class="facts-text">Tangapan Baik</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="facts-block text-center">
                        <div class="facts-icon">
                            <i class="fa fa-coffee" aria-hidden="true"></i>
                        </div>
                        <h2 class="facts-number counter">500</h2>
                        <div class="facts-text">Menikmati Pelayanan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end facts -->
<!--  plans -->
<div id="paket" class="pricing-plan-main-block">
    <div class="container">
        <div class="section text-center">
            <h3 class="section-heading">Paket Cuci</h3>
            <p class="sub-heading">Kami memberikan pelayanan yang terbaik untuk berbagai jenis kendaraan.</p>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
             <div role="tabpanel" class="tab-pane active" id="plan-1">
                <div class="row">
                    @foreach ($plans as $item )
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-block text-center">
                            <h6 class="pricing-heding">Paket {{$item->id}}</h6>
                            <div class="pricing-price-block">
                                <h2 class="pricing-price">{{$item->price}} K</h2>
                            </div>
                            <div class="pricing-dtl">
                                <ul>
                                    @foreach ($item->washing_plans as $item)
                                    <li>{{$item->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!--  end map -->
@endsection
