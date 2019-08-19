<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    public function author(){
        return $this->belongsTo('app/User', 'author_id');
    }
    public function post(){
        return $this->belongsTo('app/Post', 'post_id');
    }
    public function socialEvent(){
        return $this->belongsTo('app/SocialEvent', 'social_event_id');
    }


}
