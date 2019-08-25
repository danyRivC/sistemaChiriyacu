<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function shop(){
        return $this ->belongsTo('app/Shop', 'shop_id');
    }
}
