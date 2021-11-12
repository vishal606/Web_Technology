<?php 
	
	require_once('../model/productsModel.php');

	$name = $_REQUEST['name'];
	$buyingPrice = $_REQUEST['buyingPrice'];
	$sellingPrice = $_REQUEST['sellingPrice'];
	$id = $_REQUEST['id'];
	$user = ['id'=>$id, 'name'=>$name, 'buyingPrice'=>$buyingPrice, 'sellingPrice'=> $sellingPrice];

	$status = editProduct($user);

	if($status){
		header('location: ../views/display.php');
	}else{
		header('location: ../views/edit.php?id='.$id);
	}
?>