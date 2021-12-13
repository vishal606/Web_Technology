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
<style>
	.myButton {
	box-shadow: 3px -5px 16px -50px #3dc21b;
	background:linear-gradient(to bottom, #4c8a5c 5%, #5cbf2a 100%);
	background-color:#4c8a5c;
	border-radius:34px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Times New Roman;
	font-size:12px;
	padding:4px 11px;
	text-decoration:none;
	text-shadow:-8px 8px 17px #2f6627;
}
.myButton:hover {
	background:linear-gradient(to bottom, #5cbf2a 5%, #4c8a5c 100%);
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}
	</style>
<body>
	<br>
<fieldset>

<legend class="text"><b>TEACHERS LIST</b></legend><br>
  <center><table><div id="errorBox"></div></table></center>

	<table border="1" align="center" width="90%">
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
		<th>Action</th>
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
				<td>
					<a href="tprofileEdit.php?id=<?=$data['id']?>"class="myButton">Edit</a>					
					<a href="tprofileDelete.php?id=<?=$data['id']?>"class="myButton">Delete</a>
				</td>

			</tr>

	<?php } ?>
		
	</table>
	</fieldset>
</body>
</html>