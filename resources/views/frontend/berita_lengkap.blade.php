@extends('template.frontend')
@section('content')
<!--====== Start Page-Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1" style="background-image: url(https://e1.pxfuel.com/desktop-wallpaper/393/572/desktop-wallpaper-52-clean-white-for-laptops-background-white.jpg);">

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h1>Berita Lengkap</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="index.html">Berita</a></li>
                        <li class="active">Berita Lengkap</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-Banner Section ======-->
<!--====== Start News Section ======-->
<section class="blog-standard-section pt-170 pb-80">
    <div class="container">
        <div class="row">
            @foreach ($list_berita as $berita)
            <div class="col-xl-8 col-lg-7">
                <div class="blog-standard-wrapper">
                    <div class="blog-post-item-three mb-60 wow fadeInUp">
                        <div class="post-thumbnail">
                            <img src="{{ url("public/$berita->foto") }}" alt="">
                        </div>
                        <div class="entry-content white-bg">
                            <a href="#" class="cat-btn"></a>
                            <h3 class="title">{{ $berita->title }}</a></h3>
                            <div class="post-meta">
                                <p class="wow fadeInRight">
                                    {{ $berita->deskripsi }}
                                </p>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
