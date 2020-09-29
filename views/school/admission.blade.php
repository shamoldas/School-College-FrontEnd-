@extends('includes.layout')
@section('content')


<div class="container">
  <div class="row">
          <div class="col-sm">
            <h3 style="color:green"><center><b>Admission</b></center></h3>
          </div>
  </div>
</div>

<br>

<div class="container">

            <div class="row">

            <div class="col-sm-3">
              <div class="form-group">
                <label><b>Edu Level:</b> </label>
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
            
               <label><b>Select Department/Class:</b> </label>
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
            
           
                 <label><b>Select Year/Clsss</b> </label> 
                   <select class="form-control" name="select3" id="select3">
                    <option class="label" value>Select Year/Class</option>

                    <option rel="AS1" value="KI1">1<span>st</span></option>
                  
                    

                </select>
              </div>

            </div>


           <div class="col-sm-3">
              <div class="form-group">
            
           
                 <label><b>Select Section</b></label> 
                   <select class="form-control" name="select4" id="select4">
                    <option class="label" value>Select Your Section</option>

                    <option rel="AS1" value="KI1">A</option>
                     <option rel="AS1" value="KI1">B</option>
                      <option rel="AS1" value="KI1">C</option>

              
                </select>
              </div>

            </div>


      </div>


       <div class="row">
          <div class="col-sm-3">
             <div class="form-group">
                <label for="exampleFormControlSelect1"><b>Session</b></label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>2020</option>
                </select>
              </div>
            </div>

            <div class="col-sm-3">
             <div class="form-group">
                <label for="exampleFormControlSelect1"><b>Transaction ID</b></label>
              <input type="text" name="tid">
              </div>
            </div>
    

        
          <div class="col-sm-3">
            <div class="form-group">
                <button><input type="submit" name="submit">Submit</button>
            </div>
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






<br>

@endsection