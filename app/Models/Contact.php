<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;
    protected $table = 'contacts';
    protected $fillable = ['name','email','message'];
    protected $hidden = ['created_at','	updated_at','deleted_at'];
    public function scopeSelection($query){

        return $query -> select('id','name','email','message');
    }
}
