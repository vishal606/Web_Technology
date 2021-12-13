<?php
   session_start();
   require_once('../model/Model.php');
	$id = $_REQUEST['id'];
	$user = getAdminView($id);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Teacher Profile</title>
</head>
<body>
	
		<br>
		<table border="2" align="center">
		<tr height="100px">
      	
			<td colspan="2" align="center">
				<h2>Teacher Profile</h2>
			</td>
		</tr>

		<tr height="50px">
			<td width="150px">Uid</td>
			<td width="300px"><?=$user['uid']?></td>
		</tr>

		<tr height="50px">
			<td>Name</td>
			<td><?=$user['name']?></td>
		</tr>

		<tr height="50px">
			<td>Address</td>
			<td><?=$user['address']?></td>
		</tr>

		<tr height="50px">
			<td>Email</td>
			<td><?=$user['address']?></td>
		</tr>

		<tr height="50px">
			<td>Gender</td>
			<td><?=$user['gender']?></td>
		</tr>

		<tr height="50px">
			<td>Date of Birth</td>
			<td><?=$user['dob']?></td>
		</tr>
		

		<tr height="50px">
			<td>Photo</td>
			<td><?=$user['picture']?></td>
		</tr>
		
	</table>

</body>
</html>
