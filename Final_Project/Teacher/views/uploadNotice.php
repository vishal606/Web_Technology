<?php
   session_start();
 
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD NOTICE</title>
</head>
<body>
	<br>
	<form method="post" action="../controller/uploadNoticeCheck.php">
	
		<table border="2" align="center">

		<tr height="50px">
			<td>Class</td>
			<td>
				<select name="class">
					<option value="6">Class 6</option>
					<option value="7">Class 7</option>
					<option value="8">Class 8</option>
					<option value="9">Class 9</option>
					<option value="10">Class 10</option>
				</select>
			</td>
		</tr>

		<tr height="50px">
			<td width="150px">Subject</td>
			<td width="350px"><input type="text" name="subject" value=""></td>
		</tr>

		<tr height="50px">
			<td>Title</td>
			<td><input type="text" name="title" value=""></td>
		</tr>

		<tr height="50px">
			<td>Notice</td>
			<td><input type="text" name="notice" value=""></td>
		</tr>


		<tr height="50px">
			<td>Date</td>
			<td><input type="date" name="date" value=""></td>	
		</tr>

		<tr height="60px" >
			<td colspan="2" align="center">
				<a href="editProfile.php"><input type="button" name="" value="RESET"></a>
				<input type="submit" name="submit" value="UPLOAD">
			</td>
		</tr>
	</table>
</form>
</center>
</body>
</html>