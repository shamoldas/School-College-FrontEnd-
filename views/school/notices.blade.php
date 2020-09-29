@extends('includes.layout')
@section('content')


<div class="container">
  <div class="row">
          <div class="col-sm">
            <h3 style="color:blue"><center><b>Notices</b></center></h3>
          </div>
  </div>
</div>

<br>
<div class="container">
  <div class="row">
    <div class="col-sm-8">

        <ul class="list-group">
  <li class="list-group-item"><a href="{{url('library')}}">Enrollment</a></li>

  
  <li class="list-group-item "><a href="{{url('book')}}">Annul Fest</a></li>
  <li class="list-group-item "><a href="">Migration</a></li>
  <li class="list-group-item "><a href="">Class Routing</a></li>
  <li class="list-group-item "><a href="">Research & Publication</a></li>
  <li class="list-group-item "><a href="">Some Useful Links</a></li>

</ul>

    </div>
    <div class="col-sm-4">
      

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-thumbnail" src='images/brand.jpg' alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="img-thumbnail" src='images/img2.jpg' alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="img-thumbnail" src='images/img3.jpg' alt="Third slide">
            </div>
          </div>
         
        </div>


    </div>
  </div>
</div>






<br>















@endsection