<!--====== Start Header Section ======-->
<header class="header-area">
    <div class="top-bar-one dark-black-bg">
        <div class="container-fluid">
            <div class="row align-items-">
                <div class="col-xl-6 col-lg-12 col-md-12 col-6">
                    <div class="top-left d-flex align-items-">
                        <span class="text">Selamat Datang di Website Satgas
                            PPKS Politeknik Negeri Ketapang</span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-6">
                    <div class="top-right">
                        <ul class="social-link">
                            <li><a href="https://www.facebook.com/profile.php?id=100095697393270&mibextid=9R9pXO"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://instagram.com/satgasppks_politap?igshid=YnczbW9mYXgwM2M3"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navigation navigation-two">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <div class="primary-menu">
                <div class="site-branding">
                    <a href="{{ url('public/frontend') }}/assets/images/logo/logo ppks nobg.png" type="image/png" alt="Site Logo"></a>
                    <a href="#
                    "class="brand-logo"><img src="{{ url('public/frontend') }}/assets/images/logo/logo-ppks-vertikal.jpeg" alt="Site Logo"></a>
                </div>
                <div class="nav-inner-menu">
                    <div class="nav-menu">
                        <!-- Navbar Close -->
                        <div class="navbar-close"><i class="far fa-times"></i></div>
                        <!--=== Mobile Logo ===-->
                        <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                            <a href="index.html" class="brand-logo"><img src="{{ url('public/frontend') }}/assets/images/logo/logo-ppks-vertikal.jpeg" alt="Site Logo"></a>
                        </div>
                        <!-- Navbar Call Button -->
                        {{-- <div class="call-button">
                            <span><i class="fab fa-whatsapp"></i><a href="tel:08888888888">08637829877</a></span>
                        </div> --}}
                        <nav class="main-menu" style="gap: 15px;">
                            <ul>
                                <li><a href="{{url('frontend/beranda')}}">Beranda</a></li>
                                <li class="menu-item has-children"><a href="#">Profil</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('frontend/tentang_satgas')}}">Tentang Satgas PPKS</a></li>
                                        <li><a href="{{url('frontend/struktur_organisasi')}}">Struktur Organisasi</a></li>
                                        <li><a href="{{url('frontend/dokumentasi')}}">Dokumentasi</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('frontend/materi')}}">Materi</a></li>
                                <li><a href="{{url('frontend/berita')}}">Berita</a></li>
                                <li class="menu-item has-children"><a href="#">Lapor</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('frontend/alur_pelaporan')}}">Alur Pelaporan</a></li>
                                        <li><a href="{{url('frontend/lapor')}}">Lapor!</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- Navbar Menu Button -->
                        <div class="menu-button">
                            <a href="{{url('frontend/hubungi_kami')}}" class="main-btn btn-yellow">Hubungi Kami</a>
                        </div>
                    </div>
                    <div class="nav-right-item d-flex align-items-center">
                        {{-- <div class="call-button">
                            <span><i class="fab fa-whatsapp"></i><a href="tel:087342786763">+08643464726</a></span>
                        </div> --}}
                        <div class="menu-button">
                            <a href="{{url('frontend/hubungi_kami')}}" class="main-btn btn-yellow">Hubungi Kami</a>
                        </div>
                        <div class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== End Header Section ======-->
