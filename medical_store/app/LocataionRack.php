<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocataionRack extends Model
{
    //
    protected $guarded = [];
    protected $table ="locataion_racks";

    //Making relationship with medicine 
    //A location rack contains many mediicines
    public function medicines(){
        return $this-> hasMany(Medicine::class);
    }
}
