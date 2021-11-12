<?php 
	require_once('../model/productsModel.php');
	$id = $_REQUEST['id'];
	$user = getProductById($id);
?>

<html>
<head>
	<title> Edit Product</title>
</head>
<body>
	<form method="post" action="../controller/editProductCheck.php">
		<fieldset>
			<legend>EDIT PRODUCt</legend>
			<table>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" value="<?=$user['name']?>"></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="text" name="buyingPrice" value="<?=$user['buyingPrice']?>"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="sellingPrice" value="<?=$user['sellingPrice']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$id?>"> </td>
					<td><input type="submit" name="submit" value="Edit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>