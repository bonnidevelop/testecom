@extends('master')
@section('content')

<div class="container">
    <div class="row">
        
        <h1></h1>
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Price</th>
                <th scope="col">tax</th>
                <th scope="col">delivery</th>
                <th scope="col">total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$amt}}</td>
                    <td>18</td>
                    <td>100</td>
                    <td>{{$amt+100}}</td>
                </tr>
                
            </tbody>
         </table>

         <div class="col-md-6">
            <form action="/orderplaced" method="post">
                @csrf
                <textarea name="address" cols="80"></textarea>
                <p><input type="radio" name="method" value="online" id=""> online</p>
                <p><input type="radio" name="method" value="cash" id=""> Cash</p>
                <p><input type="radio" name="method" value="card" id=""> Card</p>
                <button type="submit" class="btn btn-primary">Place Oder</button>

            </form>
         </div>


    </div>
</div>

@endsection