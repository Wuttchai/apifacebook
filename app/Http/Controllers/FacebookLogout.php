<?php

namespace App\Http\Controllers; // you need to define the model appropriately
use Facebook\Facebook;
use Session;


class FacebookUser extends Controller
{
  public function logout()
  {
Session::forget("User_Name");

      return view('showms',[''=>$fb_user]);
  }
}
