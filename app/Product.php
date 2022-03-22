<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['title','cover','description','price','sale','start_at','end_at'];
}
