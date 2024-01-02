<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Materi;

class MateriController extends Controller
{
    function index (){
        $data['list_materi'] = materi::all();
        return view('admin.materi.index', $data);
    }

    function create ()
    {
        return view('admin.materi.create');
    }

    function materi ()
    {
        $materi = new Materi;
        $materi->title = request('title');
        $materi->link = request('link');
        $materi->save();

        return redirect('admin/materi');
    }

    function show(Materi $materi)
    {
        $data['materi'] = $materi;
        return view('admin.materi.show', $data);
    }

    function edit(Materi $materi)
    {
        $data['materi'] = $materi;
        return view('admin.materi.edit', $data);
    }

    function update(Materi $materi)
    {
        $materi->title = request('title');
        $materi->link = request('link');
        $materi->save();

        return redirect('admin/materi');
    }

    function delete(Materi $materi)
    {
        $materi->delete();
        return redirect('admin/materi');

    }
}
