<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\LocataionRack;
use App\Manufracturer;
use App\MedicineCategory;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    //index function to show data in home page(medicine list)
    public function index(){

        $medicines = Medicine::all();
    
        return view('medicines.index', compact('medicines'));
    }

    //create function for form input
    public function create(){
        //this empty model gives us fresh input form 
        $medicine = new Medicine();
        $racks = LocataionRack::all();
        $manufracturers = Manufracturer::all();
        $categories = MedicineCategory::all();

        //passing medicne and location rack
        return view('medicines.create', compact('medicine', 'racks', 'manufracturers', 'categories'));
    }

    //storing inputs to our databse 
    public function store(){
        //dd(request('name'));

        //inserting data into databse 
        $this->validate(request(), [
            'medicine_name' => 'required',
            'medicine_pack_quantity'=> 'required',
            'medicine_strength'=>'required',
            'medicine_generic_name'=> 'required',
            'medicine_status'=>'required',
            'medicine_price'=> 'required',
            'location_rack_id'=>'required',
            'manufracturer_id'=>'required',
            'medicine_cat_id'=> 'required'
        ]);

        $values = request(['medicine_name', 'medicine_pack_quantity', 'medicine_strength','medicine_generic_name',
                            'medicine_status', 'medicine_price', 'location_rack_id', 'manufracturer_id', 'medicine_cat_id']);

        Medicine::create($values);

        return redirect('medicines');
    }

    //this function will be used to see a  information of a specific medicine
    public function show(Medicine $medicine){

        // $manufracturers = Manufracturer::all();  
        $categories = MedicineCategory::all();      
        return view('medicines.show', compact('medicine', 'categories'));
    }

    public function edit(Medicine $medicine){

        $racks = LocataionRack::all();
        $manufracturers = Manufracturer::all();
        $categories = MedicineCategory::all();

        return view('medicines.edit', compact('medicine', 'racks', 'manufracturers', 'categories'));
    }

    public function update(Medicine $medicine){

        $this->validate(request(), [
            'medicine_name' => 'required',
            'medicine_pack_quantity'=> 'required',
            'medicine_strength'=>'required',
            'medicine_generic_name'=> 'required',
            'medicine_status'=>'required',
            'medicine_price'=> 'required',
            'location_rack_id'=>'required',
            'manufracturer_id'=>'required',
            'medicine_cat_id'=> 'required'
        ]);

        $values = request(['medicine_name', 'medicine_pack_quantity', 'medicine_strength','medicine_generic_name',
                            'medicine_status', 'medicine_price', 'location_rack_id', 'manufracturer_id', 'medicine_cat_id']);
        $medicine->update($values);

        return redirect('medicines/'.$medicine->id );

    }

    public function destroy(Medicine $medicine){

        $medicine-> delete();
        return redirect('medicines');
    }

}
