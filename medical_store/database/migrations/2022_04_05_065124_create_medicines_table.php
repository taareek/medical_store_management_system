<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('location_rack_id');   //foreign key 
            $table->unsignedInteger('manufracturer_id');  // foreign key: name should be table_name_id
            $table->unsignedInteger('medicine_cat_id');
            $table->string('medicine_name');
            $table->string('medicine_pack_quantity');
            $table->string('medicine_strength');
            $table->string('medicine_generic_name');
            $table->integer('medicine_status');
            $table->string('medicine_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
