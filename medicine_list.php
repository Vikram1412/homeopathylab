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
  <title>Medicine::Homeopathy</title>

  <?php include('head.php');  ?>
</head>
<body>
<?php include('header.php') ?>


<?php  include('aside.php'); ?>


<section id="main-content">
  <section class="wrapper">

  <div class="panel panel-default">
  <div class="panel-heading">
     Add Medicine 
    </div>

    <div class="panel-body">

    <form class="form row" method="post">
    <div class="form-group col-sm-6">
    <label for="medicine">Enter name of medicine</label>
    <input type="text" class="form-control" id="medicine" name="medicine" placeholder="Enter medicine name">
    </div>

    <div class="form-group col-sm-6">
    <label for="Potency">Enter potency of medicine</label>
    <input type="text" class="form-control" id="Potency" name="Potency"  placeholder="Enter Potency">
    </div>

    <div class="form-group col-12">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>

    </form>

    </div>
  </div>

  <?php
  
if (isset($_POST['submit'])){


$medicine=$_POST['medicine'];
$Potency = $_POST['Potency'];

$run2=mysqli_query($con,"INSERT INTO `medicine_list` (`id`, `medicine`, `dilutions`,`description`) VALUES (NULL, '$medicine', '$Potency', '');");

if ($run2) {
  echo '<script>alert("'.$medicine.' Add successfully ! ")</script>';
}else{

 echo '<script>alert("'.$medicine.' Not added list ! ")</script>';

}

}

?>



  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List of medicine
    </div>

    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              Sr.No.
            </th>
            <th>Medicine</th>
             <th>Potency</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

   <?php
    $num=1;
    $sql="SELECT * FROM medicine_list ORDER BY id DESC";
    $run=mysqli_query($con,$sql);
 
    while ($data=mysqli_fetch_assoc($run)) {
 
   ?>


          <tr>
              <td><?php  echo$num;   ?></td>
           
            <td><span class="text-ellipsis"><?php  echo$data['medicine'];   ?></span></td>
            <td><span class="text-ellipsis"><?php  echo$data['dilutions'];   ?></span></td>
            
            <td>
              <a href="#" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active"></i></a>
            </td>
          </tr>

        <?php  $num++; }?>
         
        </tbody>
      </table>
    </div>
 
  </div>
</div>



<?php   include('footer.php'); ?>


</body>
</html>











