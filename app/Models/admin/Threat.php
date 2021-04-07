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
    public function getLayer(){
        if ($this -> name == 1 )
            return 'Application Layer' ;
        elseif ($this -> layer_id == 2)
            return  'Presentation Layer';
        elseif ($this -> layer_id == 3)
            return  'Session Layer';
        elseif ($this -> layer_id == 4)
            return  'Transport Layer';
        elseif ($this -> layer_id == 5)
            return  'Network Layer';
        elseif ($this -> layer_id == 6)
            return  'Data Link Layer';
        else
            return 'Physical Layer' ;
    }

}
