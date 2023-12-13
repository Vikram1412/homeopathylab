<?php
session_start();
include('server_connection.php'); 

// checking session is valid or not valid

if (strlen($_SESSION['id']==0)) {

  header('location:logout.php');

  }else{

    }
    
   
        
        /*for update or statchange of th category*/
        
        if(isset($_GET['active'])){
        $id2=$_GET['id'];
        $sts=$_GET['active'];
        
        $sqlt="UPDATE category SET status=b'$sts' WHERE id='$id2'";
        $run4=mysqli_query($con,$sqlt);
            
        }
  
    
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Appointmentt:: Homeopathy </title>

  <?php include('head.php');  ?>
</head>
<body>
<?php include('header.php') ?>


<?php  include('aside.php'); ?>


<section id="main-content">
     
    
<section class="wrapper">
    
  <div class="">
  <div class="panel panel-default">
    <div class="panel-heading" style="height:32px;line-height:30px !important;">
      Appointment
    </div>
    <div class="panel-body">
     <div class="row">
         <div class="col-md-2"> </div>
         <div class="col-md-8"> 
          
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
          <input type="radio" id="m" name="Gender" value="m" required autofocus > <label for="m" >Male</label>&nbsp;&nbsp;
          <input type="radio" id="f" name="Gender" value="f" required autofocus > <label for="f">Female</label>&nbsp;&nbsp;
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
        <button class="btn  btn-primary btn-block" type="submit" name="submit">Book appointment</button>
        </div>
      </form>
      </div>
        <div class="col-md-2"> </div>
     
      </div>
      </div>

    
    
   
</section>
</section>

        
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


<?php   include('footer.php'); ?>


</body>
</html>












