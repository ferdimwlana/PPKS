@extends('template.frontend')
@section('content')
<!--====== Start Page-Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1" style="background-image: url(https://e1.pxfuel.com/desktop-wallpaper/393/572/desktop-wallpaper-52-clean-white-for-laptops-background-white.jpg);">

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h1>Materi</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="index.html">Beranda</a></li>
                        <li class="active">Materi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-Banner Section ======-->
<!--====== Start Service Section ======-->
<section class="faq-section pt-170 pb-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
                <div class="section-title text-center mb-70 wow fadeInUp">
                    <h2>Materi</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($list_materi as $materi)
            <div class="col-lg-11">
                <div class="faq-one_content wow fadeInDown">
                    <div class="accordion" id="accordionOne">

                        <div class="card mb-20">
                            <div class="card-header">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false">
                                    {{ $materi->title }}
                                </a>
                            </div>
                            <div id="collapse1" class="collapse" data-parent="#accordionOne">
                                <div class="card-body">
                                    <h6><strong>
                                        <a href ="{{ $materi->link }}"class="unduh">Unduh</a>
                                    </strong></h6>
                                </div>
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
<!--====== End Service Section ======-->
