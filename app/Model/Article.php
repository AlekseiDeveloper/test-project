<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'text'
    ];

    public function tags(){
        return $this->belongsToMany('App\Model\Tag');
    }
}
