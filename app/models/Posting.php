<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Posting extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
