@extends('template.frontend')
@section('content')
<!--====== Start Page Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1" style="background-image: url(https://e1.pxfuel.com/desktop-wallpaper/393/572/desktop-wallpaper-52-clean-white-for-laptops-background-white.jpg);">

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h1>Alur Pelaporan</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="{{url ('frontend/base')}}">Beranda</a></li>
                        <li class="active">Alur Pelaporan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Banner Section ======-->
<!--====== Start Alur Pelaporan Section ======-->
<section class="project-details-page pt-170 wow fadeInUp">
    <div class="container">
        <div class="row">
            @foreach ($list_alur as $alur)
            <div class="col-lg-12">
                <div class="project-details-wrapper">
                    <div class="img-holder mb-50">
                        <img src="{{ url("public/$alur->foto") }}" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<br><br><br><!--====== End Alur Pelaporan Section ======-->
@endsection
