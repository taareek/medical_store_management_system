@extends('layout')

@section('title')
    Order List
@endsection

@section('content')
<!-- Header for Orders -->
<div class="row">
    <div class="col-12">
        <h1>Order List</h1>
        <p><a href="orders/create">Add New Order</a></p>
    </div>
</div>
<div class="row">
    <div class="col-1">
        <p><strong>Order ID</strong></p>
     </div>

    <div class="col-2">
        <p><strong>Customer Name</strong></p>
    </div>
    
    <div class="col-2">
        <p><strong>Medicine Name</strong></p>
    </div>

    <div class="col-2">
        <p><strong>Number of Quantity</strong></p>
    </div>

    <div class="col-2">
        <p style="text-align:center;"><strong>Total Amount</strong></p>
    </div>

    <div class="col-3">
        <p><strong>Sold By</strong></p>
    </div>
</div>

<hr>

<div class="row">
    @foreach($orders as $order)
        <div class="row">
            <div class="col-1">
            <a href="/orders/{{$order->id}}">{{$order->id}}</a>
            </div>

            <div class="col-2">
                <p>{{$order->customer_name}}</a></p>
            </div>

            <div class="col-2" >
                <p>{{$order->medicine->medicine_name}}</p>
            </div>

            <div class="col-2">
                <p style="text-align:center;">{{$order->no_quantity}}</p>
            </div>

            
            <div class="col-2">
            <?php
                $packet_price = $order->medicine->medicine_price;
                $per_packet = $order->medicine->medicine_pack_quantity;
                $unit_price = $packet_price / $per_packet;
                // $medicine->medicine_price

            ?>
            <p style="text-align:center;">{{$unit_price * $order->no_quantity}}</p>
                
            </div>

            <div class="col-3" >
                <p>{{$order->store_user->user_name}}</p>
            </div>


        </div>
    @endforeach
</div>


@endsection