<?php
   session_start();
 
?>
<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD RESULT</title>
</head>
<body>
	<form method="post" action="../controller/addResultCheck.php">
	<br>
	<center>
		<h3>ADD RESULT</h3><br>
	
	
		<table border="2" align="center">

		<tr height="50px">
			<td width="150px">UID</td>
			<td width="350px"><input type="text" name="uid" value=""></td>
		</tr>

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
			<td>MID</td>
			<td><input type="text" name="mid" value=""></td>
		</tr>

		<tr height="50px">
			<td>FINAL</td>
			<td><input type="text" name="final" value=""></td>
		</tr>


		<tr height="50px">
			<td>TOTAL</td>
			<td><input type="text" name="total" value=""></td>	
		</tr>

		<tr height="50px">
			<td>TID</td>
			<td><input type="text" name="tid" value=""></td>	
		</tr>

		<tr height="60px" >
			<td colspan="2" align="center">
				<a href="addResult.php"><input type="button" name="" value="RESET"></a>
				<input type="submit" name="submit" value="ADD">
			</td>
		</tr>
	</table>
</form>
</center>
</body>
</html>