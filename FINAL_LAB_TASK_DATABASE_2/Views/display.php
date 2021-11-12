<?php
	require_once('../model/productsModel.php');
	
	$result = getAllProducts();
	$count = mysqli_num_rows($result);
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product list</title>
</head>
<body>
	
	<fieldset>
			<legend>DISPLAY</legend>
	<br>
	<center>
	<a href="AddProduct.php">Add Product</a> |
	<a href="searchProduct.php">Search Product</a>
	</center>
	<table border="1" align="center">
		<tr>
			<th>NAME</th>
			<th>PROFIT</th>
			<th colspan="2">ACTION</th>

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['name']?></td>
					<td><?=$data['profit']?></td>
					<td>
						<a href="edit.php?id=<?=$data['id']?>">edit</a>
					</td>
					<td>
						<a href="delete.php?id=<?=$data['id']?>">delete</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</fieldset>
</body>
</html>