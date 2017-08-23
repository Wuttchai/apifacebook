<?php

namespace App\Http\Controllers;
use App\users; // you need to define the model appropriately
use Facebook\Facebook;
use Request;

class FacebookUser extends Controller
{
  public function store(Facebook $fb) //method injection
  {
      // retrieve form input parameters
      $uid = Request::input('uid');
      $access_token = Request::input('access_token');
      $permissions = Request::input('permissions');

      // assuming we have a User model already set up for our database
      // and assuming facebook_id field to exist in users table in database

      //$user = users::firstOrCreate(['Userfacebook_ID' => $uid]);

      // get long term access token for future use
      $oAuth2Client = $fb->getOAuth2Client();

      // assuming access_token field to exist in users table in database
    //$user->access_token = $oAuth2Client->getLongLivedAccessToken($token)->getValue();


    //$user->save();

      // set default access token for all future requests to Facebook API
      $fb->setDefaultAccessToken($access_token);

      // call api to retrieve person's public_profile details
      $fields = "id,cover,name,first_name,last_name,age_range,link,gender,locale,picture,timezone,updated_time,verified";
      $fb_user = $fb->get('/me?fields='.$fields)->getGraphUser();

$num =0;
foreach ($fb_user['updated_time'] as $key ) {
  $dd[$num] = $key;

  $num++;
}
$time = explode(".", $dd[0]);

$ac = users:: select("Userfacebook_ID")
  ->where('Userfacebook_ID','==',$fb_user['id'])
  ->get()->toarray();

if ($ac == null && $ac == '') {
  dd('ไม่มีข้อมูล');
  users::insert([
      'Userfacebook_ID' => $fb_user['id'],
      'User_Name' => $fb_user['name'],
      'User_Sex' => $fb_user['gender'],
      'User_Age' => $fb_user['age_range']['min'],
      'created_at' => $time[0],
      'updated_at' => $time[0],
  ]);
}else{
  dd('มีข้อมูล');

  users::update([
      'updated_at' => $time[0],
  ]);
}




      return view('product',['fb_user'=>$fb_user]);
  }
}
