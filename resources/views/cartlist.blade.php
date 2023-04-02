@extends('master')
@section('content')

<div class="container">
    <a href="/odernow" class="btn btn-success">Oder now</a>
    @foreach($list as $itr)
    <div class="row">
        
        <div class="col-md-4">
            <img class="img-fluid" src="{{$itr->gallery}}">
        </div>

        <div class="col-md-8 ">
            <a href="/pro">goback</a>
            <h3>{{$itr->name}}</h3>
            <h3>{{$itr->price}}</h3>
            <h3>{{$itr->description}}</h3>
            <h3>{{$itr->catagory}}</h3>
            <a href="removeitem/{{$itr->cart_id}}" class="btn btn-primary">Remove</a>
        </div>
        

    </div>
    @endforeach
</div>

@endsection