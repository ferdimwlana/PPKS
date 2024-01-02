@extends('template.frontend')
@section('content')
<!--====== Start Page-Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1" style="background-image: url(https://e1.pxfuel.com/desktop-wallpaper/393/572/desktop-wallpaper-52-clean-white-for-laptops-background-white.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h1>Satgas PPKS Politap</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="index.html">Beranda</a></li>
                        <li class="active">Tentang Satgas PPKS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-Banner Section ======-->
<!--====== Start News Section ======-->
<section class="service-section pt-170 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-four_image-box text-left p-r mb-50 wow fadeInLeft">
                    <img src="{{ url('public/frontend') }}/assets\images\profil1img\ppks-satgas.jpg" class="about-img_one" alt="">
                </div>
            </div>

            @foreach ($list_tentang as $tentang)
            <div class="col-lg-6 mb-50">
                <h3 class="title">{{ $tentang->title }}</h3>
                <p class="wow fadeInRight">
                    {{ $tentang->deskripsi }}
                </p>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
