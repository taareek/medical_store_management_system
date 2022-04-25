@extends('layout')

@section('title', 'Details of order ' . $order->id)

@section('content')

<div class="col">
    <p><a href="/orders/{{$order->id}}/edit">Edit</a></p>

    <form action="/orders/{{ $order->id}}" method= "POST">
        @method('DELETE')
        {{ csrf_field() }}
        <button class="btn btn-danger" type="submit">Delete</button>
        <br>
    </form>

    <div class="col-12">
        <h5 style="padding-top:1rem;">Order {{$order->id}} </h5>
        <p><strong>Customer Name: </strong>{{$order->customer_name}}</p>
        <p><strong>Customer Contact Info: </strong>{{$order->customer_no}}</p>
        <p><strong>Purchased Medicine: </strong>{{$order->medicine->medicine_name}}</p>
        <p><strong>Quantity: </strong>{{$order->no_quantity}}</p>
        <?php
            $unit_price = $order->medicine->medicine_price / $order->medicine->medicine_pack_quantity;
            $total = $unit_price * $order->no_quantity;
        ?>
        <p><strong>Total Bill: </strong>{{ $total}}</p>
        <p><strong>Sold By: </strong><a href="/store_users/{{$order->store_user->id}}">{{$order->store_user->user_name}}</a></p>
         
    </div>    
</div>
@endsection