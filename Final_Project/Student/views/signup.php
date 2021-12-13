<?php
    include('headerL.php');
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


/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:80px}
    /*input {padding-right:150px}*/
}


	</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign-up Page</title>

</head>
<body>
	<form method="post" action="../controller/signupCheck.php" enctype="multipart/form-data">
		<h3><table border="5" align="center" cellspacing="4" cellpadding="4">
		<tr height="100px">
			<th colspan="2" height="100">
				<h2>Sign-up</h2>
				<br>Check <a href="uid-list.php">Taken UID List</a> For a Unique UID
			</th>
		</tr>

		<tr height="50px">
			<td width="150px">UID<br>
			<small>
            <span id="err_uid" style="color:red"> </span>
        	</small>
        	</td>
			<td width="350px"><input type="text" id="uid" name="uid" value="" maxlength="4" onkeyup="validateUid()"></td>
		</tr>

		<tr height="50px">
			<td width="150px">Password<br>
			<small>
            <span id="err_pass" style="color:red"> </span>
        	</small>
			</td>
			<td width="350px"><input type="text" id="password" name="password" value="" onkeyup="validatePass()"></td>
		</tr>

		<tr height="50px">
			<td width="150px">Name<br>
			<small>
            <span id="err_name" style="color:red"> </span>
        	</small>
			</td>
			<td width="350px"><input type="text" id="name" name="name" value="" onkeyup="validateName()"></td>
		</tr>

		<tr height="50px">
			<td>Date of Birth<br>
			<small>
            <span id="err_dob" style="color:red"> </span>
        	</small>
			</td>
			<td>
				<input type="date" id="dob" name="dob" value="" onmouseout="validateDOB()">
			</td>	
		</tr>

		<tr height="50px">
			<td>Gender<br>
			<small>
            <span id="err_gender" style="color:red"> </span>
        	</small>
			</td>
			<td>
				<select name="gender" id="gender" onmouseout="validateGender()">
					<option value="">Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option>
				</select>
			</td>	
		</tr>

		<tr height="50px">
			<td>Blood Group<br>
			<small>
            <span id="err_bloodgrp" style="color:red"> </span>
        	</small>
			</td>
			<td>
				<select name="bloodgrp" id="bloodgrp" onmouseout="validateBloodgrp()">
					<option value="">Select Blood Group</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
				</select><br>
				<small><span style="color:red">Mandatory For Students Only</span></small>
			</td>
		</tr>

		<tr height="50px">
			<td>Class<br>
			<small>
            <span id="err_class" style="color:red"> </span>
        	</small>
			</td>
			<td>
				<select name="class" id="class" onmouseout="validateClass()">
					<option value="">Select Class</option>
					<option value="6">Class 6</option>
					<option value="7">Class 7</option>
					<option value="8">Class 8</option>
					<option value="9">Class 9</option>
					<option value="10">Class 10</option>
				</select><br>
				<small><span style="color:red">Mandatory For Students Only</span></small>
			</td>
		</tr>

		<tr height="50px">
			<td width="150px">Address<br>
			<small>
            <span id="err_address" style="color:red"> </span>
        	</small>
			</td>
			<td width="350px"><input type="text" id="address" name="address" value="" onkeyup="validateAddress()"></td>
		</tr>

		<tr height="50px">
			<td>Email<br>
			<small>
            <span id="err_email" style="color:red"> </span>
        	</small>
			</td>
			<td><input type="email" id="email" name="email" value="" onkeyup="validateEmail()"></td>
		</tr>

		<tr height="50px">
			<td>User Type<br>
			<small>
            <span id="err_type" style="color:red"> </span>
        	</small>
			</td>
			<td>
				<select name="type" id="type" onmouseout="validateType()">
					<option value="">Select Type</option>
					<option value="s">Student</option>
					<option value="t">Teacher</option>
					<option value="l">Librarian</option>
				</select>
			</td>	
		</tr>

		<tr height="50px">
			<td>Photo<br>
			<small>
            <span id="err_picture" style="color:red"> </span>
        	</small>
			</td>
			<td colspan="2"><input type="file" id="picture" name="picture" value="" onmouseout="validatePicture()"></td>
		</tr>

		<tr height="60px" onmousemove="validateType()">
			<td colspan="2" align="center">
				<div>
				<a href="login.php" class="lightBlueButton">LOGIN</a>

				<a href="uid-list.php" class="darkBlueButton">UID List</a>
				<a href="signup.php" class="lightBlueButton">RESET</a>

				<input type="submit" class="darkBlueButton" name="submit" value="SUBMIT" onmousemove="validatePicture()" onclick="myValidation()">
				</div>
			</td>
		</tr>
	</table></h3>
</form>
	<script type="text/javascript" src="../controller/signupScript.js"></script>
</body>
</html>
