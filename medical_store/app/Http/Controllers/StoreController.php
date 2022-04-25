<?php

namespace App\Http\Controllers;

use App\StoreUser;
use App\Order;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function index(){
        $store_users = StoreUser::all();

        return view('store.index', compact('store_users'));
    }
    public function create(){

        $store_users = StoreUser::all();
        return view('store.create', compact('store_users'));
    }

    public function store(){
        // dd(request()->all());
        //inserting data into databse 
        $this->validate(request(), [
            'user_name' => 'required',
            'user_type'=> 'required',
            'user_status'=>'required' 
        ]);

        $values = request(['user_name', 'user_type', 'user_status']);

        StoreUser::create($values);

        return redirect('store_users');
    }

    public function show(StoreUser $store_user){
        // $store_users = StoreUser::all();
        $orders = Order::all();

        return view('store.show', compact('store_user','orders'));
    }

    public function edit(StoreUser $store_user){

        return view('store.edit', compact('store_user'));
    }

    public function update(StoreUser $store_user){

        $this->validate(request(), [
            'user_name'=> 'required',
            'user_type'=> 'required',
            'user_status'=>'required'
        ]);

        $values = request(['user_name', 'user_type', 'user_status']);

        $store_user->update($values);

        return redirect('store_users/'.$store_user->id );
    }

    public function destroy(StoreUser $store_user){

        $store_user-> delete();
        return redirect('store_users');
    }
}
