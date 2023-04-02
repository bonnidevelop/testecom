@extends('master')
@section('content')

<div class="container">
    <div class="row">
        
        <div class="col-md-4">
            <img class="img-fluid" src="{{$prodetail['gallery']}}">
        </div>

        <div class="col-md-8 ">
            <a href="/pro">goback</a>
            <h3>{{$prodetail['name']}}</h3>
            <h3>{{$prodetail['price']}}</h3>
            <h3>{{$prodetail['description']}}</h3>
            <h3>{{$prodetail['catagory']}}</h3>
            <form action="/addcart" method="get">
                <button type="submit" name="cart" value="{{$prodetail['id']}}" class="btn btn-success">Add To Cart</button>
            </form>
            <button class="btn btn-primary">Buy Now</button>
        </div>
        

    </div>
</div>

@endsection