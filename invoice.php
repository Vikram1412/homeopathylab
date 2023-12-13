<?php session_start();

include('server_connection.php'); 

// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {

  header('location:logout.php');

  } else{
  
    }
    
    ?>
<!DOCTYPE html>
<head>
<title>Online treatment :: Homoeopathy </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->

<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<!--main content start-->
<div class="">
	<div class="">
	
	<div class="b-1">
	   <table class="table" style="border: 1px solid #000;">
	       <tr>
	           <th colspan="3"><center><img src="https://i.pinimg.com/736x/6b/44/af/6b44af7cdc398341eaabeac28f20c813.jpg" alt="Logo" title="logo" style="width: 10%;border: 2px solid skyblue;border-radius: 65px;"></center></th>
	       </tr>
	       <tr>
	         <th>Reg. No.: &nbsp;&nbsp;000<?php echo $_GET['id']; ?> </th> <th>    </th> <th>Date: &nbsp;&nbsp;<?php echo date('d-m-Y'); ?></th>
	       </tr>
	       <tr>
	           <th colspan="3" height="50px"></th>
	       </tr>
	       <tr>
	           <th>Patient Name: &nbsp;&nbsp;<?php echo $_GET['nm']; ?></th><th>Age:&nbsp;&nbsp;<?php echo $_GET['age']; ?> years </th><th>Date:&nbsp;&nbsp; <?php echo date('d-m-Y'); ?> </th>
	           
	       </tr>
	        <tr>
	           <th colspan="3" height="50px"></th>
	       </tr>
	       
	       <tr>
	          <th>Sr.No.</th><th>Symtoms</th><th>Medicine</th>
	       </tr>
	       
<?php



$pid=$_GET['id'];
    $num=1;
    $sql="SELECT remedy.id,patients.patient_id as pid,patients.first_name as fn, patients.last_name as ln, simtoms.simtom as sim,medicine_list.medicine AS mn FROM `remedy` inner join patients ON remedy.ptn_id=patients.patient_id left join simtoms ON remedy.symtom=simtoms.id LEFT JOIN medicine_list ON remedy.mdcn_id=medicine_list.id where remedy.ptn_id=$pid";
    $run=mysqli_query($con,$sql);
 
    while ($data=mysqli_fetch_assoc($run)) {?>
 
        <tr>
        <td>  <?php  echo$num; ?> </td>
       
        <td> <?php  echo$data['sim'];   ?></td>
        <td> <?php  echo$data['mn'];   ?></td>
          </tr>
           <?php $num++; } ?>
	    
	       
	   </table>
	   
	   <center><a  onclick="window.print()" role="button" class="btn btn-info">Print</a>&nbsp;&nbsp;<a href="https://homeopathylab.in/admin/patient_list.php" role="button" class="btn btn-success">Back</a></center>
	</div>
	</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>