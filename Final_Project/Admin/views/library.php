<?php
   session_start();
   require_once('../model/Model.php');
	$result = getAllBooks();
	$count = mysqli_num_rows($result);
?>
<?php include('header.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>LIBRARY</title>
</head>
<body>
	<br>
	<fieldset>
<legend class="text"><b>Library Books List</b></legend><br>
  <center><table><div id="errorBox"></div></table></center>

	<table border="2" align="center" width="70%">


		<tr height="50px" align="center">
			<td>Book ID</td>
			<td>Book Name</td>
			<td>Author Name</td>
			<td>Category</td>
		</tr>

		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['bid']?></td>
					<td><?=$data['bname']?></td>
					<td><?=$data['author']?></td>
					<td><?=$data['category']?></td>
				</tr>

		<?php } ?>


	</table>

</body>
</html>