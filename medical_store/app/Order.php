<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarded = [];
    protected $table ="orders";
    protected $dateFormat = 'Y-m-d';
    
    //making relationship with medicine
    public function medicine(){
        return $this-> belongsTo(Medicine::class);
    }

    // An order belongs to a specific saleman 
    public function store_user(){
        return $this-> belongsTo(StoreUser::class);
    }
}
