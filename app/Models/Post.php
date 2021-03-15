<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='news' ;
    protected $guarded = [];
    protected $hidden = ['created_at','	updated_at','deleted_at'];



}
