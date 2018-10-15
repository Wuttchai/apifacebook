<?php

namespace App\Http\Controllers;
use App\users; // you need to define the model appropriately
use Facebook\Facebook;
use Session;
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
      $fields = "id,name,age_range,gender,timezone,updated_time,likes.limit(10){id,name,created_time}";
      $fb_user = $fb->get('/me?fields='.$fields)->getGraphUser();

$num =0;
foreach ($fb_user['updated_time'] as $key1 ) {
  $time[$num] = $key1;

  $num++;
}


foreach ($fb_user['likes'] as $key ) {
  echo "รหัสเพจ : ".$key['id'].'<br>';
echo "ชื่อเพจ : ".$key['name'].'<br>';
echo "วันที่สร้างเพจ : ".$key["created_time"]->format('Y-m-d H:i').'<br>';
///$data_get_link = file_get_contents("https://graph.facebook.com/v2.8/".$key['id']."?fields=id%2Cname%2Clink%2Ccategory%2products%2Cfan_count&access_token=".$access_token);
$data_get_link = file_get_contents("https://graph.facebook.com/ ".$key['id']."?access_token=".$access_token."&fields=name,likes");
$data_get_link = preg_replace("/ /", "%20", $data_get_link);
//https://graph.facebook.com/FANPAGE_ID?access_token=ACCESS_TOKEN&fields=name,likes
$data_get_link = json_decode($data_get_link);
echo "ลิงค์ : ".$data_get_link->link .'<br>';
echo "หมวดหมู่ : ".$data_get_link->products .'<br>';
if (condition) {
  # code...
}
echo "หมวดหมู่ : ".$data_get_link->category .'<br>';
echo "ยอดคนกดไลค์ : ".$data_get_link->fan_count .'<br>';
  $num++;
}
dd('ddd');

$time = explode(".", $time[0]);

$ac = users:: where('Userfacebook_ID','=',$fb_user['id'])
  ->get()->toarray();

if ($ac == null || $ac == '[]') {

  users::insert([
      'Userfacebook_ID' => $fb_user['id'],
      'User_Name' => $fb_user['name'],
      'User_Sex' => $fb_user['gender'],
      'User_Age' => $fb_user['age_range']['min'],
      'created_at' => $time[0],
      'updated_at' => $time[0],
  ]);
}else{
  $edit = users::where('Userfacebook_ID',$fb_user['id'])
    ->update([
  'updated_at' => $time[0],
    ]);

}
  Session::put("User_Name", $fb_user['name']);

      return view('product',['fb_user'=>$fb_user]);
  }
}
