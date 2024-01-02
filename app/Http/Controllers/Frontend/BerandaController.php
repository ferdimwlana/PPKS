<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Berita;
// use App\Models\Admin\Deskripsi;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        // $data['list_slide'] = Slide::all();
        return view ('frontend.beranda');
    }

    public function berita_lengkap()
    {
        $data['list_berita'] = Berita::all();
        return view ('frontend.berita_lengkap', $data );
    }

}
