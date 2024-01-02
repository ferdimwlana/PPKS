<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Berita;

class BeritaController extends Controller
{
    function index (){
        $data['list_berita'] = berita::all();
        return view('admin.berita.index', $data);
    }

    // function create ()
    // {
    //     return view('admin.berita.create');
    // }

    function tambah (){

        $berita = new berita;
        $berita->handleUploadFoto();
        $berita->title = request('title');
        $berita->penulis = request('penulis');
        $berita->tanggal = request('tanggal');
        $berita->deskripsi = request('deskripsi');


         $simpan = $berita->save();

         if($simpan == 1){
             return back()->with('success','Data berhasil disimpan');
         }else{
             return back()->with('danger','Data gagal disimpan');
         }
     }

    function show(Berita $berita)
    {
        $data['berita'] = $berita;
        return view('admin.berita.show', $data);
    }
    function edit(Request $request, berita $berita)
    {

            $hapusFotolama = $berita->handleDeleteFoto();

            if ($hapusFotolama) {

                $berita->handleUploadFoto();
                $berita->title = request('title');
                $berita->penulis = request('penulis');
                $berita->tanggal = request('tanggal');
                $berita->deskripsi = request('deskripsi');
                $berita->update();

                return redirect("admin/berita")->with("success", "Data berhasil diupdate !");
            }
    }

    function delete(Berita $berita)
    {
        $berita->delete();
        return redirect('admin/berita');

    }

}
