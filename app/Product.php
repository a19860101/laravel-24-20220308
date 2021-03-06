<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['title','cover','description','price','sale','start_at','end_at'];

    public function carts(){
        return $this->hasMany('App\Cart');
    }
}
