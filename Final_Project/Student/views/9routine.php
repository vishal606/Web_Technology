<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
		require_once('../model/subjectsModel.php');
	$result = getAll9Subjects();
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

.lightBlueButton9 {
	box-shadow:inset 0px 0px 0px 0px #dcecfb;
	background:linear-gradient(to bottom, #43A047 50%, #80b5ea 100%);
	background-color:#43A047;
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
	<title>Class Routine</title>

</head>
<body>
	<br>
	<h3><table border="5" align="center" width="80%" cellspacing="4" cellpadding="4" class="customTable">

	<thead>
	<tr height="60px" align="center">
		<td colspan="4">
			<a href="6routine.php" class="lightBlueButton">Class 6</a>  
			<a href="7routine.php" class="lightBlueButton">Class 7</a>  
			<a href="8routine.php" class="lightBlueButton">Class 8</a>  
			<a href="9routine.php" class="lightBlueButton9">Class 9</a>  
			<a href="10routine.php" class="lightBlueButton">Class 10</a>  
		</td>
	</tr>

	<tr align="center">
		<td><h3>Class</h3></td>
		<td width="35%"><h3>Subject</h3></td>
		<td><h3>Day</h3></td>
		<td width="25%"><h3>Time</h3></td>
	</tr>
	</thead>

	<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tbody>
				<tr align="center">	
					<td><?=$data['class']?></td>
					<td><?=$data['subject']?></td>
					<td><?=$data['day']?></td>
					<td><?=$data['time']?></td>
				</tr>
				</tbody>

		<?php } ?>


	<tr height="70px" align="center">
		<td colspan="5">
			<a href="home.php" class="darkBlueButton">HOME</a>

			<a href="subject-info.php" class="lightBlueButton">< Go to Subject Information </a>

			<a href="teachers-info.php" class="lightBlueButton"> Go To Teachers Information ></a>

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