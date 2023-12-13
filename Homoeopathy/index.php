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
    <script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

    <title>Web App.</title>
  </head>
  <body>
    <center>
<script type="text/javascript">
 
 function loadGoogleTranslate(){
     
     new google.translate.TranslateElement("google_element");

     
 }


  
function showSubcategory(str) {
    
    document.getElementById("idsymtom").innerHTML = "";
    
  if (str == "") {
    document.getElementById("subc").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("subc").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","subcategory_show.php?q2="+str,true);
    xmlhttp.send();
  }
}



function showSimtoms(str3) {
  if (str3 == "") {
    document.getElementById("idsymtom").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("idsymtom").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","symtom_show.php?q3="+str3,true);
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
    <a href="../../../">Home</a>
  <div class="container">
   <!-- <h1 class="display-4">Homoeopathy Treatment</h1>-->
   <p id="google_element"></p>
    <p class="display-6">Find right remendy by patient symtoms.</p>
  </div>
</div>

<div class="container">
    <div class="row">
         <div class="col-sm-8">
             
             
   
<img src="img/body-btw.gif" alt="" class="img-fluid" usemap="#image-map">


<map name="image-map">
    
     <area onmouseover="head_show()"  target="_self" alt="Head" title="Head" href="#head_t" coords="246,67,235,73,228,85,230,97,238,111,254,112,265,103,268,83,260,67" shape="poly">
     
     
    <area target="_self" alt="Neck" title="Neck" href="#Neck" coords="241,114,256,111,262,124,257,135,244,138,235,126" 
    shape="poly">
    <area target="_self" alt="Chest" title="Chest" href="#chest" coords="245,136,222,144,216,160,217,183,237,187,270,188,281,178,284,160,268,140" shape="poly">
    <area target="_self" alt="Stomach" title="Stomach" href="#stomach" coords="248,191,218,186,221,216,221,229,239,232,263,230,280,225,277,202,279,188" shape="poly">
   
    <area target="_self" alt="Abdomen" title="Abdomen" href="#Abdomen" coords="246,234,219,230,225,250,237,262,249,273,262,261,277,237,276,226" shape="poly">
    <area target="_self" alt="Left Leg part 1" title="Left Leg part 1" href="#LefLegpart" coords="" shape="poly">
    <area target="_self" alt="Right leg 1" title="Right leg 1" href="#rigtleg1" coords="" shape="poly">
    
      <area target="_self" alt="Right leg 1" title="Right leg 1" href="#rigtleg1" coords="256,272,277,244,286,280,290,316,269,328,257,307,253,291" shape="poly">
    <area target="" alt="Left Leg p1" title="Left Leg p1" href="#leftleg" coords="220,252,233,262,240,275,240,292,232,322,215,318,207,298,206,282,207,271,213,260" shape="poly">
</map>  

<style>
    
    .block{
        
        margin-top:40px;
       
        width:250px;
        height:280px;
        box-shadow:10px 10px 20px #0d6efd;
        background-color:#6610f2;
        z-index: 900;
        position:absolute;
        
        left:100px ;
        top:150px;
        display:none;
        border-radius:30px;
    }
    
    .blockl1{
        
        margin-top:40px;
        width:350px;
        height:300px;
        box-shadow:10px 10px 20px #610f26;
        background-color:#0d6efd;
        z-index: 905;
        position:absolute;
        
        left:120px ;
        top:160px;
        display:none;
        border-radius:30px;
    }
</style>

<script>
    function head_show(){
        
        var head = document.getElementById("head");
        
        head.style.display="block";
        
        
    }
    
function head_hide(){
        
        var headh = document.getElementById("head");
        
        headh.style.display="none";
        
        
    }
    
        function levelone(x){
        
        var headl2 = document.getElementById("leveone");
        
        headl2.style.display="block";
        
        
    }
    
 function levelonehide(){
        
        var headl3 = document.getElementById("level");
        
        headl3.style.display="block";
        
        
    }
    
</script>

<div class="block" id="head">
    
   <div style="font-size:25px;font-family:bold;text-align:right;padding-right:20px"><p onclick="head_hide()">X</p></div>
   
    <div class="row">
        
        <div class="col">
           
            <input type="checkbox" value="Head"> &nbsp;&nbsp;<label>Head</label>
        <br><br>
         <input type="checkbox" value="Mind" onclick="levelone(this.value)"> &nbsp;&nbsp;<label>Mind</label>
         <br><br>
   
        <input type="checkbox" value="Eye"> &nbsp;&nbsp;<label>Eye</label>
         <br><br>
   
        <input type="checkbox" value="other"> &nbsp;&nbsp;<label>Noise</label>
        <br><br>
            
        </div>
        
        <div class="col">
            <input type="checkbox" value="Mind"> &nbsp;&nbsp;<label>Mouth</label>
        <br><br>
         <input type="checkbox" value="Mind"> &nbsp;&nbsp;<label>Lips</label>
         <br><br>
   
        <input type="checkbox" value="Mind"> &nbsp;&nbsp;<label>Check</label>
         <br><br>
   
        <input type="checkbox" value="Mind"> &nbsp;&nbsp;<label>Teeth</label>
        <br><br>
            
        </div>
        
        
        
         </div>
 
    
    
</div>
            
 <div class="block" id="level">
    
   <div style="font-size:25px;font-family:bold;text-align:right;padding-right:20px"><p onclick="head_hide()">X</p></div>
   
    <div class="row">
        
        <div class="col">
           
            <input type="checkbox" value="Mind"> &nbsp;&nbsp;<label>exity</label>
        <br><br>
         <input type="checkbox" value="Mind"> &nbsp;&nbsp;<label>Dipression</label>
         <br><br>
   
        <input type="checkbox" value="Mind"> &nbsp;&nbsp;<label>Fear</label>
         <br><br>
   
        <input type="checkbox" value="Mind"> &nbsp;&nbsp;<label>Other</label>
        <br><br>
            
        </div>
        
       
        
        
        
         </div>
 
    
    
</div>       
            
            
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
  
<span id="subc"></span>

</div>

<div class="fomr-group col-sm-4">
 <span id="idsymtom"> </span>

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