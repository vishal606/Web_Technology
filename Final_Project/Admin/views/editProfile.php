<?php
   session_start();
   require_once('../model/Model.php');
	$id = $_REQUEST['id'];
	$user = getAdminView($id);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Admin Profile</title>

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
	<form method="post" action="../controller/adminCheck.php">
		
		<br>
		<h3><table border="2" align="center">
		<tr height="100px">
			<th colspan="2" height="100"><h2>Edit Admin Profile</h2></th>
		</tr>

		<tr height="50px">
			<td width="150px">Name</td>
			<td width="350px"><input type="text" name="name" value="<?=$user['name']?>"></td>
		</tr>

		<tr height="50px">
			<td>Address</td>
			<td><input type="text" name="address" value="<?=$user['address']?>"></td>
		</tr>

		<tr height="50px">
			<td>Email</td>
			<td><input type="email" name="email" value="<?=$user['email']?>"></td>
		</tr>


		<tr height="50px">
			<td>Date of Birth</td>
			<td>
				<input type="date" name="dob" value="<?=$user['dob']?>">
			</td>	
		</tr>

 		<tr height="50px">
			<td>Photo</td>
			<td colspan="2"><input type="file" name="picture" value=""></td>
		</tr>

		<tr height="60px" >
			<td colspan="2" align="center">
				<a href="allProfile.php" class="myButton">Back</a>
				<input type="hidden" name="id" value="<?=$id?>">
				<input type="submit" name="submit" class="myButton" value="EDIT">
			</td>
		</tr>
	</table></h3>
</form>
</body>
</html>
