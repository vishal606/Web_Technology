<?php
   session_start();
   require_once('../model/Model.php');
	$result = getAllSubjects();
	$count = mysqli_num_rows($result);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Class Infromation</title>
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
	<fieldset>

<legend class="text"><b>CLASS INFORMATION </b></legend><br>
  <center><table><div id="errorBox"></div></table></center>

	<table border="2" align="center" width="60%">



	<tr align="center">
		<td>ID</td>
		<td>Class</td>
		<td>Subject</td>
		<td>Day</td>
		<td>Time</td>
		<td>Action</td>
	</tr>

	<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['class']?></td>
					<td><?=$data['subject']?></td>
					<td><?=$data['day']?></td>
					<td><?=$data['time']?></td>
					<td>
					<a href="edit_subject.php?id=<?=$data['id']?>"class="myButton">Edit</a>					
					<a href="delete_subject.php?id=<?=$data['id']?>"class="myButton">Delete</a>
				</td>
				</tr>

	<?php } ?>


	</table>
</body>
</html>