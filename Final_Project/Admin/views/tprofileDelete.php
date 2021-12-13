<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
		require_once('../model/Model.php');
	$id = $_REQUEST['id'];
	$user = getTeacherById($id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete Teacher Profile</title>

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
	<form method="post" action="../controller/deleteTeacherCheck.php">
		<h3><table border="5" align="center" cellspacing="4" cellpadding="4">
		<tr height="100px">
      	
			<td colspan="2" align="center">
				<h2>Delete Teacher Profile</h2>

				
			</td>
		</tr>

		<tr height="50px">
			<td width="150px">UID</td>
			<td width="300px"><?=$user['uid']?></td>
		</tr>

		<tr height="50px">
			<td width="150px">Name</td>
			<td width="300px"><?=$user['name']?></td>
		</tr>

		<tr height="50px">
			<td>Date of Birth</td>
			<td><?=$user['dob']?></td>
		</tr>

		<tr height="50px">
			<td>Gender</td>
			<td><?=$user['gender']?></td>
		</tr>

		<!-- <tr height="50px">
			<td>Blood Group</td>
			<td><?=$user['bloodgrp']?></td>
		</tr>

		<tr height="50px">
			<td>Class</td>
			<td><?=$user['class']?></td>
		</tr>
 -->
		<tr height="50px">
			<td>Address</td>
			<td><?=$user['address']?></td>
		</tr>


		<tr height="50px">
			<td>Email</td>
			<td><?=$user['email']?></td>
		</tr>

		<tr height="50px">
			<td>Photo</td>
			<td><img src="../assets/<?=$data['picture']?>" hight="100px" width="100px"></td>
			<!-- <td align="center"><img src="../assets/face.jpg" width="260px" height="300px"></td> -->
		</tr>

		<tr height="50px">
			<td>Status</td>
			<td><?=$user['status']?></td>
		</tr>

		<!-- <tr height="50px" align="center">
			<td>EDIT</td>
			<td >
				<a href="profile-edit.php?id=<?=$data['id']?>">EDIT PROFILE</a>
			</td>
		</tr> -->

				<tr>
					<td colspan="2" align="center">Are You Sure! <br> Delete?</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="hidden" name="id" value="<?=$id?>">
					<input type="submit" name="submit" class="myButton" value="DELETE">
					</td>
				</tr>

		
	</table></h3>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }
?>