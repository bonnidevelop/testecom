@extends('master')
@section('content')

<div class="container">
    @foreach($result as $itr)
    <div class="row">
        
        <div class="col-md-4">
            <img class="img-fluid" src="{{$itr['gallery']}}">
        </div>

        <div class="col-md-8 ">
            <a href="/pro">goback</a>
            <h3>{{$itr['name']}}</h3>
            <h3>{{$itr['price']}}</h3>
            <h3>{{$itr['description']}}</h3>
            <h3>{{$itr['catagory']}}</h3>
            <button class="btn btn-success">Add To Cart</button>
            <button class="btn btn-primary">Buy Now</button>
        </div>
        

    </div>
    @endforeach
</div>

@endsection