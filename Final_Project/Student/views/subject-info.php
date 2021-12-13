<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
		require_once('../model/subjectsModel.php');
	$result = getAllSubjects();
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
	<title>Subjects Infromation</title>

</head>
<body>
	<br>
	<h3><table border="5" class="customTable" align="center" width="80%" cellspacing="4" cellpadding="4">

	<thead>
	<tr>
		<td colspan="3" align="center">
			<h3>Search Subject Info : <input type="text" name="" value=""></h3>
		</td>
	</tr>

	<tr align="center">
		<td><h3>ID</h3></td>
		<td width="25%"><h3>Class</h3></td>
		<td width="45%"><h3>Subject</h3></td>
		<!-- <td><h3>Time</h3></td> -->
	</tr>
	</thead>

	<?php while($data =mysqli_fetch_assoc($result)){ ?>
				<tbody>
				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['class']?></td>
					<td><?=$data['subject']?></td>
					<!-- <td><?=$data['time']?></td> -->
				</tr>
				</tbody>
		<?php } ?>

	<tr height="80px" align="center">
		<td colspan="3">
			<a href="home.php" class="darkBlueButton">HOME</a>
			<a href="routine.php" class="lightBlueButton"> Go To Routine ></a>
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