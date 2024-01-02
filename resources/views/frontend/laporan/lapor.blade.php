@extends('template.frontend')
@section('content')
<!--====== Start Page Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1" style="background-image: url(https://e1.pxfuel.com/desktop-wallpaper/393/572/desktop-wallpaper-52-clean-white-for-laptops-background-white.jpg);">

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="page-title">
                    <h1>Lapor</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="index.html">Beranda</a></li>
                        <li class="active">Lapor</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Banner Section ======-->
<!--====== Start Lapor Section ======-->
<section class="prodcuts-details-page pt-170 pb-130">
    <div class="container">
        <div class="review-form">
            <h3 class="title mb-15"><u>Form Laporan Kekerasan Seksual di Lingkungan Politap</u></h3>
            <br>
            <div class="lapor-text">
                <i class="far fa-user"></i>
                <span>PELAPOR</span>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Nama Lengkap" name="name" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form_group">
                            <input type="number" class="form_control" placeholder="No. Handphone" name="phone" required>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form_group">
                            <select class="wide">
                                <option data-display="Status Pelapor :">Status Pelapor :</option>
                                <option value="01">Mahasiswa</option>
                                <option value="02">Dosen</option>
                                <option value="03">Tenaga Kependidikan</option>
                                <option value="04">Masyarakat Umum</option>
                                <option value="05">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form_group">
                            <select class="wide">
                                <option data-display="Kategori :">Kategori :</option>
                                <option value="01">Saksi</option>
                                <option value="02">Korban</option>
                            </select>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="review-form">
            <br><br><br>
            <div class="lapor-text">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>TERLAPOR</span>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Nama Lengkap Terlapor" name="name" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form_group">
                            <input type="number" class="form_control" placeholder="No. Handphone Terlapor(*jika ada)" name="phone" required>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form_group">
                            <select class="wide">
                                <option data-display="Status Terlapor :">Status Terlapor :</option>
                                <option value="01">Mahasiswa</option>
                                <option value="02">Dosen</option>
                                <option value="03">Tenaga Kependidikan</option>
                                <option value="04">Masyarakat Umum</option>
                                <option value="05">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form_group">
                            <p><h5>Unggah File Bukti(foto/video atau screenshot dari chat pelaku)</h5></p>
                            <br>
                            <input type="file" class="form_control">
                        </div>
                    </div>
                        <div class="form_group">
                            <button class="main-btn btn-yellow">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection<!--====== End Lapor Section ======-->
