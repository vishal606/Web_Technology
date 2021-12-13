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
	<meta charset="utf-8">
	<title>Delete Student Profile</title>

	<style>
.lightBlueButton {
	box-shadow:inset 0px 0px 0px 0px #dcecfb;
	background:linear-gradient(to bottom, #bddbfa 5%, #80b5ea 100%);
	background-color:#bddbfa;
	border-radius:30px;
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

.darkBlueButton {
	/*background-color:#2063b0;*/
	background-color:#2778d6;
	border-radius:30px;
	border:3px solid #08298a;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	padding:13px 26px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.darkBlueButton:hover,.darkBlueButton:active,.darkBlueButton:focus {
	background: #ff0000;
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
}

table.customTable thead {
  background-color: #2F79F8;
}
	</style>


</head>
<body>
	<form method="post" action="../controller/deleteStudentCheck.php">
		<h3><table border="5" align="center" cellspacing="4" cellpadding="4" class="customTable">
		
		<thead>
		<tr height="100px">
			<td colspan="2" align="center">
				<h2>Delete Student Profile</h2>
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
			<!-- <td align="center"><img src="../assets/face.jpg" width="260px" height="300px"></td> -->
		</tr>
		</tbody>

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
					<a href="profiles.php" class="lightBlueButton">BACK</a>
					<input type="hidden" name="id" value="<?=$id?>">
					<input type="submit" class="darkBlueButton" name="submit" value="DELETE">
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