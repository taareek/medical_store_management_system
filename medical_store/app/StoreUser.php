<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreUser extends Model
{
    //
    protected $guarded = [];
    protected $table ="store_users";
  
    // A saleman/ store user may serve many orders
    public function order(){
        return $this-> hasMany(Order::class);
    }
}
