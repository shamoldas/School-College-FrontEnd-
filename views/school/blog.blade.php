@extends('includes.layout')
@section('content')




<h3><b><center>BLOG Area</center></b></h3>


  <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Job_Title</th>
    <th>Address</th>

   </tr>
   @foreach($contact as $row)
   <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['email']}}</td>
    <td>{{$row['phone']}}</td>
    <td>{{$row['job_title']}}</td>
    <td>{{$row['address']}}</td>
  
   
   </tr>
   @endforeach
  </table>

    <section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url(images/practice-1.jpg);"></a>
							<div class="info">
								<h3><a href="#">Family Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url(images/practice-2.jpg);"></a>
							<div class="info">
								<h3><a href="#">Business Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url(images/practice-3.jpg);"></a>
							<div class="info">
								<h3><a href="#">Employment Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url(images/practice-4.jpg);"></a>
							<div class="info">
								<h3><a href="#">Drug Control Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url(images/practice-5.jpg);"></a>
							<div class="info">
								<h3><a href="#">Criminal Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="practice">
							<a href="#" class="img" style="background-image: url(images/practice-6.jpg);"></a>
							<div class="info">
								<h3><a href="#">Insurance Law</a></h3>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
				</div>
        
   
			</div>
		</section>

@endsection