<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = User::where('role','admin')->first();
        $list = BlogPost::all();
        $desc_data = $list->sortBy('id');
        return view('User.index',get_defined_vars());
    }

    public function blog()
    {
        $user = User::where('role','admin')->first();
        $list = BlogPost::all();
        return view('User.blog',get_defined_vars());
    }
}

