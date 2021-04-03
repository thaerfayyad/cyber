<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Threat extends Model
{
    use SoftDeletes;
    protected $table = 'threats';
    protected $guarded =[];
    protected $hidden = ['created_at','	updated_at','deleted_at'];

    public function layer()
    {
        return $this->belongsTo(Layers::class);
    }

}
