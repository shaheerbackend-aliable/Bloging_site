<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriberController extends Controller
{
  public function show_data()
  {
    $sub_data = Subscriber::all();
    return view("Admin.subscriber",get_defined_vars());
  }

  public function send_data(Request $req)
  {
    $sub = new Subscriber();
    $sub->email = $req->email;
    $sub->user_name = $req->user;
    $sub->save();
    return redirect()->back();
  }

  public function delete_sub($id)
  {
    $delete = Subscriber::find($id); 
    $delete->delete();
    return redirect()->back();  
  }
}
