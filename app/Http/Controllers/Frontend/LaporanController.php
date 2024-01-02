<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Alur;
use App\Models\Admin\Lapor;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function alur_pelaporan()
    {
        $data['list_alur'] = Alur::all();
        return view ('frontend.laporan.alur_pelaporan', $data );
    }

    public function lapor()
    {
        $data['list_lapor'] = Lapor::all();
        return view ('frontend.laporan.lapor', $data );
    }

}
