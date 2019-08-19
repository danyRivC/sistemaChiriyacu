<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliquot extends Model
{
    protected $table = 'aliquot';

    public function user(){
        return $this->belongsTo('app\User', 'user_id');
    }
    public function shop(){
        return $this->belongsTo('app\Shop', 'shop_id');
    }
}
