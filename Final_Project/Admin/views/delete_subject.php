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
  <title>Delete Subject</title>

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
  <form method="post" action="../controller/deleteSubjectCheck.php">

<h3><table border="2" align="center" cellspacing="2" cellpadding="2" width="50%">
<tr height="50px">
        
      <td colspan="2" align="center">
        <h2>Delete Subject</h2>
      </td>

    </tr>
    <tr height="50px">
    <td width="150px">Class</td>
    <td width="300px"><?=$user['class']?></td>
    </tr>

    <tr height="50px">
      <td width="150px">Subject</td>
      <td width="300px"><?=$user['subject']?></td>
    </tr>

    <tr height="50px">
      <td>Day</td>
      <td><?=$user['day']?></td>
    </tr>

    <tr height="50px">
      <td>Time</td>
      <td><?=$user['time']?></td>
    </tr>

    <tr>
          <td colspan="2" align="center">Are You Sure! <br> Delete?</td>
        </tr>
        <tr>
          <td colspan="2" align="center">
          <input type="hidden" name="id" value="<?=$id?>">
          <input type="submit" name="submit" class="myButton" value="DELETE">
          </td>
        </tr>

    </fieldset>
  </form>
</table>
</body>
</html>