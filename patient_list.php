<?php
session_start();


include('server_connection.php'); 

// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {

  header('location:logout.php');

  } else{

    }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Patient List</title>

  <?php include('head.php');  ?>
</head>
<body>
<?php include('header.php') ?>


<?php  include('aside.php'); ?>


<section id="main-content">
     
    
  <section class="wrapper">
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        
        <div class="row">
            <div class="col-md-6 col-sm-6">
                Patient list
            </div>
             <div class="col-md-6 col-sm-6">
                 <a href="add_patient.php" role="button" class="btn btn-primary btn-sm">Register</a>
             </div>
            
        </div>
        
     
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>
                Sr.No.
            </th>
            <th>Patient Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Phone No.</th>
             <th>Address</th>
              <th>Created On</th>
             <th>Action</th>
             
          </tr>
        </thead>
        <tbody>

   <?php
    $num=1;
    $sql="SELECT * FROM patients";
    $run=mysqli_query($con,$sql);
 
    while ($data=mysqli_fetch_assoc($run)) {
 
   ?>


          <tr>
          <td> <span class="text-ellipsis"><?php  echo$num; ?> </td>
            <td><span class="text-ellipsis"><?php  echo $data['first_name']." ". $data['last_name'];  ?> </td>
           
           <td> <span class="text-ellipsis"><?php  echo$data['gender']; ?> </td>
       
            <td><span class="text-ellipsis"><?php  echo$data['age'];   ?></span></td>
             <td><span class="text-ellipsis"><?php  echo$data['phone'];   ?></span></td>
              <td><span class="text-ellipsis"><?php  echo$data['address'];   ?></span></td>
              <td><span class="text-ellipsis"><?php  echo$data['created_on'];   ?></span></td>
            
            <td>
              <a href="remedy.php?patient_id=<?= $data['patient_id']; ?>&name=<?=$data['first_name']." ".$data['last_name']; ?>&age=<?=$data['age']; ?>" class="active" ui-toggle-class="">
                  <i class="fa fa-stethoscope text-success text-active"></i></a>
            </td>
          </tr>

        <?php $num++; }?>
         
        </tbody>
      </table>
    </div>

  </div>
</div>



<?php   include('footer.php'); ?>


</body>
</html>












