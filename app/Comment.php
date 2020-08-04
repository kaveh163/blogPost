<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //hasMany relationship
    public function replies(){
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
