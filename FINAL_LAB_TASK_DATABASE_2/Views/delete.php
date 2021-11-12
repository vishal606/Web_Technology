<?php 
	require_once('../model/productsModel.php');
	$id = $_REQUEST['id'];
	$user = getProductById($id);
	//print_r($user);
?>

<html>
<head>
	<title> Delete User</title>
</head>
<body>
	<form method="post" action="../controller/deleteProductCheck.php">
		<fieldset>
			<legend>DELETE PRODUCT</legend>
			<table>
				<tr>
					<td>Name: </td>
					<td><?=$user['name']?></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><?=$user['buyingPrice']?></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><?=$user['sellingPrice']?></td>
				</tr>
				<tr>
					<td>Displayable:</td>
					<td>yes(returns to display pageand view list)</td>
				</tr>
				<tr>
					<td>Are You Sure! <br> Delete?</td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$id?>"> </td>
					<td><input type="submit" name="submit" value="Delete"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>