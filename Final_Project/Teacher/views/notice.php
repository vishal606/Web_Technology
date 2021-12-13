<?php
   session_start();
   require_once('../model/Model.php');
	$result = getTeacherNotice();
	$count = mysqli_num_rows($result);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>NOTICE OF TEACHERS</title>
</head>
<body>
	<br>
	<center>

	<h3>NOTICE</h3><br>



		<table border="2" align="center" width="60%">
			<tr align="center">
				<td width="30%"><h2>TITLE</h2></td>
				<td><h2>DETAILS</h2></td>
				<td width="30%"><h2>DATE</h2></td>
			</tr>
			<?php while($data =mysqli_fetch_assoc($result)){ ?>
			<tr align="center">
				<td><h3><?=$data['title']?></h3></td>
				<td><?=$data['notice']?></td>
				<td><?=$data['date']?></td>
			</tr>
			<?php } ?>



		</table>
	</center>
</body>
</html>