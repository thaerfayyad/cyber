<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
    use SoftDeletes;
    protected $table = 'resources';
    protected $fillable = ['title','link','icon','filed'];
    protected $hidden = ['created_at','	updated_at','deleted_at'];

}
