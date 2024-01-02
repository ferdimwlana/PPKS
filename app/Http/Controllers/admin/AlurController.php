<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Alur;

class AlurController extends Controller
{
    function index (){
        $data['list_alur'] = alur::all();

        return view('admin.alur.index', $data);
    }

    // function create ()
    // {
    //     return view('alur.create');
    // }

    function tambah (){


        $alur = new Alur;
        $alur->handleUploadFoto();


         $simpan = $alur->save();

         if($simpan == 1){
             return back()->with('success','Data berhasil disimpan');
         }else{
             return back()->with('danger','Data gagal disimpan');
         }
     }

     function show(Alur $alur)
     {
         $data['alur'] = $alur;
         return view('admin.alur.show', $data);
     }

     function edit(Request $request, Alur $alur)
    {
            $hapusFotolama = $alur->handleDeleteFoto();

            if ($hapusFotolama) {

                $alur->handleUploadFoto();
                $alur->update();

                return redirect("admin/alur")->with("success", "Data berhasil diupdate !");
            }
    }

    function delete(Alur $alur)
    {
        $alur->delete();
        return redirect('admin/alur');

    }
 }
