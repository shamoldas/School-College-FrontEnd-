
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="jquery.chained.js"></script>

<link href="path/to/css/dependent-dropdown.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="path/to/js/dependent-dropdown.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="{{url('dropdown.css')}}">



@extends('includes.layout')

@section('content')


<br><br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<div class="container">
  <div class="row">
          <div class="col-sm">
            <h3><center><b>Student Information</b></center></h3>
          </div>
  </div>
</div>




<div class="container">
  <div class="row">

            <div class="col-sm-3">
              <div class="form-group">
                <label>Edu Level: </label>
                <select class="form-control" name="select1" id="select1">
                <option class="label" value>Select</option>
                <!-- Home Ware -->
                <option value="P1">SCHOOL</option>
                <option value="P2">HSC</option>
                <option value="P3">HONOURS</option>
                <option value="P4">MASTERS</option>

                </select>
              </div>

            </div>


            <div class="col-sm-3">
              <div class="form-group">
            
               <label>Select Department/Class: </label>
                 <select class="form-control" name="select2" id="select2">
                <option class="label" value>Select Deparment/Class</option>
                <!-- Home Ware -->
                <option rel="P1 P2" value="P1">VIII</option>
                <option rel="P1" value="P1">IX</option>
                <option rel="P1" value="P1">X</option>

                <option rel="P2" value="P2">Science</option>
                <option rel="P2" value="P2">Commerce</option>
                <option rel="P2" value="P2">Humanities</option>

                <option rel="P3" value="P3">Bangla</option>
                <option rel="P3" value="P3">Physics</option>
                <option rel="P3" value="P3">Biology</option>
                <option rel="P3" value="P3">Management</option>
                <option rel="P3" value="P3">CSE</option>
                <option rel="P3" value="P3">Accounting</option>
                <option rel="P3" value="P3">Chemistry</option>
                <option rel="P3" value="P3">Finance</option>


               <option rel="P4" value="P4">Bangla</option>
                <option rel="P4" value="P4">Physics</option>
                <option rel="P4" value="P4">Biology</option>
                <option rel="P4" value="P4">Management</option>
                <!--

                <option rel="P1 P2" value="AS1">RAMPAGE V EXTREME</option>
                <option rel="P2 P3" value="AS2">ATX DDR3 2600 LGA</option>
                <option rel="P1 P3 P4" value="GB1">Gigabyte AM3+</option>
                <option rel="P2 P4" value="MSI1">MSI ATX DDR3 2600 LGA 1150</option>

              -->

                </select>
              </div>

            </div>

            <div class="col-sm-3">
              <div class="form-group">
            
           
                 <label>Select Year/Clsss </label> 
                   <select class="form-control" name="select3" id="select3">
                    <option class="label" value>Select Year/Class</option>

                    <option rel="AS1" value="KI1">1<span>st</span></option>
                     <option rel="AS1" value="KI1">2nd</option>
                      <option rel="AS1" value="KI1">3rd</option>
                         <option rel="AS1" value="KI1">4th</option>
                    

                </select>
              </div>

            </div>


           <div class="col-sm-3">
              <div class="form-group">
            
           
                 <label>Select Year/Clsss </label> 
                   <select class="form-control" name="select4" id="select4">
                    <option class="label" value>Select Year/Class</option>

                    <option rel="AS1" value="KI1">A</option>
                     <option rel="AS1" value="KI1">B</option>
                      <option rel="AS1" value="KI1">C</option>

              
                </select>
              </div>

            </div>


      </div>
  </div>







<div class="container">
  <div class="row">

            <div class="col-sm-3">

            </div>

            <div class="col-sm-3">

            </div>

            <div class="col-sm-3">

            </div>

            <div class="col-sm-3">
              <button class="success">Submit</button>

            </div>

  </div>
</div>




<script type="text/javascript">
  
  var $select1 = $( '#select1' ),
    $select2 = $( '#select2' ),
    $options = $select2.find( 'option' );
    
$select1.on( 'change', function() {
  $select2.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );
</script>



<!--
<script type="text/javascript">
  

 
function chainSelect(current, target){
  var value1 = $(current).on('change', function(){
    if($(this).find(':selected').val() != ''){
      $(target).removeAttr('disabled');
      var value = $(this).find(':selected').text();
    }else{
      $(target).prop('disabled', 'disabled').val(null);
    }
  return value;
  });
  return value1;
}
select1 = chainSelect('select#select1', '#select2');
select2 = chainSelect('select#select2', '#select3');
select3 = chainSelect('select#select3', '#select4');
</script>


-->
<br>



<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Student Info Form</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="" class="btn btn-primary">Student Info</a>

   <br />
   <br />
    <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Father Name</th>
    <th>Department</th>
    <th>Session</th>

   </tr>
   @foreach($students as $row)
   <tr>
    

      <td>{{$row['name']}}</td>
      <td>{{$row['fname']}}</td>
      <td>{{$row['department']}}</td>
      <td>{{$row['session']}}</td>
    
  
   
   </tr>
   @endforeach
  </table>
  </div>
 
 </div>
</div>



@endsection