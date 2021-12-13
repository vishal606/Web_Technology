<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
		require_once('../model/studentsModel.php');
	$result = getAllValidStudents();
	$count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
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
	font-size:13px;
	font-weight:bold;
	padding:11px 20px;
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
	font-size:13px;
	padding:11px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.darkBlueButton:hover,.darkBlueButton:active,.darkBlueButton:focus {
	background: #43A047;
}

.darkBlueButtonRed {
	/*background-color:#2063b0;*/
	background-color:#2778d6;
	border-radius:30px;
	border:3px solid #08298a;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:11px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.darkBlueButtonRed:hover,.darkBlueButtonRed:active,.darkBlueButtonRed:focus {
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
  text-align: center;
}

table.customTable thead {
  background-color: #2F79F8;
}

	</style>
	<meta charset="utf-8">
	<title>All Profiles</title>
</head>
<body>
	<br>
	<center>
		<a href="home.php" class="lightBlueButton">HOME</a> 
		<a href="../controller/logout.php" class="darkBlueButtonRed">LOGOUT</a>
	</center>
	
		<h3><table border="5" align="center" width="70%" cellspacing="4" cellpadding="4" class="customTable">
			
		<thead>
		<tr align="center">
			<th height="35px" width="15%">UID</th>
			<th>NAME</th>
			<th>ACTION</th>
		</tr>
		</thead>

		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tbody>
				<tr align="center">
					<td><?=$data['uid']?></td>
					<td><?=$data['name']?></td>
					<td>
						<a href="profile.php?id=<?=$data['id']?>" class="lightBlueButton">VIEW PROFILE</a>
						  
						<a href="profile-edit.php?id=<?=$data['id']?>" class="darkBlueButton">EDIT PROFILE</a>
						  
						<a href="profile-delete.php?id=<?=$data['id']?>" class="darkBlueButtonRed">DELETE PROFILE</a>
					</td>
				</tr>
				</tbody>

		<?php } ?>

	</table></h3>
</body>
</html>
<?php
}else{
 	header('location: login.html');
 }
?>