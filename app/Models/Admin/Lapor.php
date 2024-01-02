<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lapor extends Model
{
    protected $table = 'lapor';
    function handleUploadFile()
    {
        $this->handleDeleteFile();
        if(request()->hasFile('file')){
            $file = request()->file('file');
            $destination = "file";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/".$url;
            $this->save;
        }
    }
    function handleDeletefile()

    {
        $file= $this->file;
        if($file){
            $path = public_path($file);
            if(file_exists($path)){
                unlink($path);

            }
            return true;
        }
    }
}

