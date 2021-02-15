<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    use SoftDeletes;
    protected $table = 'books';
    protected $fillable = ['name','type','photo','slug'];
    protected $hidden = ['created_at','	updated_at','deleted_at'];

}
