@extends('includes.layout')

@section('content')
<div>
  <img src="images/department.jpg" class="img-fluid" alt="Responsive image">
</div>

<br>

<div class="container">
  <div class="row">

    <div class="col-sm-4">

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col" colspan="2"><center>First</center></th>
               
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Department</td>
                <td>12</td>
              
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Total Teacher</td>
                <td>30</td>
              </tr>

               <tr>
                <th scope="row">3</th>
                <td>Total Student</td>
                <td>800</td>
               
              </tr>

               <tr>
                <th scope="row">4</th>
                <td>Total Degree Offer</td>
                <td>30</td>
               
              </tr>
               <tr>
                <th scope="row">5</th>
                <td>Total Club
                </td>
                <td>7</td>
                
              </tr>

             
            </tbody>
          </table>
      
     
    </div>

     <div class="col-sm-1">
     </div>


    <div class="col-sm-7">

      <form>

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col" colspan="2"><center>Details</center></th>
               
                
              </tr>
            </thead>
          </table>
         
          <div class="form-group" style="background-color:#3A6EAF ">
            <label for="exampleFormControlSelect1">Department</label>
            <select class="form-control" id="exampleFormControlSelect1" style="background-color: #C80C17">
              <option>CSE</option>
              <option>EEE</option>
              <option>ECE</option>
              <option>ME</option>
              <option>CE</option>
            </select>
          </div>
           <div class="form-group" style="background-color:#3A6EAF ">
            <label for="exampleFormControlSelect1">Induvidual Class & Student</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>CSE/70</option>
              <option>EEE/70</option>
              <option>ECE/70</option>
              <option>ME/45</option>
              <option>CE/50</option>
            </select>
          </div>
           <div class="form-group" style="background-color:#3A6EAF ">
            <label for="exampleFormControlSelect1">Club & Organization</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>CSE Club</option>
              <option>Math Club</option>
              <option>Science Club</option>
              <option>Englisk Spoken Club</option>
              <option>Career Club</option>
            </select>
          </div>
           <div class="form-group" style="background-color:#3A6EAF ">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
         
         
        </form>
      

      


    </div>
  </div>
</div>



@endsection