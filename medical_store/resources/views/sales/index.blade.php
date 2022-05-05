@extends('layout')

@section('title')
   Sales statistics 
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Sales Statistics</h1>
        <h4>Today's sale</h4>
    </div>
    <hr>
    <div class="col-12">
        <h4>Monthly sale</h4>
         {{$months}}
    </div>
</div>

@endsection
