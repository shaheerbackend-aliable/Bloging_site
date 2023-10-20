<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function view()
    {
        return view('admin.upload');
    }
    
    public function post(Request $req)
    {
        $post = new BlogPost();
        $req->validate([
            'text' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $post->text = $req->text;
         //upload image:
         $image = $req->image;
         $imagename = time() . '.' . $image->getClientOriginalExtension();
         //store in public folder "product"
         $image->move('post', $imagename);
         $post->image = $imagename;
        $post->save();
        return view('admin.index');
    }

}
