<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    //白名單
    protected $fillable = ['title','slug'];
}
