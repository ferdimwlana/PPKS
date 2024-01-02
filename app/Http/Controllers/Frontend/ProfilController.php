<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dokumentasi;
use App\Models\Admin\Struktur;
use App\Models\Admin\Tentang;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function tentang_satgas()
    {
        $data['list_tentang'] = Tentang::all();
        return view ('frontend.profil.tentang_satgas', $data);
    }

    public function struktur_organisasi()
    {
        $data['list_struktur'] = Struktur::all();
        return view ('frontend.profil.struktur_organisasi', $data);
    }

    public function dokumentasi()
    {
        $data['list_dokumentasi'] = Dokumentasi::all();
        return view ('frontend.profil.dokumentasi', $data);
    }
}
