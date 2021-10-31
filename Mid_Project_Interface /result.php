<?php
  session_start();
  if(isset($_SESSION['flag'])){
?>
<?php include "header.php";?>

<!DOCTYPE html>
<html>
<head>
</head>
<form name="Result" method="post" action=""style="padding-top: 10px">
  <fieldset style="width: 96%;" align="left">
  <legend class="text"><b>SHOW STUDENT RESULT</b></legend>
  <form action="#" method="POST">

  <center><input class="text" type="text" name="valueToSearch" placeholder="Value To Search" value=""
  input type="submit" name="search" class="button3" value="Search" onClick="return submit1();"><br><br><center><div id="errorBox" style="font-size:18px;"></div>
  <span class="error" style="font-size:20px;"> </span><br>

  <table border=1 width=100%>

    <tr>
    <td>
      <table width=100%>
        <center><h><b><font size='5'>Student Grade Report</center>
        <tr><td><font size='3'><b>Student Name: </font></td></tr>
        <tr><td><font size='3'><b>Student ID: </font></td></tr>
        <tr><td><font size='3'><b>Class: </font></td></tr>
      </table>
    </td>
    </tr>
    <tr>
    <td>
      <table border=1 width=100%>

        <th><i>Subject name</i></th><th><i>Mid Marks</i></th><th><i>Final Marks</i></th><th><i>Total Marks</i></th></tr>

        <td></td><td></td><td></td><td></td></tr>
        
      
        <tr><td></td><td></td><td></td><td><font size='3'><b>Total: </font></td></tr>
      </table>
    </td>
    </tr>
  </table>
</center>
</html>
<?php
 
 }else{
  header('location: login.html');
 }

?>