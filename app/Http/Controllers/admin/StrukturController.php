<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Struktur;

class StrukturController extends Controller
{
    function index (){
        $data['list_struktur'] = struktur::all();

        return view('admin.struktur.index', $data);
    }

    function tambah (){

        $struktur = new Struktur;
        $struktur->handleUploadFoto();
        $struktur->nama = request('nama');
        $struktur->jabatan = request('jabatan');


         $simpan = $struktur->save();

         if($simpan == 1){
             return back()->with('success','Data berhasil disimpan');
         }else{
             return back()->with('danger','Data gagal disimpan');
         }
     }

     function show(struktur $struktur)
    {
        $data['struktur'] = $struktur;
        return view('admin.struktur.show', $data);
    }

    function update(Request $request, Struktur $struktur)
    {

            $hapusFotolama = $struktur->handleDeleteFoto();

            if ($hapusFotolama) {

                $struktur->handleUploadFoto();
                $struktur->nama = request('nama');
                $struktur->jabatan = request('jabatan');
                $struktur->update();

                return redirect("admin/struktur")->with("success", "Data berhasil diupdate !");
            }
    }

    function delete(Struktur $struktur)
    {
        $struktur->delete();
        return redirect('admin/struktur');

    }
 }
