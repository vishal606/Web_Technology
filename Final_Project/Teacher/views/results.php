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
	<meta charset="utf-8">
	<title>All Results</title>

</head>
<body>
	
	<br>
	<table border="2" align="center" width="70%">
	<tr>
		<th>UID</th>
		<th>CLASS</th>
		<th>SUBJECT</th>
		<th>MID</th>
		<th>FINAL</th>
		<th>TOTAL</th>
		<th>TID</th>
		<th>Action</th>
	</tr>

	<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr align="center">
					<td><?=$data['uid']?></td>
					<td><?=$data['class']?></td>
					<td><?=$data['subject']?></td>
					<td><?=$data['mid']?></td>
					<td><?=$data['final']?></td>
					<td><?=$data['total']?></td>
					<td><?=$data['tid']?></td>
					<td>
						<a href="editResult.php?id=<?=$data['id']?>">Edit</a>
					</td>
				</tr>

		<?php } ?>
	</table>
</body>
</html>