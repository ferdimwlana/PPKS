<?php

namespace App\Models\Admin;

use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;

class User extends ModelAuthenticate
{
    protected $table = "user";
}
