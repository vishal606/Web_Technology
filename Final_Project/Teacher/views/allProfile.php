<?php
   session_start();
   require_once('../model/Model.php');
	$result = getValidTeachers();
	$count = mysqli_num_rows($result);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Profiles</title>

</head>
<body>
		<br>
	<table border="2" align="center" width="70%">
	<tr>
		<th>UID</th>
		<th>NAME</th>
		<th>Action</th>
	</tr>

	<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr align="center">
					<td><?=$data['uid']?></td>
					<td><?=$data['name']?></td>
					<td>
						<a href="profile.php?id=<?=$data['id']?>">View</a> |
						<a href="editProfile.php?id=<?=$data['id']?>">Edit</a>
					</td>
				</tr>

		<?php } ?>
	</table>
</body>
</html>