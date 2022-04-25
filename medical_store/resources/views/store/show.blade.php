@extends('layout')

@section('title', 'Details of ' . $store_user->user_name)

@section('content')

<div class="col">
    <h2> {{$store_user->user_name}} </h2>
    <p><a href="/store_users/{{$store_user->id}}/edit">Edit</a></p>

    <form action="/store_users/{{ $store_user->id}}" method= "POST">
        @method('DELETE')
        {{ csrf_field() }}
        <button class="btn btn-danger" type="submit">Delete</button>
        <br>
    </form>
    
</div>
<div class="row">
    <br><br>
    <p style="padding-top: 1.5rem;"><strong>Employe Name: </strong> {{$store_user->user_name}} </p>
    <p><strong>Employe Designation: </strong> {{$store_user->user_type}} </p>
    <p><strong>User Status: </strong> {{$store_user->user_status}} </p>
    
    <?php
        $val = 0;
        $amount = 0;
        // $qnt = 0;
        foreach($orders as $order){
            $r = $order->store_user->id;
            // echo 'order->store_user->id: '.$r;
            // echo 'store_user id: '.$store_user->id;
            if ($r == $store_user->id){

                $val = $val + 1;
                $unit= floatval($order->unit_price);
                $qnt = floatval($order->no_quantity);
                $t = $unit * $qnt;
                $amount = $amount + $t;
                // $total_amount = $unit * $qnt;
                
                
            }
        }
    ?>
    <p><strong>Total order provided: </strong> {{$val}}</p>

    <p><strong>Sold Amont: </strong>{{$amount}} taka</p>
</div>
@endsection