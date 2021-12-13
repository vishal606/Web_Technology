<?php
   session_start();
include('header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Subject</title>
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
  <br>
  <center>
  <fieldset>
	 <legend class="text"><b>ADD NEW SUBJECT</b></legend><br>
  <center><table><div id="errorBox"></div></table></center>

 <form method="post" action="../controller/subjectCheck.php">
    <br/>
  
<table border="2" align="center" width="50%">
  
    <tr height="50px">
      <td>Class :</td>
      <td>
      <select name = "class">
          <option>Select Class</option>
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
      <td><input type="text" name="subject" value="" id="subject" onkeyup="CheckName()" onblur="CheckName()"></td>
    </tr>

<tr height="50px">
      <td>Time :</td>
      <td>
       <select name = "time" id="time">
        <option >Select Time</option>  
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
        <option >Select Day:</option>  
        <option value="SUN-TUE" >Sunday-Tuesday</option>
        <option value="MON-WED" >Monday-Wednesday</option> 
        </select> 
        </td> 
    </tr>
    <tr height="50px">
    <td colspan="2" align="center">
      <input type="submit" class="myButton" name="submit" value="Submit">
    </td>
    </tr>


</fieldset>
</form>
</table>
</body>
</html>