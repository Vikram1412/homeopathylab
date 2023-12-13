<?php

session_start();

 include('server_connection.php'); 

// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {

  header('location:logout.php');

  } else{

    }
    
    
    
    if(isset($_POST['submit'])){
        
        $medicine=$_POST['medicine'];
        $simtom = $_POST['simtoms'];
        
        $sql5="INSERT INTO `find_right_medicine` (`id`, `simtom`, `medicine`, `other`) VALUES (NULL, '$simtom', '$medicine', 'Here will be content of related remedy')";
        
        $run5=mysqli_query($con,$sql5);
        
        if(!empty($run5)){
            
            echo'<script>alert("Medicine add successfully!")</script>';
            
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Define remedy::Homeopathy </title>

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
    Add Remedy 
    </div>
    <div class="panel-body">
   
   <form class="row" method="post" action="">

   
<div class="form-group col-sm-3">
  <label>Select Category</label>
  <select class="form-control" name="category" onchange="showSubcategory(this.value)" id="cat" >
  <option selected>Select category </option>
<?php  

 $sql1="select * from category";
  $run1=mysqli_query($con,$sql1);
  while ($data1=mysqli_fetch_assoc($run1)) {


            echo'<option value="'.$data1['id'].'">'.$data1['catname'].'</option>';

  }

  ?>

  
</select>

</div>

<div class="form-group col-sm-3">
  <label>Select Sub category</label>
  <select class="form-control" name="sub-category" id="idsubcat"  onchange="showSimtoms(this.value)" >
    
</select>

</div>

<div class="form-group col-sm-3">
  <label>Select Simtom</label>
  <select class="form-control" name="simtoms"  id="idsimtoms">
 <!--  <option selected>Select simtoms </option> -->
   
</select>

</div>
  <div class="form-group col-sm-3">
    <label for="medicine2">select Medicine</label>
    <select class="form-control" id="medicine2" name="medicine">
        <option value="selected">----Select Medicine---</option>

<?php  
 $sql1="select * from medicine_list";
  $run1=mysqli_query($con,$sql1);
  while ($data1=mysqli_fetch_assoc($run1)) {


            echo'<option value="'.$data1['id'].'">'.$data1['medicine'].'</option>';

  }
  ?>
    </select>
  </div>

  <div class="form-group col-sm-12">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>

   
  </div>
</div>


    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     All Remedy
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
             Sr.No.
            </th>
             <th>Category</th>
              <th>Sub category</th>
            <th>Simtoms</th>
            <th>Medicine</th>
           
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>

   <?php
   	$num=1;
    $sql="SELECT find_right_medicine.id as id, simtoms.simtom as simt, medicine_list.medicine as nm,subcategory.subcategory as subcat,category.catname catg FROM find_right_medicine INNER JOIN simtoms ON find_right_medicine.simtom = simtoms.id LEFT join medicine_list on find_right_medicine.medicine=medicine_list.id LEFT JOIN subcategory on simtoms.subcategory=subcategory.id LEFT JOIN category on subcategory.category=category.id ORDER BY find_right_medicine.id DESC";
    $run=mysqli_query($con,$sql);
 
    while ($data=mysqli_fetch_assoc($run)) {
 
   ?>


          <tr>
          	<td><span class="text-ellipsis"><?php  echo$num;   ?></span></td>
          	 <td><span class="text-ellipsis"><?php  echo$data['catg'];   ?></td>
            <td><span class="text-ellipsis"><?php  echo$data['subcat'];   ?></td>
           <td><span class="text-ellipsis"><?php  echo$data['simt'];   ?></td>
            <td><span class="text-ellipsis"><?php  echo$data['nm'];   ?></span></td>
          
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>

        <?php $num++; }?>
         
        </tbody>
      </table>
    </div>
   
  </div>
</div>
<script>
    

function showSubcategory(str) {
  if (str == "") {
    document.getElementById("idsubcat").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("idsubcat").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Homoeopathy/subcategory.php?q2="+str,true);
    xmlhttp.send();
  }
}



function showSimtoms(str3) {
  if (str3 == "") {
    document.getElementById("idsimtoms").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("idsimtoms").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Homoeopathy/simtoms.php?q3="+str3,true);
    xmlhttp.send();
  }
}




//this for medicine search

$(document).ready(function () {
//change selectboxes to selectize mode to be searchable
   $("#medicine2").select2();
}); 

//this for symtom search

$(document).ready(function () {
//change selectboxes to selectize mode to be searchable
   $("#idsimtoms").select2();
}); 

//this for subcategory search 
$(document).ready(function () {
//change selectboxes to selectize mode to be searchable
   $("#idsubcat").select2();
}); 

//this for category search 
$(document).ready(function () {
//change selectboxes to selectize mode to be searchable
   $("#cat").select2();
}); 
    
    
</script>
<?php   include('footer.php'); ?>


</body>
</html>











