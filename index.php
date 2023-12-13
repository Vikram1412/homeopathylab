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
  <title>Home::Homeopathy</title>

  <?php include('head.php');  ?>
  
</head>
<body>
    
<?php include('header.php') ?>


<?php  include('aside.php'); ?>


<section id="main-content">
  <section class="wrapper">
     <div class="panel panel-default">
      <div class="panel-body">

    <div class="row">
        
         <div class="col-sm-12">
          <a href="patient_list.php">
        <div class="card  bg-primary p-2" style="text-align: center;">
        No. of Patient
        <br><br>
          <?php $run_p=mysqli_query($con,"SELECT COUNT(patient_id) as pcnt FROM `patients`");
 
          while ($datap=mysqli_fetch_assoc($run_p)) {

            echo $datap['pcnt'];

          }

            ?>
           
        </div>
        </a>
    

      </div>
       <div class="col-sm-12" style="height:20px"></div>
      
      <div class="col-sm-3">
          <a href="category.php">
        <div class="card  bg-warning p-2" style="text-align: center;">
        Category
        <br><br>
          <?php $run1=mysqli_query($con,"SELECT COUNT(id) as cnt FROM `category`");
 
          while ($data1=mysqli_fetch_assoc($run1)) {

            echo $data1['cnt'];

          }

            ?>
           
        </div>
        </a>
    

      </div>
      
     
      <div class="col-sm-3 ">
             <a href="subcategory.php">
        <div class="card bg-danger p-2" style="text-align: center;">
           Sub cotegory
           <br><br>
          <?php $run2=mysqli_query($con,"SELECT COUNT(id) as cnt FROM `subcategory`");
 
          while ($data2=mysqli_fetch_assoc($run2)) {

            echo $data2['cnt'];

          }  ?> 

        </div>
        </a>
      
    </div>

      <div class="col-sm-3 ">
      <a href="simtoms.php">
     <div class="card bg-info p-2" style="text-align: center;">
           Symtoms
            <br><br>
          <?php $run3=mysqli_query($con,"SELECT COUNT(id) as cnt FROM `simtoms`");
 
          while ($data3=mysqli_fetch_assoc($run3)) {

            echo $data3['cnt'];

          }  ?> 
        </div>
        </a>
    </div>
    
     <div class="col-sm-3">
          <a href="medicine_list.php">
        <div class="card  bg-success p-2" style="text-align: center;">
            Medicine 
        <br><br>
          <?php $run10=mysqli_query($con,"SELECT COUNT(id) as cnt FROM `medicine_list`");
 
          while ($data10=mysqli_fetch_assoc($run10)) {

            echo $data10['cnt'];

          }

            ?>
           
        </div>
        </a>
    

      </div>
    </div>

    <div class="panel-body" style="border: 2px solid black;margin-top: 50px; ">


      <!--<center>
        <h1 style="font-style:script;">This is for graph</h1>
      </center>-->

    </div>
  
  </div>
</div>
</section>
</section>

<?php   include('footer.php'); ?>


</body>
</html>











