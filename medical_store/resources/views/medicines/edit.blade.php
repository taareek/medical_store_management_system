@extends('layout')

@section('title', 'Edit deatils of ' . $medicine->medicine_name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details of {{$medicine-> medicine_name}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/medicines/{{$medicine->id}}" method="POST" class="pb-2" enctype="multipart/form-data">
                @method('PATCH')
                @include('medicines.form')
                <br>
                <button type="submit" class= "btn btn-primary">Save Medicine</button>
            </form>
        </div>
    </div>
    @endsection