<?php
  session_start();
  if(isset($_SESSION['flag'])){
?>
<?php include "header.php";?>

<!DOCTYPE html>
<html>
<head>

<body>
<form name="Teacher_Profile" action="../../../Controller/updateTeacher.php" method="POST" enctype="multipart/form-data">
  <fieldset style="width: 96%;">
    <legend class="text"><b>ADD TEACHERS</b></legend>
    <center><table><div id="errorBox"></div></table></center>
    
    <form>
    <br/>
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td>Name</td>
        <td>:</td>
        <td><input name="name" id="name" type="text" onkeyup="checkName()" onblur="checkName()" value=""></td>
        <td></td>
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>

      <tr>
        <td>Father Name</td>
        <td>:</td>
        <td><input name="fname" id="fname" onkeyup="checkFName()" onblur="checkFName()" type="text" value=""></td>
        <td></td>
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>

      <tr>
        <td>Mother Name</td>
        <td>:</td>
        <td><input name="mname" id="mname" onkeyup="checkMName()" onblur="checkMName()" type="text" value=""></td>
        <td></td>
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>

      <tr>
        <td>Email</td>
        <td>:</td>
        <td>
          <input name="email" type="text" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="">
        </td>
        <td></td>
        
      <tr><td colspan="4"><hr/></td></tr>

      <tr>
        <td>Address</td>
        <td>:</td>
        <td>
          <input name="address" type="text" id="address" onkeyup="checkAddress()" onblur="checkAddress()" value="">
        </td>
        <td></td>
        
      <tr><td colspan="4"><hr/></td></tr>

      <tr>
        <td>Gender</td>
        <td>:</td>
        <td>   
          <input name="gender" type="radio" value="Male">Male
          <input name="gender" type="radio" value="Female" >Female
          <input name="gender" type="radio" value="Other" >Other
        </td>
        <td></td>
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>
      
      <tr>
        <td valign="top">Date of Birth</td>
        <td valign="top">:</td>
        <td>
          <input name="dob" type="date" value="">
          <br/>
          <font size="2"><i>(mm/dd/yyyy)</i></font>
        </td>
        <td></td>
      </tr>
      <tr><td colspan="4"><hr/></td></tr>

      <tr>
        <td>Picture</td>
        <td>:</td>
        <td>
         <form action="/action_page.php">
         <input type="file" id="myFile" name="filename">
         
         </form>
        </td>
        <td></td>
    </table>
    <hr/>

    <input type="hidden" uid="uid" name="uid" value=""><br>
    <center><input type="submit" class="button3" name = "updateTeacher" onClick="return validateForm();" value="Submit">
    <button type="submit" class="button3" formaction="home.html">Back</button>
    
  </fieldset>
</form> 

</body>
</html>
<?php
 
 }else{
  header('location: login.html');
 }

?>
