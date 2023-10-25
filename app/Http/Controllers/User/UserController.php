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
        $desc_data=BlogPost::orderby('id','desc')->get();
        return view('User.index',get_defined_vars());
    }

    public function blog()
    {
        $user = User::where('role','admin')->first();
        $list = BlogPost::all();
        $desc_data=BlogPost::orderby('id','desc')->get();
        return view('User.blog',get_defined_vars());
    }

    public function blog_detail($id)
    {
        BlogPost::find($id)->increment('total_views');
      $user = User::where('role','admin')->first();
      $detail = BlogPost::find($id);
      return view('user.blogdetail', get_defined_vars());
    }

    public function search(Request $req)  
    {
        $user = User::where('role','admin')->first();
        $search_text=$req->search;
        $list=BlogPost::where('heading','LIKE',"%$search_text%");
        $desc_data=BlogPost::orderby('id','desc')->get();
        return view('user.searchdata',get_defined_vars());
    }
}

