<?php
		include('headerL.php');
		require_once('../model/noticeModel.php');
	$result = getAllDashboard();
	$count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	
.darkBlueButton {
	/*background-color:#2063b0;*/
	background-color:#2778d6;
	border-radius:20px;
	border:3px solid #08298a;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:10px 18px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.darkBlueButton:hover,.darkBlueButton:active,.darkBlueButton:focus {
	background: #04AA6D;
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
  background-color: #2778d6;
}

	</style>
	<meta charset="utf-8">
	<title>NOTICE FROM TEACHERS</title>
</head>
<body>
	<br>
	<center>
		<br>
	
		<a href="login.php" class="darkBlueButton">LOGIN</a>
	
		<h3><table border="5" align="center" width="80%" cellspacing="4" cellpadding="4" class="customTable">

		<thead>
		<tr align="center">
		
			<td><h3>TITLE</h3></td>
			<td><h3>NOTICE</h3></td>
			<td><h3>Date</h3>yyyy/mm/dd<br></td>
		</tr>
		</thead>

		<?php while($data =mysqli_fetch_assoc($result)){ ?>
			<tbody>
			<tr align="center">

				<td><h3><?=$data['title']?></h3></td>
				<td><?=$data['notice']?></td>
				<td><?=$data['date']?></td>
			</tr>
			</tbody>
		<?php } ?>


		</table></h3>
	</center>
</body>
</html>
