<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function post(){
        return $this->belongsTo(' App\Models\admin\Blog' ,'blog_id');
    }
}
