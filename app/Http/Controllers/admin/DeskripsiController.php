<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Deskripsi;

class DeskripsiController extends Controller
{
    function index (){
        $data['list_deskripsi'] = deskripsi::all();


        return view('admin.deskripsi.index', $data);
    }

    function create ()
    {
        return view('admin.deskripsi.create');
    }

    function deskripsi ()
    {
        $deskripsi = new Deskripsi;
        $deskripsi->deskripsi = request('deskripsi');
        $deskripsi->save();

        return redirect('admin/deskripsi');
    }

    function show(Deskripsi $deskripsi)
    {
        $data['deskripsi'] = $deskripsi;
        return view('admin.deskripsi.show', $data);
    }

    function edit(Deskripsi $deskripsi)
    {
        $data['deskripsi'] = $deskripsi;
        return view('admin.deskripsi.edit', $data);
    }

    function update(Deskripsi $deskripsi)
    {
        $deskripsi->deskripsi = request('deskripsi');
        $deskripsi->save();

        return redirect('admin/deskripsi');
    }

    function delete(Deskripsi $deskripsi)
    {
        $deskripsi->delete();
        return redirect('admin/deskripsi');

    }
}
