<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function materi()
    {
        $data['list_materi'] = Materi::all();
        return view ('frontend.materi', $data);
    }

}
