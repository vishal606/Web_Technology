<?php
   session_start();
   require_once('../model/Model.php');
	$result = getValidStudents();
	$count = mysqli_num_rows($result);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student's Information</title>
</head>
<body>

	<br>
	<table border="2" align="center" width="70%">
		<tr>
			<th>UID</th>
			<th>NAME</th>
			<th>DOB</th>
			<th>Gender</th>
			<th>Blood Group</th>
			<th>Class</th>
			<th>Address</th>
			<th>Email</th>
			<th>Picture</th>
		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>
				<tr>
					
					<td><?=$data['uid']?></td>
					<td><?=$data['name']?></td>
					<td><?=$data['dob']?></td>
					<td><?=$data['gender']?></td>
					<td><?=$data['bloodgrp']?></td>
					<td><?=$data['class']?></td>
					<td><?=$data['address']?></td>
					<td><?=$data['email']?></td>
					<td><?=$data['picture']?></td>
				</tr>
		<?php } ?>

		
	</table>
</body>
</html>