<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
		require_once('../model/studentsModel.php');
	$id = $_REQUEST['id'];
	$user = getStudentById($id);
?>
<!DOCTYPE html>
<html>
<head>
	<style>

.lightBlueButton {
	box-shadow:inset 0px 0px 0px 0px #dcecfb;
	background:linear-gradient(to bottom, #bddbfa 5%, #80b5ea 100%);
	background-color:#bddbfa;
	border-radius:30px;
	border:3px solid #3488db;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	color: black;
	font-size:15px;
	font-weight:bold;
	padding:13px 26px;
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
	font-size:15px;
	padding:13px 26px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.darkBlueButton:hover,.darkBlueButton:active,.darkBlueButton:focus {
	background: #43A047;
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
}

table.customTable thead {
  background-color: #2F79F8;
}

	</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Student Profile</title>

</head>
<body>
	<form method="post" action="../controller/editStudentCheck.php" enctype="multipart/form-data">
		<h3><table border="5" align="center" cellspacing="4" cellpadding="4" width="50%" class="customTable">
		<thead>
		<tr height="100px">
			<th colspan="2" height="100"><h2>Edit Student Profile</h2></th>
		</tr>
		</thead>

		<tbody>
		<tr height="50px">
			<td width="150px">Name<br>
			<small>
            <span id="err_name" style="color:red"> </span>
        	</small>
			</td>
			<td width="350px"><input type="text" id="name" name="name" value="<?=$user['name']?>" onkeyup="validateName()"></td>
		</tr>

		<tr height="50px">
			<td>Date of Birth<br>
			<small>
            <span id="err_dob" style="color:red"> </span>
        	</small>
			</td>
			<td>
				<input type="date" id="dob" name="dob" value="<?=$user['dob']?>" onmouseout="validateDOB()">
				<i>(dd/mm/yyyy)</i>
			</td>	
		</tr>

		<!-- <tr height="50px">
			<td>Gender</td>
			<td>
				<select name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option>
				</select><?=$user['gender']?>
			</td>	
		</tr> -->


		<tr height="50px">
			<td>Class<br>
			<small>
            <span id="err_class" style="color:red"> </span>
        	</small>
			</td>
			<td>
			<!-- <input type="number" name="class" value="<?=$user['class']?>" min="6" max="10"> |6/7/8/9/10| ONLY</td> -->
			<select name="class" id="class" onmouseout="validateClass()">
					<option value="<?=$user['class']?>">Class <?=$user['class']?></option>
					<option value=""></option>
					<option value="6">Class 6</option>
					<option value="7">Class 7</option>
					<option value="8">Class 8</option>
					<option value="9">Class 9</option>
					<option value="10">Class 10</option>
			</select></td>
		</tr>

		<tr height="50px">
			<td width="150px">Address<br>
			<small>
            <span id="err_address" style="color:red"> </span>
        	</small>
			</td>
			<td width="350px"><input type="text" id="address" name="address" value="<?=$user['address']?>" onkeyup="validateAddress()"></td>
		</tr>

		<tr height="50px">
			<td>Email<br>
			<small>
            <span id="err_email" style="color:red"> </span>
        	</small>
			</td>
			<td><input type="text" id="email" name="email" value="<?=$user['email']?>" onkeyup="validateEmail()"></td>
		</tr>


		<tr height="50px">
			<td>Photo<br>
			<small>
            <span id="err_picture" style="color:red"> </span>
        	</small>
			</td>
			<td colspan="2"><input type="file" id="picture" name="picture" value="" onmousemove="validatePicture()"></td>
		</tr>
		</tbody>

		<!-- <tr height="50px">
			<td width="150px">Password</td>
			<td width="350px"><input type="text" name="password" value=""> For Confirmation .</td>
		</tr> -->

		<tr height="60px" >
			<td colspan="2" align="center">

				<a href="profiles.php" class="lightBlueButton">BACK</a>

				<input type="hidden" name="id" value="<?=$id?>" onclick="myValidation()">
				<input type="submit" name="submit" value="UPDATE" class="darkBlueButton" onmousemove="validatePicture()" onclick="myValidation()">

			</td>
		</tr>
	</table></h3>
</form>
	<script type="text/javascript" src="../controller/editScript.js"></script>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }
?>