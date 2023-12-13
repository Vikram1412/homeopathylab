<?php
session_start();
include('server_connection.php'); 

// checking session is valid or not valid

if (strlen($_SESSION['id']==0)) {

  header('location:logout.php');

  }else{

    }
    
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Homeopathy::Userlog</title>

  <?php include('head.php');  ?>
</head>
<body>
<?php include('header.php') ?>


<?php  include('aside.php'); ?>


<section id="main-content">
     
    
  <section class="wrapper">
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      History of user login
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
 
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>User Id</th>
							<th>User Name</th>
							<th>User Ip</th>
							<th>Login Time</th>
							<th>Logout Time</th>
						</tr>
					</thead>
					<tbody>
				<?php 
					$id=$_SESSION['id'];
					$query=mysqli_query($con,"SELECT * FROM adminuserlog ORDER By loginTime DESC");
					$cnt=1;
						while($row=mysqli_fetch_array($query))
						{
							?>
							<tr>
								<td><?php echo $cnt;?></td>
								<td><?php echo $row['userId'];?></td>
								<td><?php echo $row['username'];?></td>
								<td><?php echo $row['userIp'];?></td>
								<td><?php echo $row['loginTime'];?></td>
								<td><?php echo $row['logoutTime'];?></td>
							</tr>
							<?php $cnt=$cnt+1;
						} ?>
					</tbody>
				</table>
    </div>

  </div>
</div>

<script>


</script>

<?php   include('footer.php'); ?>


</body>
</html>
