<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'post_title',
        'post_content',
        'post_image',
    ];

    public function user(){
        return $this->hasOne('App/User');
    }
}
