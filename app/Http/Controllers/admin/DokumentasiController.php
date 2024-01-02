<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Dokumentasi;

class DokumentasiController extends Controller
{
    function index (){
        $data['list_dokumentasi'] = dokumentasi::all();

        return view('admin.dokumentasi.index', $data);
    }

    function tambah (){

        $dokumentasi = new dokumentasi;
        $dokumentasi->title = request('title');
        $dokumentasi->handleUploadFoto();


         $simpan = $dokumentasi->save();

         if($simpan == 1){
             return back()->with('success','Data berhasil disimpan');
         }else{
             return back()->with('danger','Data gagal disimpan');
         }
     }

     function show(dokumentasi $dokumentasi)
    {
        $data['dokumentasi'] = $dokumentasi;
        return view('admin.dokumentasi.show', $data);
    }

    function edit(Request $request, dokumentasi $dokumentasi)
    {
            $hapusFotolama = $dokumentasi->handleDeleteFoto();

            if ($hapusFotolama) {
                $dokumentasi->title = request('title');
                $dokumentasi->handleUploadFoto();
                $dokumentasi->update();

                return redirect("admin/dokumentasi")->with("success", "Data berhasil diupdate !");
            }
    }

    function delete(Dokumentasi $dokumentasi)
    {
        $dokumentasi->delete();
        return redirect('admin/dokumentasi');

    }
 }
