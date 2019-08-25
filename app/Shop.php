<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shop';
    public function shop(){
        return $this->hasMany('app/Product','product_id');
    }
}
