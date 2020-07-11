<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'chat';
    protected $fillable = [
        'username',
        'email',
        'subject',
        'message'
    ];
}
