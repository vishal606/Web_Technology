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



<form name="Send_Notice" method="POST" action=""style="padding-top: 10px">
  <fieldset style="width: 96%;" align="left">
  
  <legend class="text"><b>SEND NOTICE </b></legend>
  <center><table><div id="errorBox"></div></table></center>
  <span class="error">   </span><br>

  <form action="#" method="POST">
    <br/>
    <table width="100%" cellpadding="0" cellspacing="0">
     

      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Title</td>
        <td>:</td>
        <td><input name="title" type="text" id="title" onkeyup="checkTitle()" onblur="checkTitle()"></td>
        <td></td>
      </tr>

      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Notice Details</td>
        <td>:</td>
        <td> <textarea name="notice" id="notice" onkeyup="checkNotice()" onblur="checkNotice()"></textarea></td>
        <td></td>
      </tr>

      <tr><td colspan="4"><hr/></td></tr>
    </table>

  </form>
  
  <center><input type="submit" class="button3" name="submit" value="Send" onClick="return validateForm();" style="width: 60px">
  <button type="submit" class="button3" formaction="">Back</button>
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