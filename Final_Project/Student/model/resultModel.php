<?php 
	require_once('db.php');

	function getAllResults(){
		$con = getConnection();
		$sql = "select * from result";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getResultById($uid){
		$con = getConnection();
		$sql = "select * from result where uid={$uid}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

?>