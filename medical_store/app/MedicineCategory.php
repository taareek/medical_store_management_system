<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    //
    protected $guarded = [];
    protected $table ="medicine_categories";

    public function medicines_cat(){
        return $this-> hasMany(Medicine::class);
    }
}
