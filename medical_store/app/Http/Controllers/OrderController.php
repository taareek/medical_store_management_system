<?php

namespace App\Http\Controllers;

use App\Order;
use App\Medicine;
use App\StoreUser;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $order = new Order();
        $medicines = Medicine::all();
        $salesmans = StoreUser::all();

        return view('orders.create', compact('order','medicines', 'salesmans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        // dd(request()->all());
        //inserting data into databse 
        $this->validate(request(), [
            'store_user_id' => 'required',
            'medicine_id'=> 'required',
            'customer_name'=>'required',
            'customer_no'=> 'required',
            'unit_price'=>'required',
            'no_quantity'=> 'required' 
        ]);

        $values = request(['store_user_id', 'medicine_id', 'customer_name','unit_price',
                        'customer_no', 'no_quantity']);

        Order::create($values);

        return redirect('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function show(Order $order){
        
        $salesmans = StoreUser::all();
        $medicines = Medicine::all();

        return view('orders.show', compact('order', 'salesmans', 'medicines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order){
        $medicines = Medicine::all();
        $salesmans = StoreUser::all();

        return view('orders.edit', compact('order', 'medicines', 'salesmans'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Order $order)
    {
        //
        $this->validate(request(), [
            'store_user_id' => 'required',
            'medicine_id'=> 'required',
            'customer_name'=>'required',
            'customer_no'=> 'required',
            'unit_price'=>'required',
            'no_quantity'=> 'required' 
        ]);

        $values = request(['store_user_id', 'medicine_id', 'customer_name','unit_price',
                        'customer_no', 'no_quantity']);

        $order->update($values);

        return redirect('orders/'.$order->id );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        $order-> delete();
        return redirect('orders');
    }
}
