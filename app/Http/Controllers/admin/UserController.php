<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller
{
    function index (){
        $data['list_user'] = User::all();


        return view('admin.user.index', $data);
    }

    function create ()
    {
        return view('admin.user.create');
    }

    function tambah ()
    {
        $user = new User;
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user');
    }

    function show(User $user)
    {
        $data['user'] = $user;
        return view('admin.user.show', $data);
    }

    function edit(User $user)
    {
        $data['user'] = $user;
        return view('admin.user.edit', $data);
    }

    function update(User $user)
    {
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user');
    }

    function delete(User $user)
    {
        $user->delete();
        return redirect('admin/user');

    }
}
