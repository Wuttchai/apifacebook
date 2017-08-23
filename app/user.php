<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
  protected $fillable = [
      'User_ID', 'User_Name','User_Sex','User_Age'
  ];
}
