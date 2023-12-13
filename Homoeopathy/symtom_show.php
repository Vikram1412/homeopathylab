<?php

$q3 = intval($_GET['q3']);

/*start this is database connection file*/

include('serverconnect.php');

?>

<label>Select Symtom</label>
  <select class="form-select" name="simtoms"  id="idsimtoms" onchange="showMedicine(this.value)" >

<?php

 $sql3="select * from simtoms where subcategory = '".$q3."'";

 echo'<option value="selected">'."Select simtom".'</option>';

  $run3=mysqli_query($con,$sql3);
  while ($data3=mysqli_fetch_assoc($run3)) {

            echo'<option value="'.$data3['id'].'">'.$data3['simtom'].'</option>';

  }

  

?>
   
</select>