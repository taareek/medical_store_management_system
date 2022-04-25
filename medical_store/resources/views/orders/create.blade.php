@extends('layout')

@section('title')
    Create an order
@endsection

@section('content')
    <h1>Create a new order </h1>
    
    <form action="/orders" method="POST">
    <div class="form-group">
        <label for="customer_name">Customer Name</label>
        <input type="text" name="customer_name" value="{{ old('customer_name')}}" class="form-control">    
        {{$errors->first('customer_name')}}
    </div>

    <div class="form-group">
        <label for="customer_no">Customer Contact No</label>
        <input type="text" name="customer_no" value="{{ old('customer_no')}}" class="form-control">    
        {{$errors->first('customer_no')}}
    </div>


    <div class="form-group">
    <label for="medicine_id">Select Medicine</label>
    <select name="medicine_id" id="medicine_id" class= "form-control">
        <option value="" disabled>Select Medicine</option>
        @foreach($medicines as $medicine)
        <option value="{{ $medicine->id }}">{{ $medicine->medicine_name }}</option>
        @endforeach
    </select>
    </div>  
    
    <div class="form-group">
    <label for="unit_price">Medicine Price per unit</label>
    <select name="unit_price" id="unit_price" class= "form-control">
        <option value="" disabled></option>
        @foreach($medicines as $medicine)
         {{$unit_price = $medicine->medicine_price / $medicine->medicine_pack_quantity}}
        <option value="{{$unit_price}}">{{$medicine->medicine_name}}: {{$unit_price}} taka</option>
        @endforeach
    </select>
    </div>

    <div class="form-group">
        <label for="no_quantity">Numebr of Quantity</label>
        <input type="text" name="no_quantity" value="{{ old('no_quantity')}}" class="form-control">    
        {{$errors->first('no_quantity')}}
    </div>
    
    <div class="form-group">
    <label for="store_user_id">Select Salesman</label>
    <select name="store_user_id" id="store_user_id" class= "form-control">
        <option value="" disabled>Select Salesman</option>
        @foreach($salesmans as $salesman)
        <option value="{{ $salesman->id }}">{{ $salesman->user_name }}</option>
        @endforeach
    </select>
    </div>  

    @csrf 
    <br>
    <button type="submit" class="btn btn-primary">Make Order</button>
    </form>

@endsection