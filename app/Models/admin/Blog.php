<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $table = 'blogs';
    protected $guarded = [];


    public function comments(){
        return $this->hasMany(' App\Models\Comment');
    }

    public function user(){
        return $this->belongsTo('App\User' );
    }
}
