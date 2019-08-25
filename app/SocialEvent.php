<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialEvent extends Model
{
    private $table = 'social_event';

    public function comment(){
        return $this ->hasMany('app/Comment', 'comment_id');
    }
}
