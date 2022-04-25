@extends('layouts')

@section('title', Store Users)

@section('content')

    <h1>Create store Users</h1>
    {{ csrf_field() }}
    <div class="form-group">
        <label for="user_name">User Name</label>
        <input type="text" name="user_name" value="{{ old('user_name')}}" class="form-control">    
        {{$errors->first('medicine_name')}}
    </div>

    <div class="form-group">
        <label for="user_type">User Type</label>
        <input type="text" name="user_type" value="{{ old('user_type') }}" class="form-control"> 
        {{$errors->first('medicine_strength')}}
    </div>

    <div class="form-group">
        <label for="user_status">User Status</label>
        <input type="text" name="user_status" value="{{ old('user_status')}}" class="form-control"> 
        {{$errors->first('medicine_generic_name')}}
    </div>

@endsection();
