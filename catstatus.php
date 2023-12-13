<?php

include('server_connection.php');


        
        if(isset($_GET['active'])){
        $id2=$_GET['id'];
        $sts=$_GET['active'];
        
        $sqlt="UPDATE category SET active=b'$sts' WHERE id='$id2'";
        $run4=mysqli_query($con,$sqlt);
            
        }
 



  
?>