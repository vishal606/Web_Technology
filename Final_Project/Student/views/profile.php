<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
		require_once('../model/studentsModel.php');
	$id = $_REQUEST['id'];
	$user = getStudentById($id);
?>
<!DOCTYPE html>
<html>
<head>
	<style>

.lightBlueButton {
	box-shadow:inset 0px 0px 0px 0px #dcecfb;
	background:linear-gradient(to bottom, #bddbfa 5%, #80b5ea 100%);
	background-color:#bddbfa;
	border-radius:8px;
	border:3px solid #3488db;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	color: black;
	font-size:15px;
	font-weight:bold;
	padding:13px 26px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.lightBlueButton:hover,.lightBlueButton:active,.lightBlueButton:focus {
	background: #43A047;
}	

table.customTable {
  
  /*background-color: #FFFFFF;*/
  border-collapse: collapse;
  border-width: 5px;
  border-color: #3488db;
  border-style: solid;
  color: #000000;
}

table.customTable td, table.customTable th {
  border-width: 3px;
  border-color: #5EA6F8;
  border-style: solid;
  text-align: center;
}

table.customTable thead {
  background-color: #2F79F8;
}

	</style>
	<meta charset="utf-8">
	<title>Student Profile</title>

</head>
<body>
		<h3><table border="5" align="center" cellspacing="4" cellpadding="4" class="customTable">

		<thead>
		<tr height="100px">
			<td colspan="2" align="center">
				<h2>Student Profile</h2>
			</td>
		</tr>
		</thead>

		<tbody>
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

		<tr height="50px">
			<td>Blood Group</td>
			<td><?=$user['bloodgrp']?></td>
		</tr>

		<tr height="50px">
			<td>Class</td>
			<td><?=$user['class']?></td>
		</tr>

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
			<!-- <td><?=$user['picture']?></td> -->
			<!-- <td align="center"><img src="../assets/face.jpg" width="260px" height="300px"></td> -->
		</tr>
		</tbody>

		<!-- <tr height="50px" align="center">
			<td>EDIT</td>
			<td >
				<a href="profile-edit.php?id=<?=$data['id']?>">EDIT PROFILE</a>
			</td>
		</tr> -->

		<tr height="60px" >
			<td colspan="2" align="center">
				<a href="profiles.php" class="lightBlueButton">BACK</a>
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