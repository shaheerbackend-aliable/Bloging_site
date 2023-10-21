<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $list = BlogPost::all();
        return view('User.index',get_defined_vars());
    }
}
