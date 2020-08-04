<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //hasMany relationship
    public function comments(){
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

}
