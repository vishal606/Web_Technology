<?php 
	require_once('db.php');

	function getAllBooks(){
		$con = getConnection();
		$sql = "select * from book where status='a'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getBookById($id){
		$con = getConnection();
		$sql = "select * from book where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function searchBook($search){
		$con = getConnection();
		$sql = "search book where bname like '%{$search}%'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false; 
		}
	}

?>