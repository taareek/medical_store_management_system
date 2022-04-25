@extends('layout')

@section('title')
    Add a user
@endsection

@section('content')
    <h1>Create a new user </h1>
    
    <form action="/store_users" method="POST">
    <div class="form-group">
        <label for="user_name">User Name</label>
        <input type="text" name="user_name" value="{{ old('user_name')}}" class="form-control">    
        {{$errors->first('user_name')}}
    </div>

    <div class="form-group">
        <label for="user_type">User type</label>
        <select name="user_type" id="user_type" class= "form-control">
            <option value="" disabled>Select user type</option>
            <option>Salesman</option> 
            <option>Maneger</option>
            <option value="">Admin</option>
        </select>
    </div>

    <div class="form-group">
        <label for="user_status">User Status</label>
        <select name="user_status" id="user_status" class= "form-control">
            <option value="{{ old('user_status')}}" disabled>Select user status</option>
            <option>On-duty</option> 
            <option>On-leave</option>
        </select>
        {{$errors->first('user_status')}}
    </div>  
    @csrf 
    <br>
    <button type="submit" class="btn btn-primary">Save User</button>
    </form>
@endsection