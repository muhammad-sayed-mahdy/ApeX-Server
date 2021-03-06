<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hidden extends Model
{
    protected $fillable = [
      'postID',
      'userID',
    ];
    public $incrementing = false;
}
