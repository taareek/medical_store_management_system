@extends('layout')

@section('title')
    Employee List
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Store's Employee List</h1>
        <p><a href="store_users/create">Add New Employee</a></p>
    </div>
</div>
<div class="row">
    <div class="col-3">
        <p><strong>Emplyee Name</strong></p>
     </div>

    <div class="col-3">
        <p><strong>Employee Type</strong></p>
    </div>
    
    <div class="col-3">
        <p><strong>Employee Status</strong></p>
    </div>
</div>
<hr>
<div class="row">
    @foreach($store_users as $user)
        <div class="row">
            <div class="col-3">
            <a href="/store_users/{{$user->id}}">{{$user->user_name}}</a>
            </div>
            <div class="col-3"> {{$user->user_type}}</div>
            <div class="col-3"> {{$user->user_status}}</div>
        </div>
    @endforeach
</div>

@endsection