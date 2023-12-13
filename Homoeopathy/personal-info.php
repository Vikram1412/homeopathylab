<?php  

include('serverconnect.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web App.</title>
  </head>
  <body>
  

<section class="container-flud bg-secondary">
<div class="jumbotron jumbotron bg-info">
  <div class="container">
    <h1 class="display-4">Homoeopathy Online Treatment</h1>
    <p class="lead">Find right remendy for your disease.</p>
  </div>
</div>


<div class="card ">
  <div class="card-body">
      
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-md-4"> 
          
          <form class="form-group row" method="post">
        
        <div class="form-group col-sm-6">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name" name="first_name"   required autofocus autocomplete="on">
          <span class="help-block"></span>
        </div>
        <div class="form-group  col-sm-6 ">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" id="last_name" name="last_name"   autofocus autocomplete="on">
          <span class="help-block"></span>
        </div> 
         <div class="form-group  col-sm-12 ">
          </br>
          <input type="radio" id="m" name="Gender" value="m" required autofocus > <label for="m" >Male</label>&nbsp;&nbsp;
          <input type="radio" id="f" name="Gender" value="f" required autofocus > <label for="f">Female</label>&nbsp;&nbsp;
         
         </br>
         </br>
          
          
        </div>
        
        <div class="form-group  col-sm-6">
          <label for="age">Age</label>
          <input type="number" class="form-control" id="age" name="age"  min="1" max="99" required>
          <span class="help-block"></span>
        </div>
        
         <div class="form-group  col-sm-6">
          <label for="phone_number">Phone Number</label>
          <input type="tel" class="form-control" id="phone_number" name="phone_number" >
          <span class="help-block"></span>
        </div>
        
        <div class="form-group  col-sm-6">
          <label for="email_address  col-sm-6">Email Address</label>
          <input type="email" class="form-control" id="email_addr"  required>
          <span class="help-block"></span>
        </div>
        <div class="form-group  col-sm-6">
          <label for="email_address_confirm">Confirm your email address.</label>
          <input type="email" class="form-control" id="email_address_confirm" name="email_confirm" required autocomplete="off">
          <span class="help-block"></span>
        </div>
       
        
        <div class="form-group  col-sm-12">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address"  name="address"  required>
          <span class="help-block"></span>
        </div>
        
        <div class="form-group  col-sm-12 m-1">
        <button class="btn  btn-primary btn-block" type="submit" name="submit">Make appointment</button>
        </div>
      </form></div>
      <div class="col-sm-4"></div>
      </div>
        
        
<?php

if(isset($_POST['submit'])){
$first_name= $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender=$_POST['Gender'];
$age=$_POST['age'];
$email=$_POST['email_confirm'];
$phone=$_POST['phone_number'];
$address=$_POST['address'];

$run=mysqli_query($con,"INSERT INTO `patients` (`patient_id`, `first_name`, `last_name`, `gender`, `age`, `phone`, `email`, `address`) VALUES (NULL, '$first_name', '$last_name', '$gender', '$age', '$phone', '$email', '$address')");

if($run===true){
    echo'<script>alert("Appointment done successfully !")</script>';
}else{
     echo'<script>alert("Appointment failed try again !")</script>';
}
    
}

?> 


  </div>
</div>

</section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


