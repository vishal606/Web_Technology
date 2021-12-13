<?php
   session_start();
   require_once('../model/Model.php');
	$result = getResult();
	$count = mysqli_num_rows($result);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Result </title>
	   <style>

body{
  background-image: url("s.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
   </style>

  <script type="text/javascript">

    function submit1()
    {
      var valueToSearch = document.Result.valueToSearch.value;

      //Student
      if(valueToSearch == "")
      {
        document.Result.valueToSearch.focus();
        document.getElementById("errorBox").innerHTML = "Enter Student Id";
        return false;
      }
    }
  </script>

<?php

  $valueToSearch='';
  $results = "";

  if(isset($_POST['search']))
  {
    $valueToSearch = $_POST['valueToSearch'];
    $results  = filterTable($valueToSearch);
  }
  
  
?>
   <br>
<fieldset>
<legend class="text"><b>Result</b></legend><br>
  <center><table><div id="errorBox"></div></table></center>
	<table border="2" align="center" width="70%">


		<tr height="50px" align="center">
			<td>UID</td>
			<td>Class</td>
			<td>Subject</td>
			<td>Mid</td>
			<td>Final</td>
			<td>Total</td>
			<td>TID</td>
		</tr>

		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['uid']?></td>
					<td><?=$data['class']?></td>
					<td><?=$data['subject']?></td>
					<td><?=$data['mid']?></td>
					<td><?=$data['final']?></td>
					<td><?=$data['total']?></td>
					<td><?=$data['tid']?></td>
				</tr>

		<?php } ?>


	</table>

</body>
</html>

</head>
<body>
