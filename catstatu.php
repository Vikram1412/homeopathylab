<?php

include('server_connection.php')

/*for update or statchange of th category*/
        
        if(isset($_GET['active'])){
        $id2=$_GET['id'];
        $sts=$_GET['active'];
        
        $sqlt="UPDATE category SET status=b'$sts' WHERE id='$id2'";
        $run4=mysqli_query($con,$sqlt);
            
        }
        
        
        ?>