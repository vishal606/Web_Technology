<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
		require_once('../model/teachersModel.php');
	$result = getAllTeachers();
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
	border-radius:8px;
	border:3px solid #3488db;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	color: black;
	font-size:13px;
	font-weight:bold;
	padding:10px 20px;
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
  border-width: 3px;
  border-color: #5EA6F8;
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
	<title>Teacher's Infromation</title>	
</head>
<body>
	
	<h3><table border="5" align="center" width="100%" cellspacing="4" cellpadding="4" class="customTable">

		<thead>
	<tr>
			<td colspan="8" align="center">
				<h3>Search Teacher : <input type="text" name="" value=""></h3>
			</td>
	</tr>

	<br>
	
	<tr>
		<th height="40px">ID</th>
		<th>UID</th>
		<th>NAME</th>
		<th>Address</th>
		<th>Email</th>
		<th>Gender</th>
		<th>DOB</th>
		<th>Picture</th>
		<!-- <th>ACTION</th> -->
	</tr>
	</thead>

	<?php while($data =mysqli_fetch_assoc($result)){ ?>

			<tbody>
			<tr>
				<td><?=$data['id']?></td>
				<td><?=$data['uid']?></td>
				<td><?=$data['name']?></td>
				<td><?=$data['address']?></td>
				<td><?=$data['email']?></td>
				<td><?=$data['gender']?></td>
				<td><?=$data['dob']?></td>
				<!-- <td><?=$data['picture']?></td> -->
				<td><img src="../assets/<?=$data['picture']?>" hight="100px" width="100px"></td>
				<!-- <td>
					<a href="edit.php?id=<?=$data['id']?>">EDIT</a> |
					<a href="delete.php?id=<?=$data['id']?>">DELETE</a> 
				</td> -->
			</tr>
			</tbody>

	<?php } ?>

	<tr height="80px" align="center">
		<td colspan="8">
			<a href="home.php" class="darkBlueButton">HOME</a>
			<a href="subject-info.php" class="lightBlueButton">< Go To Subject Information </a>
			<a href="../controller/logout.php" class="darkBlueButtonRed">LOGOUT</a>
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