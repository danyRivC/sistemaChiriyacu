<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    public function comment(){
        return $this ->hasMany('app/Comment', 'comment_id');
    }

}
