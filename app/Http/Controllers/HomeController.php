<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $user = User::where('role','admin')->first();
        $list = BlogPost::paginate(2);
        $desc_data=BlogPost::orderby('id','desc')->paginate(2);
        return view('landingpage',get_defined_vars());
    }
}
