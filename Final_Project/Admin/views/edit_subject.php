<?php
	if(isset($_COOKIE['flag']))
		include('header.php');
		require_once('../model/Model.php');
	$id = $_REQUEST['id'];
	$user = getSubjectById($id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Subject</title>

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
  <form method="post" action="../controller/editSubjectCheck.php" enctype="multipart/form-data">
		<h3><table border="2" align="center" cellspacing="2" cellpadding="2" width="50%">
		<tr height="100px">
			<th colspan="2" height="100"><h2>Edit Subject</h2></th>
		</tr>
      
<table border="2" align="center" width="50%">
  
    <tr height="50px">
      <td>Class :</td>
      <td>
      <select name = "class">
          <option value="<?=$user['class']?>"><?=$user['class']?> </option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          </select>
        </td>
    </tr>

    <tr height="50px">
      <td>Subject Name:</td>
     <td><input type="text" name="subject" value="<?=$user['subject']?>" id="subject" onkeyup="CheckName()" onblur="CheckName()"></td>
    </tr>

<tr height="50px">
      <td>Time :</td>
      <td>
       <select name = "time" id="time">
         <option value="<?=$user['time']?>" ><?=$user['time']?> </option>  
        <option value="8:00-10:00 AM" >8:00-10:00 AM</option>
        <option value="10:00-12:00 PM" >10:00-12:00 PM</option>  
        <option value="1:00-3:00 PM" >1:00-3:00 PM</option>
        <option value="3:00-5:00 PM" >3:00-5:00 PM</option>   
          </select>
        </td>
    </tr>
    <tr height="50px">
      <td>Day:</td>
      <td><select name = "day" id="day">
        <option value="<?=$user['day']?>"><?=$user['day']?> </option>   
        <option value="SUN-TUE" >Sunday-Tuesday</option>
        <option value="MON-WED" >Monday-Wednesday</option> 
        </select> 
        </td> 
    </tr>
<tr height="60px" >
			<td colspan="2" align="center">

				<a href="class-info.php" class="myButton">Back</a>

				<input type="hidden" name="id" value="<?=$id?>" onclick="myValidation()">
				<input type="submit" name="submit" class="myButton" value="UPDATE" onmousemove="validatePicture()" onclick="myValidation()">

			</td>
		</tr>
   
  </form>
 </body>
 </html>

 
