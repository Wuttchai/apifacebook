<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
  protected $fillable = [
      'Userfacebook_ID', 'User_Name','User_Sex','User_Age','created_at','updated_at'
  ];
}
