<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use SoftDeletes;
    protected $table = 'exams';
    protected $fillable = ['title','date','examFile','details'];
    protected $hidden = ['created_at','	updated_at','deleted_at'];

}
