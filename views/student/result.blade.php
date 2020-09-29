

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

<br>

<div class="container">
  <div class="row">
          <div class="col-sm">
            <h3 style="color: gold"><center><b>Result</b></center></h3>
          </div>
  </div>
</div>


<!--
<div class="container">
  <div class="row">

            <div class="col-sm-3">
              <div class="form-group">
                <label>Processeor: </label>
                <select class="form-control" id="processor" name="processor">
                <option class="label" value>Select Processor</option>
              
                <option value="P1">Processor 1</option>
                <option value="P2">Processor 2</option>
                <option value="P3">Processor 3</option>
                <option value="P4">Processor 4</option>

                </select>
              </div>

            </div>


            <div class="col-sm-3">
              <div class="form-group">
            
               <label>Select motherboard: </label>
                <select  id="motherboard" name="motherboard" class="subcat" disabled="disabled">
                <option class="label" value>Select Motherboard</option>
                
                <option rel="P1 P2" value="AS1">ASUS RAMPAGE V EXTREME</option>
                <option rel="P2 P3" value="AS2">ASUS ATX DDR3 2600 LGA</option>
                <option rel="P1 P3 P4" value="GB1">Gigabyte AM3+</option>
                <option rel="P2 P4" value="MSI1">MSI ATX DDR3 2600 LGA 1150</option>

                </select>
              </div>

            </div>

            <div class="col-sm-3">
              <div class="form-group">
            
           
                 <label>Select RAM: </label> 
                 <select disabled="disabled" class="subcat" id="RAM" name="RAM">
                  <option class="label" value>RAM Memory</option>
                  <option rel="AS1 AS2 GB1" value="KI1">Kingston Value RAM</option>
                  <option rel="AS1 AS2 MSI1" value="P5KPL">P5KPL-AM SE</option>
                  <option rel="MSI1 GB1" value="960GM">960GM-VGS3 FX </option>
                </select>
              </div>

            </div>


            <div class="col-sm-3">
              <div class="form-group">

                 <label>Select Video Board: </label>

                 <select disabled="disabled" class="subcat" id="video-card" name="video-card">
                  <option class="label" value>Video Card</option>
                  <option rel="MSI1 AS2" value="EVGA8400">EVGA GeForce 8400 GS</option>
                  <option rel="AS1" value="XFXAMD">XFX AMD Radeon HD 5450</option>
                  <option rel="MSI1 GB1" value="GTX750Ti">EVGA GeForce GTX 750Ti SC</option>
                </select>
            
           
              </div>

            </div>


      </div>
  </div>




<script type="text/javascript">
  
  $(function(){

  // add a supercategory for the processor
  var $supcat = $("#processor"),
      $cat = $("#motherboard"),
      $subcat = $(".subcat");
  
  // duplicate the code for the processor -> motherboard
  $supcat.on("change",function(){
    var _rel = $(this).val();
    $cat.find("option").attr("style","");
    $cat.val("");
    if(!_rel) return $cat.prop("disabled",true);
    $cat.find("[rel~='"+_rel+"']").show();
    $cat.prop("disabled",false);
  });
  
  $cat.on("change",function(){
    var _rel = $(this).val();
    $subcat.find("option").attr("style","");
    $subcat.val("");
    if(!_rel) return $subcat.prop("disabled",true);
    $subcat.find("[rel~='"+_rel+"']").show();
    $subcat.prop("disabled",false);
  });
});
</script>


-->







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
                     <option rel="AS1" value="KI1">2nd</option>
                      <option rel="AS1" value="KI1">3rd</option>
                         <option rel="AS1" value="KI1">4th</option>
                    

                </select>
              </div>

            </div>


           <div class="col-sm-3">
              <div class="form-group">
            
           
                 <label><b>Select Year/ClsssM</b></label> 
                   <select class="form-control" name="select4" id="select4">
                    <option class="label" value>Select Year/Class</option>

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
                <label for="exampleFormControlSelect1"><b>Exam Name</b></label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1st Term</option>
                  <option>2nd Term</option>
                  <option>Class Test</option>
                  <option>Final</option>
                  <option>Improvement</option>
                </select>
              </div>
            </div>
    

        
        
      </div>

         <div class="row">
        
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





<script type="text/javascript">
  $("#department").chained("#edulevel");

</script>


<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="country"]').on('change',function(){
               var countryID = jQuery(this).val();
               if(countryID)
               {
                  jQuery.ajax({
                     url : 'dropdownlist/getstates/' +countryID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="state"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="state"]').empty();
               }
            });
    });
    </script>
  </body>


<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="jquery.chained.js"></script>



@endsection