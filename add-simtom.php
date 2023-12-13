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
  <title> add simtom </title>

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
    Add siimtom <span class="btn btn-success" style="float: right;"><a href="add-simtom.php"><i class="fa fa-plus "></i></a> </span>
    </div>
    <div class="panel-body">
   
   <form class="" method="post" action="">

    <div class="form-group col-6">
    <label for="subcategory">select sub category</label>
    <select class="form-control" id="subcategory" name="subcategory">

<?php  
 $sql1="select * from subcategory";
  $run1=mysqli_query($con,$sql1);
  while ($data1=mysqli_fetch_assoc($run1)) {


            echo'<option value="'.$data1['id'].'">'.$data1['subcategory'].'</option>';

  }
  ?>
    </select>
  </div>

  <div class="form-group col-6">

    <label for="simtom">Enter Simtom</label>

    <input type="text" class="form-control" id="simtom" name="simtom"   placeholder="Enter simtom">
    
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    
   <textarea class="form-control" id="description" name="description"  rows="5"> </textarea> 
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

   
  </div>
</div>
</section>


<?php   include('footer.php'); ?>


</body>
</html>

<?php

if (isset($_POST['submit'])) {
  

$subcategory = $_POST['subcategory'];
$simtom    = $_POST['simtom'];
$description  = $_POST['description'];

//echo $category,$subcategory,$description;

$sql="INSERT INTO `simtoms`( `subcategory`,`simtom`, `description`) VALUES ('$subcategory','$simtom','$description')";
if ($run=mysqli_query($con,$sql)) {

echo'<script>alert("Sub simtom add successfully")</script>';

}else{

echo'<script>alert("Failed.")</script>';

}

}


?>









