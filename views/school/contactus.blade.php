@extends('includes.layout')
@section('content')
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="heading"><b>Contact Information</b></h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
            <div class="con align-self-stretch p-3">
              <p><b>Address:</b> Nishchinta,Joypurhat,Bangladesh</p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="con align-self-stretch p-3">
              <p class="icon icon-phone"><b>Phone:</b> <a href="tel://+8801920321858">+880 1920 321858</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="con align-self-stretch p-3">
              <p><b>Email:</b> <a href="mailto:shyamoldas333@gmail.com">shyamoldas333@gmail.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="con align-self-stretch p-3">
              <p><b>Website</b> <a href="law">ShamolDas/Law</a></p>
            </div>
          </div>
        </div>





        
        <div class="row block-9">

           @if(count($errors) > 0)
            <div class="alert alert-danger">
             <ul>
             @foreach($errors->all() as $error)
              <li>{{$error}}</li>
             @endforeach
             </ul>
            </div>
            @endif
            @if(\Session::has('success'))
            <div class="alert alert-success">
             <p>{{ \Session::get('success') }}</p>
            </div>
            @endif



          <div class="col-md-6 pr-md-5">
                <form method="post" action="{{url('law')}}">
                    {{csrf_field()}}
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
               <div class="form-group">
                <input type="submit" class="btn btn-primary" />
               </div>
            </form>
          
          </div>












        <div class="col-md-6 d-flex">
            <iframe src="https://www.google.com/maps/dir/25.0945906,89.03073/Joypurhat+Govt.+College,+College+Road,+%E0%A6%9C%E0%A6%AF%E0%A6%BC%E0%A6%AA%E0%A7%81%E0%A6%B0%E0%A6%B9%E0%A6%BE%E0%A6%9F/@25.0958911,89.0224179,16z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x39fc938f7d8913f1:0xa480813aa980aa77!2m2!1d89.023203!2d25.0971753" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>

          </div>


        </div>
      </div>
 @endsection
