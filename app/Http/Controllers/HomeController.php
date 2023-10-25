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
        $list = BlogPost::all();
        $desc_data = $list->sortBy('id');
        return view('landingpage',get_defined_vars());
    }
}
