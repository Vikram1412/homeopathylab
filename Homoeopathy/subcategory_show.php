<?php

$q2 = intval($_GET['q2']);

/*start this is database connection file*/

include('serverconnect.php');


?>


<label>Select Sub category( additional symtoms)</label>
  <select class="form-select" name="sub-category" id="idsubcat"  onchange="showSimtoms(this.value)" >



<?php

 echo'<option value="selected">'."Select sub category".'</option>';
 
 $sql2="select * from subcategory where category = '".$q2."'";
  $run2=mysqli_query($con,$sql2);
  while ($data2=mysqli_fetch_assoc($run2)) {

            echo'<option value="'.$data2['id'].'">'.$data2['subcategory'].'</option>';

  }
  

?>

</select>