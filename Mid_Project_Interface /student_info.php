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
  <legend class="text"><center>Student Information</center></legend>
   <center><input class="text" type="text" name="valueToSearch" placeholder="Value To Search" value=""
  input type="submit" name="search" class="button3" value="Search" onClick="return submit1();"><br><br><center><div id="errorBox" style="font-size:18px;"></div>
  <span class="error" style="font-size:20px;"> </span><br>

  <table border="1" align="center">
  <tr align="center">
    <td><h2>Name</h2></td>
    <td width="20%"><h2>ID</h2></td>
    <td width="20%"><h2>Class</h2></td>
    <td width="20%"><h2>Room NO</h2></td>
    <td><h2>Picture</h2></td>
  </tr>

  <tr align="center">
    <td><h3>Rahim</h3></td>
    <td><h3>101</h3></td>
    <td><h3>6</h3></td>
    <td><h3>001</h3></td>
    <td><img src="assets/man.png" width="100px" height="100px"></td>
  </tr>

  <tr align="center">
    <td><h3>Karim</h3></td>
    <td><h3>102</h3></td>
    <td><h3>7</h3></td>
    <td><h3>002</h3></td>
    <td><img src="assets/man.png" width="100px" height="100px"></td>
  </tr>

  <tr align="center">
    <td><h3>Alex</h3></td>
    <td><h3>105</h3></td>
    <td><h3>8</h3></td>
    <td><h3>003</h3></td>
    <td><img src="assets/man.png" width="100px" height="100px"></td>
  </tr>

  <tr align="center">
    <td><h3>Smith</h3></td>
    <td><h3>107</h3></td>
    <td><h3>9</h3></td>
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
