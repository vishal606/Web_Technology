<?php
  session_start();
  if(isset($_SESSION['flag'])){
?>
<?php include "header.php";?>
<!DOCTYPE html>
<html>
<head>
</head>

   <fieldset style="width: 96%;" align="left">
  <legend class="text"><b>TEACHER ATTENDENCE</b></legend>
  <center><table><div id="errorBox"></div></table></center>

  <table>
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

  <label for="dob" >Select Date :</label>

  <input type="date" name="dob" value="<?php echo $dob;?>"><span class="error"></span>

  </table>

  <label for="type" >Attendence :</label>



  <input  type="radio" name="type" value="Present">Present
  <input type="radio" name="type"  value="Absent">Absent
  <hr>

  <center><input type="submit" class="button3" name="submit" value="Save" onClick="return submit1();" style="width: 60px">
  <button type="submit" class="button3" formaction="Data.php">Attendence</button>
  <button type="submit" class="button3" formaction="Logged_In_Dashboard.php">Back</button>

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
