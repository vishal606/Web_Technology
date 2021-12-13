<?php 
	require_once('db.php');

	function getAllNotices(){
		$con = getConnection();
		$sql = "select * from studentnotice";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getClass6Notice(){
		$con = getConnection();
		$sql = "select * from studentnotice where class='6'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getClass7Notice(){
		$con = getConnection();
		$sql = "select * from studentnotice where class='7'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getClass8Notice(){
		$con = getConnection();
		$sql = "select * from studentnotice where class='8'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getClass9Notice(){
		$con = getConnection();
		$sql = "select * from studentnotice where class='9'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getClass10Notice(){
		$con = getConnection();
		$sql = "select * from studentnotice where class='6'";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function getNoticeById($id){
		$con = getConnection();
		$sql = "select * from studentnotice where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}
	
	function getAllDashboard(){
$con = getConnection();
$sql = "select * from dashboard";
$result = mysqli_query($con, $sql);
return $result;
}

?>