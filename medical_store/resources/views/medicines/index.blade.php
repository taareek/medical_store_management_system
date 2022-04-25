@extends('layout')

@section('title')
    Medicine List
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Medicine List</h1>
        <p><a href="medicines/create">Add New Mediicne</a></p>
    </div>
</div>
<br>
<div class="row">
            <div class="col-2">
                <p><strong>Medicine Name</strong></p>
            </div>
             
            <div class="col-2">
                <p><strong>Medicine Strength</strong></p>
            </div>
            <!-- <div class="col-2">
                <p><strong>Generic Name</strong></p>
            </div> -->
            
            <div class="col-2">
                <p><strong>Quantity In A Packet</strong></p>
            </div>

            <div class="col-2">
                <p><strong>Unit Price</strong></p>
            </div>

            <div class="col-2">
                <p><strong>Medicine Status</strong></p>
            </div>

            <div class="col-2">
                <p><strong>Location Rack</strong></p>
            </div>
        </div>
        <hr>

    @foreach($medicines as $medicine)
        <div class="row">
            <div class="col-2">
                <a href="/medicines/{{$medicine->id}}">{{$medicine->medicine_name}}</a>
            </div>
            
            <div class="col-2">
                {{$medicine->medicine_strength}}
            </div>
            <div class="col-2">
                {{$medicine->medicine_pack_quantity}}
            </div>

            <div class="col-2">
            <?php
                $packet_price = $medicine->medicine_price;
                $per_packet = $medicine->medicine_pack_quantity;
                $unit_price = $packet_price / $per_packet;
                // $medicine->medicine_price
            ?>
                {{round($unit_price, 2)}}
            </div>

            <div class="col-2">
                <!-- If equals to 1 then Avaialbele, 0: Unavailable -->
                {{$medicine->medicine_status ? 'Available': 'Unavailable'}}
            </div>

            <div class="col-2">
                <!-- This location rack is accessing from Medicine Models public functions relations -->
                {{$medicine->location_rack->number}}
            </div>

        </div>
    @endforeach
    
@endsection