<?php

use App\Http\Controllers\productcontroller;

$total = productcontroller::count();

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pro">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/orderlist">Oders</a>
        </li>
       
      </ul>
      <ul class="navbar-nav me-left mb-2 mb-lg-0">
        @if(Session::has('user'))
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" d="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{session('user')['name']}}</a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="/cartlist">({{$total}}) Cart</a></li>
                <li><a class="dropdown-item" href="/logout">Log Out</a></li>
              </ul>
          </li>
        @else

          <li class="nav-item">
              <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"> login</a>
          </li>

        @endif
      </ul>
      <form class="d-flex" action="/search" method="get">
        <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>