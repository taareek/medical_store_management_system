<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufracturer extends Model
{
    //
    protected $guarded = [];
    protected $table ="manufracturers";
    
    //a manufraturer manufractured many medicines 
    public function medicines_list(){
        return $this-> hasMany(Medicine::class);
    }
}
