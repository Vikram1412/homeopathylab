<?php 

$simtom_id = intval($_GET['simtom_id']);


//echo$simtom_id;
//exit;

/*start this is database connection file*/

include('serverconnect.php');


 $sql4="SELECT find_right_medicine.id,find_right_medicine.simtom, medicine_list.medicine as mn,medicine_list.id as mid FROM `find_right_medicine` INNER join medicine_list on find_right_medicine.medicine=medicine_list.id where find_right_medicine.simtom = '".$simtom_id."'";
  $run4=mysqli_query($con,$sql4);
  while ($data4=mysqli_fetch_assoc($run4)) {

            
          echo'<input type="hidden" name="mid" value="'.$data4['mid'].'" >';
         echo'<input type="text" name="medicine" class="form-control" value="'.$data4['mn'].'" readonly >';

  }
  
?>