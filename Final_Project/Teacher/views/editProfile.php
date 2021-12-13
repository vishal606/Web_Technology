<?php
   session_start();
   require_once('../model/Model.php');
	$id = $_REQUEST['id'];
	$user = getTeacherById($id);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Teacher Profile</title>

</head>
<body>
	<form method="post" action="../controller/editTeacherCheck.php">
		
		<h3><table border="2" align="center">
		<tr height="100px">
			<th colspan="2" height="100"><h2>Edit Teacher Profile</h2></th>
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
				<input type="hidden" name="id" value="<?=$id?>">
				<input type="submit" name="submit" value="EDIT">
			</td>
		</tr>
	</table></h3>
</form>
</body>
</html>
