<?php
  session_start();
  if(isset($_SESSION['flag'])){
?>
<?php include "header.php";?>

<!DOCTYPE html>
<html>
<head>
</head>

  <form name="Add_Subject" method="post" action=""style="padding-top: 10px">
  <fieldset style="width: 96%;" align="left">
  
  <legend class="text"><b>ADD NEW SUBJECT</b></legend>
  <center><table><div id="errorBox"></div></table></center>

  <form action="#" method="POST">
    <br/>
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td>Class</td>
        <td>:</td>
        <td>
          <select name = "combo">
          <option value="">Select Class</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          </select>
        </td>
        <td></td>
      </tr>
      <tr><td colspan="4"><hr/></td></tr>

      <tr>
        <td>Subject Name</td>
        <td>:</td>
        <td><input name="sname" id="sname" onkeyup="checkSubject()" onblur="checkSubject()" type="text"></td><span class="error">   </span><br>
      </tr>
 
    </table>
    <hr/>
  </form>
  
  <center><input type="submit" class="button3" name="submit" value="Add" class="button1" onClick="return validateForm();" style="width: 60px">
  <button type="submit" class="button3" formaction="home.php">Back</button>
  <br/><br>
  </form>
</fieldset>

</form>
</body>
</html>
<?php
 
 }else{
  header('location: login.html');
 }

?>