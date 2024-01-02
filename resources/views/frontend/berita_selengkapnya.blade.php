@extends('template.frontend')
@section('content')
<!--====== Selengkapnya Section ======-->
<section class="blog-details-page pt-30 pb-90">
    <div class="container">
        <div class="row">
            @foreach ($list_berita as $berita)
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details-wrapper mb-40 wow fadeInUp">
                    <div class="blog-post-item">
                        <div class="post-thumbnail">
                            <img src="{{ url("public/$berita->foto") }}" alt="">
                        </div>
                        <div class="post-content">
                            <div class="entry-content">
                                <h3 class="title">{{ $berita->title }}</h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i><a href="#">{{ $berita->tanggal }}</a></span></li>
                                    </ul>
                                </div>
                            </div>
                            <p>{{ $berita->deskripsi }}</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-widget-area">
                    <div class="widget author-widget mb-40 wow fadeInUp">
                        <div class="author-content">
                            <img src="assets\images\team\mannn.jpg" style="object-fit: cover; position: static; width: 50%; height: 150px;">
                            <h4>{{ $berita->penulis }}</h4>
                            <p>Penulis</p>
                            <ul class="social-link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
