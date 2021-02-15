<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendors extends Model
{
    use SoftDeletes;
    protected $table = 'vendors';
    protected $fillable = ['name','mobile','email','logo','address','status' ,'category_id '];
    protected $hidden = ['created_at','	updated_at'];

    public function scopeSelection($query)
    {

        return $query->select('id', 'parent_id','name','details','image','created_at');
    }



}
