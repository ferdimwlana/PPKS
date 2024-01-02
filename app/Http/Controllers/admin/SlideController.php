<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Slide;

class SlideController extends Controller
{
    function index (){
        $data['list_slide'] = slide::all();

        return view('admin.slide.index', $data);
    }

    function tambah (){


       $slide = new Slide;
       $slide->handleUploadFoto();


        $simpan = $slide->save();

        if($simpan == 1){
            return back()->with('success','Data berhasil disimpan');
        }else{
            return back()->with('danger','Data gagal disimpan');
        }
    }

    function show(Slide $slide)
    {
        $data['slide'] = $slide;
        return view('admin.slide.show', $data);
    }

    function edit(Request $request, Slide $slide)
    {
            $hapusFotolama = $slide->handleDeleteFoto();

            if ($hapusFotolama) {

                $slide->handleUploadFoto();
                $slide->update();

                return redirect("admin/slide")->with("success", "Data berhasil diupdate !");
            }
    }

    function delete(Slide $slide)
    {
        $slide->delete();
        return redirect('admin/slide');

    }
}

