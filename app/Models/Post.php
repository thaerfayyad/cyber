<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts' ;
    protected $guarded = [];
    protected $hidden = ['created_at','	updated_at','deleted_at'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
