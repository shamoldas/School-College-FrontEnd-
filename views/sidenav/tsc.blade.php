@extends('includes.layout')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-sm-12">
        <center><h3 style="background-color: green;">About TSC</h3></center>
      </div>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-thumbnail" src='images/library/tsc-1.jpg' alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="img-thumbnail" src='images/library/tsc-2.jpg' alt="Second slide">
            </div>

            <div class="carousel-item active">
              <img class="img-thumbnail" src='images/library/tsc-1.jpg' alt="First slide">
            </div>
         
          </div>
         
        </div>


    </div>
  </div>
</div>



@endsection