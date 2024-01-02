<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Tentang;

class TentangController extends Controller
{
    function index () {
      $data['list_tentang'] = tentang::all();

        return view('admin.tentang.index', $data);
    }

    function create ()
    {
        return view('admin.tentang.create');
    }

    function tentang ()
    {
        $tentang = new Tentang;
        $tentang->title = request('title');
        $tentang->deskripsi = request('deskripsi');
        $tentang->save();

        return redirect('tentang');
    }

    function show(Tentang $tentang)
    {
        $data['tentang'] = $tentang;
        return view('admin.tentang.show', $data);
    }

    function edit(Tentang $tentang)
    {
        $data['tentang'] = $tentang;
        return view('admin.tentang.edit', $data);
    }

    function update(Tentang $tentang)
    {
        $tentang->title = request('title');
        $tentang->deskripsi = request('deskripsi');
        $tentang->save();

        return redirect('admin/tentang');
    }

    function delete(Tentang $tentang)
    {
        $tentang->delete();
        return redirect('admin/tentang');

    }

}
