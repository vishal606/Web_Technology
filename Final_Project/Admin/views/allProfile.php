<?php
   session_start();
   require_once('../model/Model.php');
	$result = getAdmin();
	$count = mysqli_num_rows($result);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Profiles</title>

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
						<a href="profile.php?id=<?=$data['id']?>" class="myButton">View</a>
						<a href="editProfile.php?id=<?=$data['id']?>" class="myButton">Edit</a>
					</td>
				</tr>

		<?php } ?>
	</table>
</body>
</html>