@extends('member.layouts.app')
@section('content')
    <div id="home-slider" class="home-slider">
        <div class="item home-slider-bg"
            style="background-image: url('{{asset('member/assets/images/slider-1.jpg')}}')">
            <div class="container">
                <div class="slider-dtl">
                    <h4 class="slider-sub-heading">Kami Hadir</h4>
                    <h1 class="slider-heading">Untuk Melindungi Mobil Anda</h1>
                    <p>Carwash adalah tempat pencucian yang terbaik.</p>
                    <div class="slider-btn">
                        <a href="#" class="btn btn-orange">Read More</a>
                        <a href="#" class="btn btn-default">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item home-slider-bg"
            style="background-image: url('{{asset('member/assets/images/slider-2.jpg')}}')">
            <div class="container">
                <div class="slider-dtl">
                    <<h4 class="slider-sub-heading">Kami Hadir</h4>
                    <h1 class="slider-heading">Untuk Melindungi Mobil Anda</h1>
                    <p>Dengan kualitas produk yang terjamin.</p>
                    <div class="slider-btn">
                        <a href="#" class="btn btn-orange">Read More</a>
                        <a href="#" class="btn btn-default">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item home-slider-bg"
            style="background-image: url('{{asset('member/assets/images/slider-3.jpg')}}')">
            <div class="container">
                <div class="slider-dtl">
                    <h4 class="slider-sub-heading">Kami Hadir</h4>
                    <h1 class="slider-heading">Untuk Melindungi Mobil Anda</h1>
                    <p>Dan pengamanan yang terjaga.</p>
                    <div class="slider-btn">
                        <a href="#" class="btn btn-orange">Read More</a>
                        <a href="#" class="btn btn-default">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end slider -->
    <!--  who we are -->
    <div id="who-we-are" class="who-we-are-main-block">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section">
                        <h3 class="section-heading">TENTANG KAMI</h3>
                        <p>Layanan kami bukan hanya sekedar mencuci karena merupakan perawatan nyata untuk mobil Anda. Mobil terlahir kembali karena pengerjaan pada karyawan kami yang terlatih. Penelitian telah menunjukkan, pembersihan tekanan uap mencegah korosi untuk jangka waktu 2 tahun jika dibandingkan dengan penggunaan air biasa untuk pembersihan.</p>
                    </div>
                    <div class="row who-we-are-points">
                        <div class="col-sm-6">
                            <div class="who-we-are-block">
                                <div class="who-we-are-icon">
                                    <i class="icon-1" aria-hidden="true"></i>
                                </div>
                                <div class="who-we-are-dtl">
                                    <h5 class="who-we-are-heading">Menghubungi Kami</h5>
                                    <p>Hubungi kami untuk pengambilan atau berkendara langsung ke bengkel kami dan tinggalkan mobil di bawah perawatan kami. Kami selalu melebihi harapan Anda!</p>
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
                                    <p>Dengan menggunakan SPM kami yang canggih, kami akan memperbaiki mobil Anda dan mengembalikan kejayaannya persis seperti saat keluar dari ruang pamer!</p>
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
                                    <p>Berdasarkan persyaratan layanan Anda, kami akan memenuhi kebutuhan mobil Anda dan merekomendasikan template SPM kami sendiri untuk manajemen.</p>
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
                                    <p>Setelah layanan selesai kami akan mengirimkan mobil Anda ke tempat tinggal atau kantor Anda sesuai pilihan Anda dalam waktu sesingkat mungkin!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm">
                    <div class="who-we-are-img">
                        <img src="{{asset('member/assets/images/who-we-are.jpg')}}" class="img-responsive"
                            alt="who-we-are">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end who we are -->
    <!--  services -->
    <div id="services" class="services-main-block">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">LAYANAN KAMI</h3>
                <p class="sub-heading">Halo pelanggan Carwash, kami menghadirkan layanan terbaik untukmu dengan kualitas terbaik.</p>
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
                            <p>Pemberihkan bertahap akan dilakukan dengan cara manual.</p>
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
                            <p>Penggantian lampu yang lebih terang dan memiliki kapasitas yang tinggi.</p>
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
                            <p>Goresan yang halus akan kami hilangkan dengan bantuan alat khusus sehingga mobil kembali seperti baru lagi.</p>
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
                            <p>Penghilangan dengan minyak yang berkualitas.</p>
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
                            <p>Pemanfaatan parfum dan sabun akan menghilangkan bau yang tak sedap pada mobil anda.</p>
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
                            <p>Langkah awal kami akan membersihkan debu-debu kecil terlebih dahulu, lalu pembersihan menyeluruh.</p>
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
                            <p>Menggunakan cairan yang khusus untuk dapat membersihkan kerak mobil.</p>
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
                            <p>Jangan khawatir dengan pelayanan yang kami berikan.</p>
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
                            <div class="facts-text">Gelas kopi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end facts -->
    <!--  plans -->
    <div id="pricing-plan" class="pricing-plan-main-block">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">RENCANA CUCI</h3>
                <p class="sub-heading">Kami memberikan penawaran kepada beberapa jenis mobil.</p>
            </div>
            <div class="pricing-plan-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#plan-1" aria-controls="plan-1" role="tab"
                            data-toggle="tab"><span><i class="icon-1"></i></span>Mobil Biasa</a></li>
                    <li role="presentation"><a href="#plan-2" aria-controls="plan-2" role="tab"
                            data-toggle="tab"><span><i class="icon-3"></i></span>Mobil Sedang</a></li>
                    <li role="presentation"><a href="#plan-3" aria-controls="plan-3" role="tab"
                            data-toggle="tab"><span><i class="icon-2"></i></span>Kompak SUV</a></li>
                    <li role="presentation"><a href="#plan-4" aria-controls="plan-4" role="tab"
                            data-toggle="tab"><span><i class="icon-4"></i></span>Van</a></li>
                    <li role="presentation"><a href="#plan-5" aria-controls="plan-5" role="tab"
                            data-toggle="tab"><span><i class="icon-6"></i></span>Pickup</a></li>
                    <li role="presentation"><a href="#plan-6" aria-controls="plan-6" role="tab"
                            data-toggle="tab"><span><i class="icon-8"></i></span>Kolbak</a></li>
                </ul>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="plan-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Paket 1</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">250k</h2>
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
                        </div>
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
                <div role="tabpanel" class="tab-pane" id="plan-5">
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
                                    <h2 class="pricing-price">$145.00</h2>
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
                <div role="tabpanel" class="tab-pane" id="plan-6">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Paket 1</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$149.00</h2>
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
                                    <h2 class="pricing-price">$199.00</h2>
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
                                    <h2 class="pricing-price">$249.00</h2>
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
                                    <h2 class="pricing-price">$299.00</h2>
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
    <!--  end plans -->
    <!--  testimonials -->
   
    <!--  end testimonials -->
    <!--  appointment -->
  
    <!--  end appointment -->
 
    <!--  end latest news -->
 
    <!--  end clients -->
    <!--  map -->
    <div id="location" class="map-location">

    </div>
    <!--  end map -->
@endsection
