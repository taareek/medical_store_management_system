@extends('layout')

@section('title')
    Date wise sale
@endsection

@section('content')
    
     
    <h3>
    <?php
        if(isset($date)){
            $l_date = substr($date, 0, -8);
            echo 'Total Sales In '.$l_date;
        }elseif(isset($month) && isset($year)){
            $t = $month.', '. $year;
            echo 'Total Sales In '.$t;
        }else{
            echo 'Total Sales In '. $year;
        }
    ?>
    </h3>

    <hr>
    <div class="row">
        <div class="col-1">
            <p><strong>Order ID</strong></p>
        </div>

        <div class="col-3">
            <p><strong>Customer Name</strong></p>
        </div>
        
        <div class="col-2">
            <p style="text-align:center;"><strong>Unit Price</strong></p>
        </div>

        <div class="col-2">
            <p><strong>Number of Quantity</strong></p>
        </div>

        <div class="col-3">
            <p style="text-align:center;"><strong>Total Amount</strong></p>
        </div>

    </div>
    <hr>

    <div class="row">
    <?php $total = 0;?>
    @foreach($orders as $order)
        <div class="row">
            <div class="col-1">
            <a href="/orders/{{$order->id}}">{{$order->id}}</a>
            </div>

            <div class="col-3">
                <p>{{$order->customer_name}}</a></p>
            </div>

            <div class="col-2" >
                <p style="text-align:center;">{{$order->unit_price}}</p>
            </div>

            <div class="col-2">
                <p style="text-align:center;">{{$order->no_quantity}}</p>
            </div>

            
            <div class="col-3">
             <?php
                $u_price = $order->unit_price;
                $quantity = $order->no_quantity;
                $order_total = $u_price * $quantity;
                $total += $order_total;
             ?>
            <p style="text-align:center;">{{ $order_total }}</p>
                
            </div>


        </div>
    @endforeach
    <hr>
    <h3 style= "text-align: right; padding-right:16rem;">Total Sale:  {{$total}}</h3>
    </div>
@endsection

