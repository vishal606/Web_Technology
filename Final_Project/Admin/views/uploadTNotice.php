<?php
   session_start();
 
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD TEACHER NOTICE</title>
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


<legend class="text"><b>Upload Teacher Notice</b></legend><br>
  <center><table><div id="errorBox"></div></table></center>
	<center>

	

	<form method="post" action="../controller/uploadTNoticeCheck.php">
	
		<table border="2" align="center" width="50%">

	

		<tr height="50px">
			<td>Title :</td>
			<td><input type="text" name="title" value=""></td>
		</tr>

		<tr height="50px">
			<td>Notice :</td>
			<td><input type="text" name="notice" value=""></td>
		</tr>


		<tr height="50px">
			<td>Date :</td>
			<td><input type="date" name="date" value=""></td>	
		</tr>

		<tr height="60px" >
			<td colspan="2" align="center">
				<a href="uploadTNotice.php"class="myButton">Reset</a>
				<input type="submit" name="submit" class="myButton" value="UPLOAD">
			</td>
		</tr>
	</table>
</form>
</center>
</fieldset>
</body>
</html>