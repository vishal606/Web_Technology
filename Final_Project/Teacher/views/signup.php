<?php include('headerL.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>

</head>
<style>
    body {background-color: lightblue;}
        .container{
            border-style: outset; width: 40%;
        }
    </style>
<body>
	<form method="post" action="../controller/signupCheck.php">
	
		<br>
		<h3><table border="2" align="center">
		<tr height="100px">
			<th colspan="2" height="100"><h2>Signup</h2></th>
		</tr>

		<tr height="50px">
			<td width="150px">Uid</td>
			<td width="350px"><input type="text" name="uid" value=""></td>
		</tr>

		<tr height="50px">
			<td>Password</td>
			<td><input type="text" name="password" value=""></td>
		</tr>

		<tr height="50px">
			<td width="150px">Name</td>
			<td width="350px"><input type="text" name="name" value=""></td>
		</tr>

		<tr height="50px">
			<td>Address</td>
			<td><input type="text" name="address" value=""></td>
		</tr>

		<tr height="50px">
			<td>Email</td>
			<td><input type="email" name="email" value=""></td>
		</tr>

		<tr height="50px">
			<td>Gender</td>
			<td>
				<select name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option>
				</select>
			</td>	
		</tr>


		<tr height="50px">
			<td>Date of Birth</td>
			<td>
				<input type="date" name="dob" value="">
			</td>	
		</tr>

 		<tr height="50px">
			<td>Photo</td>
			<td colspan="2"><input type="file" name="picture" value=""></td>
		</tr> 

		<tr height="60px" >
			<td colspan="2" align="center">
				<a href="signup.php"><input type="button" name="" value="RESET"></a>

				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table></h3>
</form>
</body>
</html>
