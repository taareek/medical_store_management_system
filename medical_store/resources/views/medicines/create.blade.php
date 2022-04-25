@extends('layout')

@section('title', 'Add Medicine')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add a Medicine</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/medicines" method="POST" class="pb-2" enctype="multipart/form-data">
                
                @include('medicines.form')
                <br>
                <button type="submit" class= "btn btn-primary">Add Medicine</button>
            </form>
        </div>
    </div>
    @endsection