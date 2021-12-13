<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
		require_once('../model/Model.php');
	$id = $_REQUEST['id'];
	$user = getLibarianById($id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Librarian Profile</title>

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
	<form method="post" action="../controller/editLibrarianCheck.php" enctype="multipart/form-data">
		<h3><table border="5" align="center" cellspacing="4" cellpadding="4" width="50%">
		<tr height="100px">
			<th colspan="2" height="100"><h2>Edit Librarian Profile</h2></th>
		</tr>

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
			<td>Class<br>
			<small>
            <span id="err_class" style="color:red"> </span>
        	</small>
			</td>
			<td>
		
			<select name="class" id="class" onmouseout="validateClass()">
					<option value="<?=$user['class']?>">Class <?=$user['class']?></option>
					<option value=""></option>
					<option value="6">Class 6</option>
					<option value="7">Class 7</option>
					<option value="8">Class 8</option>
					<option value="9">Class 9</option>
					<option value="10">Class 10</option>
			</select></td>
		</tr> -->

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


	 <tr height="50px">
				<td>status<br>
				<small>
	            <span id="err_status" style="color:red"> </span>
	        	</small>
				</td>
				<td>
			
				<select name="status" id="status" onmouseout="validateStatus()">
						<option value="<?=$user['status']?>">Status <?=$user['status']?></option>
				
						<option value="a">Active</option>
						<option value="p">Keep Pending</option>
						
				</select></td>
			</tr> 


		<!-- <tr height="50px">
			<td width="150px">Password</td>
			<td width="350px"><input type="text" name="password" value=""> For Confirmation .</td>
		</tr> -->

		<tr height="60px" >
			<td colspan="2" align="center">

				<a href="teachers-list.php"class="myButton">Back</a>

				<input type="hidden" name="id" value="<?=$id?>" onclick="myValidation()">
				<input type="submit" name="submit" class="myButton" value="UPDATE" onmousemove="validatePicture()" onclick="myValidation()">

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