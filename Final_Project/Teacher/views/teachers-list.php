<?php
   session_start();
   require_once('../model/Model.php');
	$result = getAllTeachers();
	$count = mysqli_num_rows($result);
?>
<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Teacher list</title>
</head>
<body>

	<br>
	<table border="1" align="center" width="70%">
	<tr>
		<th>ID</th>
		<th>UID</th>
		<th>NAME</th>
		<th>Address</th>
		<th>Email</th>
		<th>Gender</th>
		<th>DOB</th>
		<th>Picture</th>
		<th>Status</th>
	</tr>
	<?php while($data =mysqli_fetch_assoc($result)){ ?>

			<tr>
				<td><?=$data['id']?></td>
				<td><?=$data['uid']?></td>
				<td><?=$data['name']?></td>
				<td><?=$data['address']?></td>
				<td><?=$data['email']?></td>
				<td><?=$data['gender']?></td>
				<td><?=$data['dob']?></td>
				<td><?=$data['picture']?></td>
				<td><?=$data['status']?></td>
			</tr>

	<?php } ?>
		
	</table>
</body>
</html>