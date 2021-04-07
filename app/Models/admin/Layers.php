<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Layers extends Model
{
    use SoftDeletes;
    protected $table = 'layers';
    protected $guarded =[];
    protected $hidden = ['created_at','	updated_at','deleted_at'];

    public function threats()
    {
        return $this->hasMany(Threat::class, 'layer_id');
    }
    public function protocols()
    {
        return $this->hasMany(Protocol::class, 'layer_id');
    }

    public function getLayer(){
        if ($this -> name == 1 )
            return 'Application Layer' ;
        elseif ($this -> name == 2)
            return  'Presentation Layer';
        elseif ($this -> name == 3)
            return  'Session Layer';
        elseif ($this -> name == 4)
            return  'Transport Layer';
        elseif ($this -> name == 5)
            return  'Network Layer';
        elseif ($this -> name == 6)
            return  'Data Link Layer';
        else
            return 'Physical Layer' ;
    }

}
