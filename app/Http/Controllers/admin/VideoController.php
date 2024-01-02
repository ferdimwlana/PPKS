<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Video;

class VideoController extends Controller
{
    function index (){
        $data['list_video'] = video::all();

        return view('admin.video.index', $data);
    }

    function create ()
    {
        return view('admin.video.create');
    }

    function video ()
    {
        $video = new Video;
        $video->link = request('link');
        $video->save();

        return redirect('video');
    }
    function show(Video $video)
    {
        $data['video'] = $video;
        return view('admin.video.show', $data);
    }
}
