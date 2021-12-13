<?php
   session_start();
   require_once('../model/Model.php');
	$result = getAllClass();
	$count = mysqli_num_rows($result);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Class Infromation</title>
</head>
<body>
	<br>
	<table border="2" align="center" width="60%">



	<tr align="center">
		<td>ID</td>
		<td>Class</td>
		<td>Subject</td>
		<td>Day</td>
		<td>Time</td>
	</tr>

	<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['class']?></td>
					<td><?=$data['subject']?></td>
					<td><?=$data['day']?></td>
					<td><?=$data['time']?></td>
				</tr>

	<?php } ?>


	</table>
</body>
</html>