@extends('master')
@section('content')

<div class="container">
    @foreach($list as $itr)
    <div class="row">
        
        <div class="col-md-4">
            <img class="img-fluid" src="{{$itr->gallery}}">
        </div>

        <div class="col-md-8 ">
            <h3>{{$itr->name}}</h3>
            <h3>{{$itr->price}}</h3>
            <h3>Delivery: {{$itr->status}}</h3>
            <h3>Payment Method: {{$itr->payment_method}}</h3>
        </div>
        

    </div>
    @endforeach
</div>

@endsection