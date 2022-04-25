<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineCat extends Model
{
    //
    protected $guarded = [];
    protected $table ="medicine_cats";

    public function medicines_cat(){
        return $this-> hasMany(Medicine::class);
    }

}
