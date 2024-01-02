@extends('template.frontend')
@section('content')
<!--====== Start Page-Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1" style="background-image: url(https://e1.pxfuel.com/desktop-wallpaper/393/572/desktop-wallpaper-52-clean-white-for-laptops-background-white.jpg);">

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h1>Berita</h1>
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
        <div class="row justify-content-center">
            @foreach ($list_berita as $berita)
            <div class="col-xl-8 col-lg-7">
                <div class="blog-standard-wrapper">
                    <div class="blog-post-item-three mb-100 wow fadeInUp">
                        <div class="post-thumbnail">
                            <img src="{{ url("public/$berita->foto") }}" style="object-fit: cover; position: center; width: 100%; height: 400px;" alt="">
                        </div>
                        <div class="entry-content center white-bg">
                            <a href="#" class="cat-btn"></a>
                            <h3 class="title"><a href="berita_selengkapnya">{{ $berita->title }}</a></h3>
                            <div class="entry-meta"><span class="entry-author">{{ $berita->penulis }} </a></span></span></div>
                                <div>
                                    <time class="entry-date published" datetime="2023-11-04T02:24:32+00:00">{{ $berita->tanggal }}</time>
                                </div>
                            <div class="post-meta">
                                <span>

                                </span>
                                <ul>

                                </ul>
                            </div>
                        </div>
                        {{-- <div class="entry-content white-bg">
                            <a href="#" class="cat-btn">Organic Foods</a>
                            <h3 class="title"><a href="blog-details.html">Powerful Terminal And Command Line  Seeny
                                Tools  Modern Web Development</a></h3>
                            <div class="post-meta">
                                <ul>
                                    <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>
                                </ul>
                            </div>
                        </div> --}}
                        <br><br><br>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
<header class="entry-header">

<h2 class="entry-title"><a href="https://satgas-ppks.unair.ac.id/2023/11/04/unair-keluarkan-putusan-drop-out-bagi-mahasiswa-pelaku-kekerasan-seksual/" rel="bookmark">UNAIR Keluarkan Putusan Drop-Out Bagi Mahasiswa Pelaku Kekerasan Seksual</a></h2>
<div class="entry-meta"><span class="entry-author">by <a class="url fn n" href="https://satgas-ppks.unair.ac.id/author/satgasppks/">satgasppks</a></span>
    <span class="entry-date"><span class="screen-reader-text">Posted on</span>
    <time class="entry-date published" datetime="2023-11-04T02:24:32+00:00">November 4, 2023</time><time class="updated" datetime="2023-11-04T02:25:03+00:00">November 4, 2023</time></span></div><!-- .entry-meta --></header><!-- .entry-header -->


        <div class="entry-summary">
        <p>Sesuai dengan amanat Permendikbudristek nomor 30 tahun 2021 tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Perguruan Tinggi serta Peraturan Rektor nomor 15 tahun 2023 tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan Universitas Airlangga (UNAIR), UNAIR senantiasa memegang teguh komitmen untuk ‘zero tolerance’ terhadap setiap bentuk perilaku kekerasan seksual di lingkungan kampus. Maka, hasil … </p>
<p class="link-more"><a href="https://satgas-ppks.unair.ac.id/2023/11/04/unair-keluarkan-putusan-drop-out-bagi-mahasiswa-pelaku-kekerasan-seksual/" class="more-link">Read more<span class="screen-reader-text"> “UNAIR Keluarkan Putusan Drop-Out Bagi Mahasiswa Pelaku Kekerasan Seksual”</span></a></p>
    </div><!-- .entry-summary -->


    <section class="blog-standard-section pt-170 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-standard-wrapper">
                        <div class="blog-post-item-three mb-60 wow fadeInUp">
                            <div class="post-thumbnail">
                                <img src="{{ url("public/$berita->foto") }}" alt="Post Image">
                            </div>
                            <div class="entry-content white-bg">
                                <a href="#" class="cat-btn">Organic Foods</a>
                                <h3 class="title"><a href="blog-details.html">Powerful Terminal And Command Line  Seeny
                                    Tools  Modern Web Development</a></h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>
                                    </ul>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="post-thumbnail">
                                <img src="assets/images/blog/blog-standard-1.jpg" alt="Post Image">
                            </div>
                            <div class="entry-content white-bg">
                                <a href="#" class="cat-btn">Organic Foods</a>
                                <h3 class="title"><a href="blog-details.html">Powerful Terminal And Command Line  Seeny
                                    Tools  Modern Web Development</a></h3>
                                <div class="post-meta">

                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>
                                    </ul>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="post-thumbnail">
                                <img src="assets/images/blog/blog-standard-1.jpg" alt="Post Image">
                            </div>
                            <div class="entry-content white-bg">
                                <a href="#" class="cat-btn">Organic Foods</a>
                                <h3 class="title"><a href="blog-details.html">Powerful Terminal And Command Line  Seeny
                                    Tools  Modern Web Development</a></h3>
                                <div class="post-meta">

                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i><a href="#">25 March 2022</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
