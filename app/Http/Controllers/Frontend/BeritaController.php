<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        $data['list_berita'] = Berita::all();
        return view ('frontend.berita', $data);
    }

}
