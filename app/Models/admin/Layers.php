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
    public function getLayer(){
        if ($this -> layer == 1 )
            return 'Application Layer' ;
        elseif ($this -> layer == 2)
            return  'Presentation Layer';
        elseif ($this -> layer == 3)
            return  'Session Layer';
        elseif ($this -> layer == 4)
            return  'Transport Layer';
        elseif ($this -> layer == 5)
            return  'Network Layer';
        elseif ($this -> layer == 6)
            return  'Data Link Layer';
        else
            return 'Physical Layer' ;
    }

}
