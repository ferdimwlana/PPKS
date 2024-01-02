<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Lapor;
use Illuminate\Support\Facades\Storage;

class LaporController extends Controller
{
    function index (){
        $data['list_lapor'] = lapor::all();
        return view('admin.lapor.index', $data);
    }



    function tambah () {

        $lapor = new lapor;
        $lapor->nama_lengkap_pelapor = request('nama_lengkap_pelapor');
        $lapor->email = request('email');
        $lapor->no_handphone_pelapor = request('no_handphone_pelapor');
        $lapor->status_pelapor = request('status_pelapor');
        $lapor->kategori = request('kategori');
        $lapor->nama_lengkap_korban = request('nama_lengkap_korban');
        $lapor->alamat = request('alamat');
        $lapor->no_handphone_korban = request('no_handphone_korban');
        $lapor->jenis_kelamin = request('jenis_kelamin');
        $lapor->status_korban = request('status_korban');
        $lapor->nama_lengkap_pelaku = request('nama_lengkap_pelaku');
        $lapor->no_handphone_pelaku = request('no_handphone_pelaku');
        $lapor->status_pelaku = request('status_pelaku');
        $lapor->jenis_kejahatan = request('jenis_kejahatan');
        $lapor->handleUploadFile();

        $simpan = $lapor->save();

         if($simpan == 1){
            $laporId = $lapor->id;
             return back()->with('success','Data berhasil disimpan');
         }else{
             return back()->with('danger','Data gagal disimpan');
         }
     }

    function show(Lapor $lapor)
    {
        $data['lapor'] = $lapor;
        return view('admin.lapor.show', $data);
    }

    function update(Request $request, lapor $lapor)
    {
        $hapusFilelama = $lapor->handleDeleteFile();

            if ($hapusFilelama) {

                $lapor->nama_lengkap_pelapor = request('nama_lengkap_pelapor');
                $lapor->email = request('email');
                $lapor->no_handphone_pelapor = request('no_handphone_pelapor');
                $lapor->status_pelapor = request('status_pelapor');
                $lapor->kategori = request('kategori');
                $lapor->nama_lengkap_korban = request('nama_lengkap_korban');
                $lapor->alamat = request('alamat');
                $lapor->no_handphone = request('no_handphone_korban');
                $lapor->jenis_kelamin = request('jenis_kelamin');
                $lapor->status_korban = request('status_korban');
                $lapor->nama_lengkap_pelaku = request('nama_lengkap_pelaku');
                $lapor->no_handphone_pelaku = request('no_handphone_pelaku');
                $lapor->status_pelaku = request('status_pelaku');
                $lapor->jenis_kejahatan = request('jenis_kejahatan');
                $lapor->handleUploadFile();
                $lapor->update();

             return redirect("admin/lapor")->with("success", "Data berhasil diupdate !");
            }
        }

        function delete(Lapor $lapor)
    {
        $lapor->delete();
        return redirect('admin/lapor');

    }
}
