<?php
  session_start();
  if(isset($_SESSION['flag'])){
?>
<?php include "header.php";?>

<!DOCTYPE html>
<html>
<head>
</head>

  <body>

<form name="Assign_Teacher" method="post" action=""style="padding-top: 10px">
  <fieldset style="width: 96%;" align="left">
  <legend class="text"><b>ASSIGN TEACHER TO A SUBJECT</b></legend>
  <center><table><div id="errorBox"></div></table></center>
  <span class="error">   </span>

<form>
  <br/>
    <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td>Class</td>
        <td>:</td>
        <td>
        <select name="combo">
        <option value="">Select a Class:</option>
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
        <td>
        <select name="combo">
        <option value="">Select a Subject:</option>
        <option value="Math">Math</option>
        <option value="ICT">ICT</option>
        <option value="English">English</option>
        <option value="Physics">Physics</option>
        </select>
       </td>
      <td></td>
        <td>
        
      
        </td>
        
        <td></td>
      </tr>

      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Select Teacher Id</td>
        <td>:</td>
        <td>
        
        <select name="combo">
        <option value="">Select ID:</option>
        <option value="101">101</option>
        <option value="102">102</option>
        <option value="103">103</option>
        <option value="104">104</option>
        </select>

        </td>
        
        <td></td>
      </tr>

      <tr><td colspan="4"><hr/></td></tr>
    </table>
  
  </form>
  
  <center><input type="submit" class="button3" name="submit" value="Assign" onClick="return submit1();" style="width: 60px">
  <button type="submit" class="button3" formaction="Logged_In_Dashboard.php">Back</button>
  <button type="submit" class="button3" formaction="ViewTeachers.php">Assigned Teacher</button>
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