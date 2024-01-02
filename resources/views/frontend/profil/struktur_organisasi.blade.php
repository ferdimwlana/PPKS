@extends('template.frontend')
@section('content')
<!--====== Start Page-Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1" style="background-image: url(https://e1.pxfuel.com/desktop-wallpaper/393/572/desktop-wallpaper-52-clean-white-for-laptops-background-white.jpg);">

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h1>Struktur Organisasi</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="index.html">Beranda</a></li>
                        <li class="active">Struktur Organisasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-Banner Section ======-->
<!--====== Start Struktur Section ======-->
<section class="farmers-team_page pt-170 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10">
                <div class="section-title text-center mb-50 wow fadeInUp">
                    <span class="sub-title">Struktur Organisasi</span>
                    <h2>Satgas PPKS Politeknik Negeri Ketapang  </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($list_struktur as $struktur)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="team-member_one text-center mb-60 wow fadeInDown">
                    <div class="member-img">
                        <img src="{{ url("public/$struktur->foto") }}" alt="" width="100">
                    </div>
                    <div class="member-info">
                        <h3 class="title"><a href="#">{{ $struktur->nama }}</a></h3>
                        <p class="position">{{ $struktur->jabatan }}</p>
                        {{-- <p class="job">(Dosen)</p> --}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
{{-- End Struktur Section --}}
