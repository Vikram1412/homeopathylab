<?php
session_start();
include('server_connection.php'); 

// checking session is valid or not valid

if (strlen($_SESSION['id']==0)) {

  header('location:logout.php');

  }else{

    }
    
   
     if(isset($_GET['active'])){
        $id2=$_GET['id'];
        $sts=$_GET['active'];
        
        $sqlt="UPDATE category SET active=b'$sts' WHERE id='$id2'";
        $run4=mysqli_query($con,$sqlt);
            
        }
    
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Category :: Homeopathy </title>

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
      Category list
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Category</th>
           
            <th style="width:30px;">Status</th>
          </tr>
        </thead>
        <tbody>

   <?php

    $sql="SELECT * FROM category order by id";
    $run=mysqli_query($con,$sql);
 
    while ($data=mysqli_fetch_assoc($run)) {
 
   ?>


          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
           
            <td><span class="text-ellipsis"><?php  echo$data['catname'];   ?></span></td>
           
            <td>
                <?php
                
                if($data['active']==1){
            
        
                /* echo'<button onclick="updatemod(this.value,this.id)" id="'.$data['id'].'" value="0"><img src="images/img/active.png"/>   </button>';*/

                    
                  echo'<a href="?id='.$data['id'].'&active=0" ><img src="images/img/active.png"/></a>';
                }else{
                    
                   // echo'<button onclick="updatemod(this.value,this.id)" id="'.$data['id'].'" value="1"> <img src="images/img/deactive.png"/> </button>';

                    
                    
               echo'<a href="?id='.$data['id'].'&active=1"><img src="images/img/deactive.png"/></a>';
                }
                
                
                ?>
              
            </td>
          </tr>

        <?php }?>
         
        </tbody>
      </table>
    </div>

  </div>
</div>

<script>


</script>

<?php   include('footer.php'); ?>


</body>
</html>












