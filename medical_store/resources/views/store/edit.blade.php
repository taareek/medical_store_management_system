@extends('layout')

@section('title', 'Edit ' . $store_user->user_name)

@section('content')
<div class="row-12">
    <h2>Edit {{$store_user->user_name}}'s information </h2>
</div>

<div class="row"> 
        <div class="col-12">
            <form action="/store_users/{{$store_user->id}}" method="POST" class="pb-2" enctype="multipart/form-data">
                @method('PATCH')
                 
                <div class="form-group">
                    <label for="user_name">User Name</label>
                    <input type="text" name="user_name" value="{{old('user_name')?? $store_user->user_name}}" class="form-control">    
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
                        <option value="{{ old('user_status') ?? $store_user->user_status}}" disabled>Select user status</option>
                        <option>On-duty</option> 
                        <option>On-leave</option>
                    </select>
                    {{$errors->first('user_status')}}
                </div>  
                @csrf 
                <br>
                <button type="submit" class= "btn btn-primary">Save information</button>
            </form>
        </div>
    </div>

@endsection
