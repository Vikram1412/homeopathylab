<?php
session_start();

if(!empty($_SESSION['login'])){

	header("location:index.php");
}

include("server_connection.php");
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{



        $_SESSION['login']=$adminusername; // hold the user name in session
        $_SESSION['id']=$num['id']; // hold the user id in session
        $uip=$_SERVER['REMOTE_ADDR']; // get the user ip
        // query for inser user log in to data base
        mysqli_query($con,"insert into adminuserlog(userId,username,userIp) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip')");
        // code redirect the page after login
        $extra="index.php";
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();

	
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="login.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>
<!DOCTYPE html>
<head>
<title>Online Treatment :: Admin Pannel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
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
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>

	<p style="color:#F00; padding-top:20px;" align="center">
                    <?php if(isset($_SESSION['action1'])){echo $_SESSION['action1'];}?></p>

		<form action="#" method="post">
			<input type="text" class="ggg" name="username" placeholder="USERNAME" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<!--<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>-->
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<!-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> -->
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
