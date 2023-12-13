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
  <title> add sub category</title>

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
    Add Sub Category <span class="btn btn-success" style="float: right;"><a href="add-sub-category.php"><i class="fa fa-plus "></i></a> </span>
    </div>
    <div class="panel-body">
   
   <form class="row" method="post" action="" >

    <div class="form-group col-sm-6">
    <label for="category">select category</label>
    <select class="form-control" id="category" name="category">
      <option value="selected"> category </option>

<?php  
 $sql1="select * from category";
  $run1=mysqli_query($con,$sql1);
  while ($data1=mysqli_fetch_assoc($run1)) {


            echo'<option value="'.$data1['id'].'">'.$data1['catname'].'</option>';

  }
  ?>
    </select>
  </div>

  <div class="form-group col-sm-6">


    <label for="subcategory">Sub category</label>
    <input type="text" class="form-control" id="subcategory" name="subcategory"   placeholder="Enter sub category name">
    
  </div>


  <div class="form-group col-sm-12">
    <label for="description">Description</label>
    
   <textarea class="form-control" id="description" name="description"  rows="5"> </textarea> 
  </div>



 <div class="form-group col-sm-12">
     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>

 
</form>

   
  </div>
</div>
</section>


<?php   include('footer.php'); ?>


</body>
</html>

<?php

if (isset($_POST['submit'])) {
  
$category    = $_POST['category'];
$subcategory = $_POST['subcategory'];
$description  = $_POST['description'];

//echo $category,$subcategory,$description;

$sql="INSERT INTO `subcategory`(`category`, `subcategory`, `decription`) VALUES ('$category','$subcategory','$description')";
if ($run=mysqli_query($con,$sql)) {

echo'<script>alert("Sub category add successfully")</script>';

}else{

echo'<script>alert("Failed.")</script>';

}

}


?>









