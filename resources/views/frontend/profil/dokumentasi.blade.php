@extends('template.frontend')
@section('content')
<!--====== Start Page-Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1" style="background-image: url(https://e1.pxfuel.com/desktop-wallpaper/393/572/desktop-wallpaper-52-clean-white-for-laptops-background-white.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h1>Dokumentasi</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="index.html">Beranda</a></li>
                        <li class="active">Dokumentasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-Banner Section ======-->
<!--====== Start Dokumentasi Section ======-->
<section class="portfolio-full-page pt-170 pb-130">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10">
                <div class="section-title text-center mb-60 wow fadeInUp">
                    <span class="title"><h3>Dokumentasi</h3></span>
                    <h2>Kegiatan Satgas PPKS Politap</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($list_dokumentasi as $dokumentasi)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="project-item-three mb-30 wow fadeInUp">
                    <div class="dokumentasi-info">
                        <h3 class="title"><a href="#">{{ $dokumentasi->title }}</a></h3>
                    </div>
                    <div class="img-holder">
                        <img src="{{ url("public/$dokumentasi->foto") }}" alt="">
                        <div class="hover-portfolio">
                            <div class="icon-btn"><a href="portfolio-details.html"><i class="far fa-arrow-right"></i></a></div>
                            <div class="hover-content">
                                <h3 class="title">Komitmen Maba</h3>
                                <p><a href="#">Agriculture, Foods</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
<!--====== End Dokumentasi Section ======-->
