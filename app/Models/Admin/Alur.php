<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Alur extends Model
{
    protected $table = 'alur';


    function handleUploadFoto()
    {
        $this->handleDeleteFoto();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "foto";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save;
        }
    }
    function handleDeleteFoto()

    {
        $foto= $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
}
