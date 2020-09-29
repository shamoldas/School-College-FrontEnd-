@extends('includes.sidenavlayout')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-sm-12">
        <center><h3 style="background-color: blue;">About Us</h3></center>
      </div>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <p>The medical center offers free medical service to students, Medical Centerteachers, staffs and family members of the teachers and staff. The center provides service round-the-clock, seven-days-a-week, with five doctors and ambulance facility. The center has 10 bed accommodation so that patients suffering from contagious diseases may be cared for in isolation. HSTU Medical center is also offering outdoor facilities.</p>
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



@endsection