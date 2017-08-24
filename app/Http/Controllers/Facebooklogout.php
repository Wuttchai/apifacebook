<?php

namespace App\Http\Controllers;
use App\users; // you need to define the model appropriately
use Facebook\Facebook;
use Session;
use Request;

class FacebookUser extends Controller
{
  public function logout() //method injection
  {
Session::forget("User_Name");
  
      return view('showms',[''=>$fb_user]);
  }
}
