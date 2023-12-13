<?php

session_start();

include('server_connection.php'); 

// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {

  header('location:logout.php');

  } else{



    }
    
    
 if (isset($_POST['submit'])) {
  

$pid      = $_POST['pid'];
$simtom   = $_POST['simtom'];
$mid      = $_POST['mid'];


$sql="INSERT INTO `remedy` (`id`, `ptn_id`, `symtom`, `mdcn_id`) VALUES (NULL, '$pid', '$simtom', '$mid ');";
if ($run=mysqli_query($con,$sql)) {

echo'<script>alert(" Remedy add successfully")</script>';

}else{

echo'<script>alert("Failed! Try again.")</script>';

}

}

    
    

?>

<!DOCTYPE html>
<html>
<head>
  <title>Remedy :: Homeopathy </title>

  <?php include('head.php');  ?>
</head>
<body>
<?php include('header.php') ?>


<?php  include('aside.php'); ?>


<section id="main-content">
  <section class="wrapper">
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-body">
        
        
        
        
        <?php
        
        if(isset($_GET['patient_id'])){
            
        $pid=$_GET['patient_id'];
        $patient=$_GET['name'];
        $age=$_GET['age'];
        
        ?>
        
 <form class="row" method="post" action="">
     
        <div class="form-group col-sm-12">
          <label>Patient Name</label>
          <input type="text" class="form-control" name="patient" value="<?php echo $patient; ?>" readonly>
           <input type="hidden" name="pid" value="<?php echo$pid; ?>">
         </div>
      
      
      
<div class="form-group col-sm-3">
  <label>Select Category</label>
  <select class="form-control" name="category" onchange="showSubcategory(this.value)">
  <option selected>Select category </option>
<?php  

 $sql1="select * from category where active='1' ORDER BY id ASC";
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
  <label>Select Symtom</label>
  <select class="form-control" name="simtom"  id="idsimtoms"  onchange="showMedicine(this.value)">
 <!--  <option selected>Select simtoms </option> -->
   
</select>

</div>
  <div class="form-group col-sm-3">
        <label>Medicine</label>
       <span id="medicine_place">:<i style="color:red;">Medicine will be display after selection of Symtom</i></span>
  </div>

  <div class="form-group col-sm-12">
  <button type="submit" class="btn btn-primary" name="submit">Add</button>
  </div>
</form>

<?php } ?>
        
      
<div class="table-responsive"> 
<table class="table border" >
            <tr><th>Sr. No.</th>
             <th>Patients</th>
             <th>Symtom</th>
            <th>Medicine</th>
            <th>Power</th>
            <th>Action</th>
            </tr>
            
<?php
    $num=1;
    $sql="SELECT remedy.id,patients.patient_id as pid,patients.first_name as fn, patients.last_name as ln, simtoms.simtom as sim,medicine_list.medicine AS mn,medicine_list.dilutions as power FROM `remedy` inner join patients ON remedy.ptn_id=patients.patient_id left join simtoms ON remedy.symtom=simtoms.id LEFT JOIN medicine_list ON remedy.mdcn_id=medicine_list.id where remedy.ptn_id=$pid";
    $run=mysqli_query($con,$sql);
 
    while ($data=mysqli_fetch_assoc($run)) {?>
 
        <tr>
          <td> <span class="text-ellipsis"><?php  echo$num; ?> </td>
         
           
           <td> <span class="text-ellipsis"><?php  echo$data['fn']." ".$data['ln']; ?> </td>
       
            <td><span class="text-ellipsis"><?php  echo$data['sim'];   ?></span></td>
             <td><span class="text-ellipsis"><?php  echo$data['mn'];   ?></span></td>
             
             <td><span class="text-ellipsis"><?php  echo$data['power'];   ?></span></td>
            
            
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
           <?php $num++; } ?>
        </table>
        
        <a href="invoice.php?id=<?=$pid; ?>&nm=<?=$patient; ?>&age=<?=$age; ?>" role="botton" class="btn btn-info">Generate Report</a>

   
  </div>
</div>
</div>
</section>

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

function showMedicine(str4) {
    
    //console.log(101);
    
  if (str4 == "") {
    document.getElementById("medicine_place").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("medicine_place").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","Homoeopathy/mdcn.php?simtom_id="+str4,true);
    xmlhttp.send();
  }
  
 // console.log(100);
}




    
    
    
</script>


<?php   include('footer.php'); ?>


</body>
</html>








