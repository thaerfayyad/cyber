<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $table = 'books';
    protected $guarded = [];
    protected $hidden = ['created_at','	updated_at','deleted_at'];
    public function getSemester(){
        return   $this -> semester== 1 ? 'semester"1" '  : 'semester "2" ';
    }
    public function getLibrary(){
        return   $this -> semester== 1 ? 'General '  : 'Student ';
    }
}
