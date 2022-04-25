<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //
    protected $guarded = [];
    protected $table ="medicines";

    //Making relationship with location rack
    //A medicine belongs to a location racks ;'
    public function location_rack(){
        return $this-> belongsTo(LocataionRack::class);
    }

    // A medicine is manufractured by exactly one company
    public function manufracturer(){
        return $this-> belongsTo(Manufracturer::class);
    }

    // A medicine belongs to one category
    public function medicine_cat(){
        return $this-> belongsTo(MedicineCategory::class);
    }

    // A medicine belongs to many orders
    public function orders(){
        return $this-> hasMany(Order::class);
    }

    public function scopeActive($query){
        return $query->where('medicine_status', 1);
    }
}
