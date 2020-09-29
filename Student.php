<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

      protected $fillable = [
        'sid','name', 'fname', 'edulevel','department','year','section','session',
    ];
}
