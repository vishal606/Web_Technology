<?php 
	require_once('db.php');

	function getAllSubjects(){
		$con = getConnection();
		$sql = "select * from allsubjects";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getSubjectById($id){
		$con = getConnection();
		$sql = "select * from allsubjects where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAll6Subjects(){
		$con = getConnection();
		$sql = "select * from allsubjects where class='6'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAll7Subjects(){
		$con = getConnection();
		$sql = "select * from allsubjects where class='7'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAll8Subjects(){
		$con = getConnection();
		$sql = "select * from allsubjects where class='8'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAll9Subjects(){
		$con = getConnection();
		$sql = "select * from allsubjects where class='9'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAll10Subjects(){
		$con = getConnection();
		$sql = "select * from allsubjects where class='10'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

?>