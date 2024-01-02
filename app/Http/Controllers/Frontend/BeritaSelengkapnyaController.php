<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Berita;
use Illuminate\Http\Request;

class BeritaSelengkapnyaController extends Controller
{
    public function berita_selengkapnya()
    {
        $data['list_berita'] = Berita::all();
        return view ('frontend.berita_selengkapnya', $data);
    }

}
