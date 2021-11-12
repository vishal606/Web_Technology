<?php

	require_once('db.php');


	function addProduct($user){
		$con = getConnection();
		$sql = "insert into products values('', '{$user['name']}', '{$user['buyingPrice']}', '{$user['sellingPrice']}' , '{$user['profit']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllProducts(){
		$con = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getproductById($id){
		$con = getConnection();
		$sql = "select * from products where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}

	function editProduct($user){
		$con = getConnection();
		$sql = "update products set name='{$user['name']}', buyingPrice='{$user['buyingPrice']}', sellingPrice='{$user['sellingPrice']}' where id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($id){
		$con = getConnection();
		$sql = "delete from products where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>