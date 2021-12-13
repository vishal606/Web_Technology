<?php
  if(isset($_COOKIE['flag'])){
  	include('header.php');
    require_once('../model/resultModel.php');
  $result = getAllResults();
  $count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
  <style>
.lightBlueButton {
  box-shadow:inset 0px 0px 0px 0px #dcecfb;
  background:linear-gradient(to bottom, #bddbfa 5%, #80b5ea 100%);
  background-color:#bddbfa;
  border-radius:10px;
  border:3px solid #3488db;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  color: black;
  font-size:13px;
  font-weight:bold;
  padding:10px 22px;
  text-decoration:none;
  text-shadow:0px 1px 0px #528ecc;
}
.lightBlueButton:hover,.lightBlueButton:active,.lightBlueButton:focus {
  background: #43A047;
}   

.darkBlueButton {
  /*background-color:#2063b0;*/
  background-color:#2778d6;
  border-radius:10px;
  border:3px solid #08298a;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:13px;
  padding:10px 18px;
  text-decoration:none;
  text-shadow:0px 1px 0px #283966;
}
.darkBlueButton:hover,.darkBlueButton:active,.darkBlueButton:focus {
  background: #ff0000;
}

table.customTable {
  
  /*background-color: #FFFFFF;*/
  border-collapse: collapse;
  border-width: 5px;
  border-color: #3488db;
  border-style: solid;
  color: #000000;
}

table.customTable td, table.customTable th {
  border-width: 3px;
  border-color: #5EA6F8;
  border-style: solid;
  text-align: center;
}

table.customTable thead {
  background-color: #2778d6;
}
</style>
  <meta charset="utf-8">
  <title>Result</title>

</head>
<body>
	<br>
  <h3><table border="5" align="center" width="80%" cellspacing="4" cellpadding="4" class="customTable">

    <thead>
    <tr>
      <td colspan="8" align="center">
        <h3>ALL RESULTS</h3>
      </td>
  </tr>

  <tr align="center">
    <td><h3>UID</h3></td>
    <td><h3>CLASS</h3></td>
    <td><h3>SUBJECT</h3></td>
    <td><h3>MID</h3></td>
    <td><h3>FINAL</h3></td>
    <td><h3>TOTAL</h3></td>
    <td><h3>Teacher's ID</h3></td>
  </tr>
  </thead>

  <?php while($data =mysqli_fetch_assoc($result)){ ?>

        <tbody>
        <tr>
          <td><?=$data['uid']?></td>
          <td><?=$data['class']?></td>
          <td><?=$data['subject']?></td>
          <td><?=$data['mid']?></td>
          <td><?=$data['final']?></td>
          <td><?=$data['total']?></td>
          <td><?=$data['tid']?></td>
        </tr>
        </tbody>

    <?php } ?>

 <!--  <tr align="center">
    <td colspan="7">
      <h3>Total Grade :  </h3> -<br>_ 
      <h3>CGPA :  </h3>
    </td>
  </tr> -->

  <tr height="60px" align="center">
    <td colspan="10">
      <a href="home.php" class="lightBlueButton">HOME</a>
      <a href="../controller/logout.php" class="darkBlueButton">LOGOUT</a>
    </td>
  </tr>

  </table></h3>
</body>
</html>
<?php
}else{
  header('location: login.html');
 }
?>