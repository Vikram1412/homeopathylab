<?php  

include('serverconnect.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web App.</title>
  </head>
  <body>
    <center>



<script type="text/javascript">
  


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
    xmlhttp.open("GET","subcategory.php?q2="+str,true);
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
    xmlhttp.open("GET","simtoms.php?q3="+str3,true);
    xmlhttp.send();
  }
}


function showMedicine(str4) {
  if (str4 == "") {
    document.getElementById("medicine").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("medicine").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","find-medicine.php?simtom_id="+str4,true);
    xmlhttp.send();
  }
}



</script>

<div class="container-flud bg-dark">
<div class="jumbotron jumbotron-fluid bg-info">
  <div class="container">
   <!-- <h1 class="display-4">Homoeopathy Treatment</h1>-->
    <p class="display-6">Find right remendy by patient symtoms.</p>
  </div>
</div>

<div class="container">
    <div class="row">
         <div class="col-sm-8">
            <img src="img/body-btw.gif" alt="" class="img-fluid" style="height:380px;">
        </div>
        <div class="col-sm-4">
              <div class="m-1 p-2 bg-warning center" id="medicine" style="font-size: x-large;font-family: fantasy;" ></div>
        </div>
    </div>
    
</div>
</div>


<div class="card">
  <div class="card-body">
    



    <form class="row g-3">

<div class="fomr-group col-sm-4">
  <label>Select Category</label>
  <select class="form-select" name="category" onchange="showSubcategory(this.value)">
  <option selected>Select category </option>
<?php  

 $sql1="select * from category where active='1' order by id";
  $run1=mysqli_query($con,$sql1);
  while ($data1=mysqli_fetch_assoc($run1)) {


            echo'<option value="'.$data1['id'].'">'.$data1['catname'].'</option>';

  }

  ?>

  
</select>

</div>

<div class="fomr-group col-sm-4">
  <label>Select Sub category( additional symtoms)</label>
  <select class="form-select" name="sub-category" id="idsubcat"  onchange="showSimtoms(this.value)" >
    
</select>

</div>

<div class="fomr-group col-sm-4">
  <label>Select Symtom</label>
  <select class="form-select" name="simtoms"  id="idsimtoms" onchange="showMedicine(this.value)" >
 <!--  <option selected>Select simtoms </option> -->
   
</select>

</div>


  
</form>


  </div>
</div>
<div>








</center>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>