<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
      'id',
      'content',
      'subject',
      'parent',
      'sender',
      'receiver',
      'received',
      'delSend',
      'delReceive'
    ];
    public $incrementing = false;
}