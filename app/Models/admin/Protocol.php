<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Protocol extends Model
{
    use SoftDeletes;
    protected $table = 'protocols';
    protected $guarded =[];
    protected $hidden = ['created_at','	updated_at','deleted_at'];


    public function protocol()
    {
        return $this->belongsTo(Layers::class);
    }
}
