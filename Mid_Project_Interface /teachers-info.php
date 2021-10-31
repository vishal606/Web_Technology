<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<?php include "header.php";?>

<!DOCTYPE html>
<html>
<head>
	<body>
    <fieldset style="width: 96%;" align="left">
  <legend class="text"><center>Teacher Information</center></legend>
   <center><input class="text" type="text" name="valueToSearch" placeholder="Value To Search" value=""
  input type="submit" name="search" class="button3" value="Search" onClick="return submit1();"><br><br><center><div id="errorBox" style="font-size:18px;"></div>
  <span class="error" style="font-size:20px;"> </span><br>

	<table border="1" align="center">
	<tr align="center">
		<td><h2>Name</h2></td>
		<td width="20%"><h2>Course</h2></td>
		<td width="20%"><h2>Email</h2></td>
		<td width="20%"><h2>Room No</h2></td>
		<td><h2>Picture</h2></td>
	</tr>

	<tr align="center">
		<td><h3>DR. MOHAMMAD ANISUR RAHMAN JAMI</h3></td>
		<td><h3>Chemistry</h3></td>
		<td><h3>anisur.rahman@aiub.edu</h3></td>
		<td><h3>001</h3></td>
		<td><img src="assets/man.png" width="100px" height="100px"></td>
	</tr>

	<tr align="center">
		<td><h3>MD. AL-AMIN</h3></td>
		<td><h3>Web Technologies</h3></td>
		<td><h3>alamin@aiub.edu</h3></td>
		<td><h3>002</h3></td>
		<td><img src="assets/man.png" width="100px" height="100px"></td>
	</tr>

	<tr align="center">
		<td><h3>SHAHRIN CHOWDHURY</h3></td>
		<td><h3>Computer Networks</h3></td>
		<td><h3>shahrin@aiub.edu</h3></td>
		<td><h3>003</h3></td>
		<td><img src="assets/man.png" width="100px" height="100px"></td>
	</tr>

	<tr align="center">
		<td><h3>DR. DIP NANDI</h3></td>
		<td><h3>Resarch Methodology</h3></td>
		<td><h3>dip.nandi@aiub.edu</h3></td>
		<td><h3>004</h3></td>
		<td><img src="assets/man.png" width="100px" height="100px"></td>
	</tr>


	</table>
</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }

?>