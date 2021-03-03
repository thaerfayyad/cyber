<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;
    protected $table = 'contact';
    protected $fillable = ['name','email','message'];
    protected $hidden = ['created_at','	updated_at','deleted_at'];

}
