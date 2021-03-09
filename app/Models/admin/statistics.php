<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $table = 'statistics';
    protected $guarded = [];
    protected $hidden = ['created_at','	updated_at','deleted_at'];


}
