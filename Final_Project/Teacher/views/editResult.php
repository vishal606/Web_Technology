<?php
   session_start();
   require_once('../model/Model.php');
	$id = $_REQUEST['id'];
	$user = getResultById($id);
?>
<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Result</title>

</head>
<body>
	<form method="post" action="../controller/editResultCheck.php">
		<center><a href="results.php">BACK</a></center>
		<br>
		<h3><table border="2" align="center">
		<tr height="100px">
			<th colspan="2" height="100"><h2>Edit Result</h2></th>
		</tr>

		<tr height="50px">
			<td width="150px">UID</td>
			<td width="350px"><?=$user['uid']?></td>
		</tr>

		<tr height="50px">
			<td width="150px">CLASS</td>
			<td width="350px"><?=$user['class']?></td>
		</tr>

		<tr height="50px">
			<td width="150px">SUBJECT</td>
			<td width="350px"><?=$user['subject']?></td>
		</tr>

		<tr height="50px">
			<td>MID</td>
			<td><input type="text" name="mid" value="<?=$user['mid']?>"></td>
		</tr>

		<tr height="50px">
			<td>FINAL</td>
			<td><input type="text" name="final" value="<?=$user['final']?>"></td>
		</tr>


		<tr height="50px">
			<td>TOTAL</td>
			<td><input type="text" name="total" value="<?=$user['total']?>"></td>	
		</tr>

 		<tr height="50px">
			<td>TID</td>
			<td colspan="2"><?=$user['tid']?></td>
		</tr>

		<tr height="60px" >
			<td colspan="2" align="center">
				<input type="hidden" name="id" value="<?=$id?>">
				<input type="submit" name="submit" value="EDIT">
			</td>
		</tr>
	</table></h3>
</form>
</body>
</html>
