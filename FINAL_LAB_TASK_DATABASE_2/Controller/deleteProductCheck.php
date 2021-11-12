<?php 
	
	require_once('../model/productsModel.php');

	$name = $_REQUEST['name'];
	$buyingPrice = $_REQUEST['buyingPrice'];
	$sellingPrice = $_REQUEST['sellingPrice'];
	$id = $_REQUEST['id'];

	$status = deleteProduct($id);

	if($status){
		header('location: ../views/display.php');
	}else{
		header('location: ../views/delete.php?id='.$id);
	}
?>