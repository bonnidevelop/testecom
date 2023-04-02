@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>

                <div class="carousel-inner">

                    @foreach($products as $item)

                    <a href="/details/{{$item['id']}}">
                        <div class="carousel-item {{$item['id']==1?'active':''}}">
                            <img style="height:30rem;" src="{{$item['gallery']}}" class="d-block ms-auto me-auto" alt="...">
                            <div class="carousel-caption d-none d-md-block bg-info">
                                <h5>{{$item['name']}}</h5>
                                <p>{{$item['description']}}</p>
                            </div>
                        </div>
                    </a>

                    @endforeach
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-md-12 ">

            @foreach($products as $item)

            <div style="float:left; padding:2rem; text-align:center">
                <img style="height:12rem;" src="{{$item['gallery']}}" alt="...">
                <div>
                    <h5>{{$item['name']}}</h5>
                    <p>{{$item['description']}}</p>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</div>

@endsection