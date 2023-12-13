<?php

session_start();

 include('server_connection.php'); 

// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {

  header('location:logout.php');

  } else{

    }

   if (isset($_GET['id'])) {

    $id=$_GET['id'];

    if ($fire=mysqli_query($con,"delete from simtoms where id='$id'")) {
      echo '<script>alert("Simtom deleted")</script>';
    }


    } 
    
 if (isset($_POST['submit'])) {
  

$subcategory = $_POST['subcategory'];
$simtom    = $_POST['simtom'];
$description  = $_POST['description'];

//echo $category,$subcategory,$description;

$sql="INSERT INTO `simtoms`( `subcategory`,`simtom`, `description`) VALUES ('$subcategory','$simtom','$description')";
if ($run=mysqli_query($con,$sql)) {

echo'<script>alert("Sub symtom add successfully")</script>';

}else{

echo'<script>alert("Failed.")</script>';

}

}
   
    

?>

<!DOCTYPE html>
<html>
<head>
  <title>Symtom::Homeopathy</title>

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
    Add Symtom 
    </div>
    <div class="panel-body">
   
   <form class="row" method="post" action="">

    <div class="form-group col-sm-6">
    <label for="subcategory">select sub category</label>
    <select class="form-control" id="subcategory" name="subcategory">
        <option value="selected"> select </option>
<?php  
 $sql1="select * from subcategory";
  $run1=mysqli_query($con,$sql1);
  while ($data1=mysqli_fetch_assoc($run1)) {


            echo'<option value="'.$data1['id'].'">'.$data1['subcategory'].'</option>';

  }
  ?>
    </select>
  </div>

  <div class="form-group col-sm-6">

    <label for="simtom">Enter symtom</label>

    <input type="text" class="form-control" id="simtom" name="simtom"   placeholder="Enter symtom">
    
  </div>

  <div class="form-group col-sm-12">
    <label for="description">Description</label>
    
   <textarea class="form-control" id="description" name="description"  rows="5"> </textarea> 
  </div>
  <div class="form-group col-sm-12">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
      
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Symtom list 
    </div>

    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
        <tr>
          <th>Sr.No</th>
          <th>Subcategory</th>
           <th>Symtoms</th>
        </tr>
          
        </thead>
        <tbody>
   <?php
$num=1;
    $sql="SELECT * FROM subcategory ";
    $run=mysqli_query($con,$sql);
 
    while ($data=mysqli_fetch_assoc($run)) {
 
   ?>


          <tr>
            <td><?php echo $num ?></td>
           
            <td><span class="text-ellipsis"><?php  echo$data['subcategory'];   ?></span></td>

            <td>
              
              <table>
                <tr>
                  <th>Sr.No.</th>  <th>Sub category</th>  <th>description</th><th>Action</th>
                </tr>
<?php 


$ip=$data['id'];
$srno=1;
$run2=mysqli_query($con,"SELECT * FROM simtoms where subcategory='$ip'");
 
    while ($data2=mysqli_fetch_assoc($run2)) {


?>
<tr>
               <td> <?php echo $srno; ?></td>
                <td> <?php echo $data2['simtom']; ?></td>
                <td> <?php echo $data2['description']; ?></td>
                <td>
                  <a href="#"><i class="fa fa-edit"></i></a>
                </td>
                
           
              <?php $srno++; } ?>

</tr>
              </table>
            </td>
          

         </tr>
      <?php $num++;} ?>
        </tbody>

         
        </tbody>
      </table>
    </div>
    
  </div>
</div>



<?php   include('footer.php'); ?>


</body>
</html>
