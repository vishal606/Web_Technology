<?php 
	require_once('db.php');

	function validate($uid, $password){

		$con = getConnection();
		$sql = "select * from users where uid='{$uid}' and password='{$password}' and type='s' and status='a'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}

	function validate1($uid, $password){

		$con = getConnection();
		$sql = "select * from users where uid='{$uid}' and password='{$password}' and type='t' and status='a'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}

	function validate2($uid, $password){

		$con = getConnection();
		$sql = "select * from users where uid='{$uid}' and password='{$password}' and type='l' and status='a'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}

	function validate3($uid, $password){

		$con = getConnection();
		$sql = "select * from users where uid='{$uid}' and password='{$password}' and type='a' and status='a'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}



?>