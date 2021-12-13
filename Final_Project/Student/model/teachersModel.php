<?php 
	require_once('db.php');

	function getAllTeachers(){
		$con = getConnection();
		$sql = "select * from users where type='t' and status='a'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getTeachertById($id){
		$con = getConnction();
		$sql = "select * from users where type='t' and id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

?>