<?php
include('server_connection.php');

$id=$_GET['id'];

$sql="DELETE FROM potential_client WHERE id='$id'";

$run=mysqli_query($con,$sql);

if($run)
{
	header('location:potential_client.php');
}else {
	
}


?>