<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            'heading' => 'required',
            'description' => 'required',
            'text' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $post->heading = $req->heading;
        $post->description = $req->description;
        $post->text = $req->text;
         //upload image:
         $image = $req->image;
         $imagename = time() . '.' . $image->getClientOriginalExtension();
         //store in public folder "product"
         $image->move('post', $imagename);
         $post->image = $imagename;
        $post->save();
        Alert::success('Blog Uploaded Successfully!!');
        return redirect()->back();
    }

    public function blog_data()
    {
        $list = BlogPost::all();
        return view('admin.BlogData',get_defined_vars());
    }

    public function update_form($id) 
    {
      $blog = BlogPost::find($id); 
      $data= BlogPost::all();
      return view('admin.UpdateBlog',get_defined_vars());    
    }

    public function update_blog(Request $req, $id)
    {
        $blog = BlogPost::find($id);
        $blog->heading = $req->heading;
        $blog->description = $req->description;
        $blog->text = $req->text;
        $image = $req->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            //store in public folder "product"
            $image->move('post', $imagename);
            $blog->image = $imagename;
        }
        $blog->save();
        Alert::success('Blog Updated Successfully!!');
        return redirect()->back();
    }

    public function delete_blog($id) 
    {
      $blog = BlogPost::find($id); 
      $blog->delete();
      Alert::success('Blog deleted!!');
      return redirect()->back();   
    }
    

}
