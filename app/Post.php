<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo(User::tag);
    }

    public function user(){
        return $this->belongsTo(User::tag);
    }


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
