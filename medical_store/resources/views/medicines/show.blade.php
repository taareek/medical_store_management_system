@extends('layout')

@section('title', 'Details of ' . $medicine->medicine_name)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Details for {{$medicine->medicine_name}} </h1>
        <p><a href="/medicines/{{$medicine->id}}/edit">Edit</a></p>

        <form action="/medicines/{{ $medicine->id}}" method= "POST">
            @method('DELETE')
            {{ csrf_field() }}
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

</div>

<div class="row">
    <div class="col-12">
    <p><strong>Name: </strong>{{$medicine->medicine_name}} </p>
    <p><strong>Generic Name: </strong>{{$medicine->medicine_generic_name}} </p>
    <p><strong>Strength: </strong>{{$medicine->medicine_strength}} </p>
    <p><strong>Status: </strong>{{$medicine->medicine_status ? 'Available': 'Unavailable'}} </p>
    <p><strong>Packet Quantity: </strong>{{$medicine->medicine_pack_quantity}} </p>  
    <p><strong>Price: </strong>{{$medicine->medicine_price}} TK.</p>
    <?php
        $packet_price = $medicine->medicine_price;
        $per_packet = $medicine->medicine_pack_quantity;
        $unit_price = $packet_price / $per_packet;
        // echo "<br>";
        // echo $unit_price;
    ?>
    <p><strong>Unit Price: </strong> {{round($unit_price, 2)}} TK.</p>
    <p><strong>Manufractured Company: </strong>{{$medicine-> manufracturer->manufracturer_name}}</p>
    <p><strong>Medicine Category: </strong> {{$medicine->medicine_cat->cat_name }}</p> 
    </div>
</div>

@endsection