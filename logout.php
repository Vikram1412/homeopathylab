<?php
session_start();

include('server_connection.php'); 
date_default_timezone_set('Asia/Kolkata');

$_SESSION['login'];
$_SESSION['id'];
$timezone=date_default_timezone_get();
$currenttime=date('Y-m-d H:i:s');

$uid=$_SESSION['id'];
mysqli_query($con,"update adminuserlog set logoutTime='$currenttime' where userId='$uid'");
session_unset();
$_SESSION['action1']="You have logged out successfully..!";

?>
<script language="javascript">
document.location="login.php";
</script>