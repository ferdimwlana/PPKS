@extends('template.frontend')
@section('content')
    <!--====== Start About section ======-->
    <section class="hero-area-two">
        <div class="hero-slider-one">
            <div class="single-slider">
                <div class="image-layer bg_cover" style="background-image: url({{ url('public/frontend') }}//assets/images/beranda/berandaimg1.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content-inner">
                                <div class="hero-content text-center">
                                    <h1 data-animation="fadeInUp" data-delay=".5s">Satgas PPKS Politap</h1>
                                    <div class="hero-button" data-animation="fadeInDown" data-delay=".6s">
                                        <a href="tentang_satgas" class="main-btn btn-yellow">Tentang Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Start About section ======-->
    <section class="about-section overflow-hidden pt-130 pb-80 p-r z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-two_content-box pr-lg-70 mb-50">
                        <div class="section-title section-title-left mb-30 wow fadeInUp">
                            <span class="sub-title"><h3>Satgas PPKS Politap</h3></span>
                        </div>
                        <p class="mb-30">Satuan Tugas (Satgas) Pencegahan dan Penanganan Kekerasan Seksual (PPKS) Politeknik Negeri Ketapang (POLITAP) merupakan bentuk komitmen pihak
                            kampus untuk melakukan pencegahan dan penanganan kekerasan seksual sesuai Peraturan Menteri Pendidikan, Kebudayaan, Riset, dan Teknologi RI No 30 Tahun 2021.</p>
                        <div class="about-button mt-60 wow fadeInDown">
                            <a href="tentang_satgas" class="main-btn bordered-btn">Tentang Kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-two_image-box p-r z-1 mb-50 wow fadeInRight">
                        <img src="{{ url('public/frontend') }}//assets/images/beranda/berandaimg4.jpg" style="object-fit: cover; position: static; width: 200%; height: 400px;" />
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End About section ======-->
    <!--====== Start Video Section ======-->
    <section class="service-two dark-black-bg p-r z-1 pt-130 pb-80">
        <div class="row">
            <div class="container">
                <div class="play-one_content-box bg_cover wow fadeInDown" style="background-image: url({{ url('public/frontend') }}//assets/images/beranda/ssyoutube.jpeg);">
                    <a href="https://www.youtube.com/watch?v=OQU48FWHlkM" class="video-popup"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section><!--====== End Video Section ======--><br><br><br>
    <!--====== Start Informasi Section ======-->
    <section class="service-two dark-black-bg pt-165">
        <div class="container">
            {{-- @foreach ($list_berita as $berita) --}}
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10">
                    <div class="section-title section-title-white text-center mb-50 wow fadeInDown">
                        <h2>Berita & Informasi</h2>
                    </div>
                </div>
            </div>
            <div class="service-slider-one">
                <div class="single-service-item-two text-center wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{ url('public/frontend') }}//assets/images/berita/Dokumentasi PPPKS/KOMITMEN MABA/1000120220.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><a href="berita_lengkap">Komitmen Maba</a></h6>
                        <a href="berita_lengkap" class="main-btn btn-yellow">Selengkapnya</a>
                    </div>
                </div>
                <div class="single-service-item-two text-center wow fadeInDown">
                    <div class="img-holder">
                        <img src="{{ url('public/frontend') }}//assets/images/berita/Dokumentasi PPPKS/PELANTIKAN SATGAS PPKS/1000004751.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><a href="berita_lengkap">Pelantikan Satgas PPKS</a></h6>
                        <a href="berita_lengkap" class="main-btn btn-yellow">Selengkapnya</a>
                    </div>
                </div>
                <div class="single-service-item-two text-center wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{ url('public/frontend') }}//assets/images/berita/Dokumentasi PPPKS/SOSIALISASI MABA 2023/1000120212.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title"><a href="berita_lengkap">Sosialisasi Maba</a></h6>
                        <a href="berita_lengkap" class="main-btn btn-yellow">Selengkapnya</a>
                    </div>
                </div>
                <div class="single-service-item-two text-center wow fadeInDown">
                    <div class="img-holder">
                        <img src="https://politap.ac.id/wp-content/uploads/2023/11/Image-2023-11-06-at-14.48.47_b44f4d9d.jpg" alt="">
                    </div>
                    <div class="text">
                        <h6 class="title">Politap Sosialisasikan PP Tentang Disiplin PNS dan Permen Tentang PPKS Kepada Seluruh Pegawai</h6>
                        <a href="selengkapnya.html" class="main-btn btn-yellow">Selengkapnya</a>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </section><!--====== End Informasi Section ======-->
@endsection
