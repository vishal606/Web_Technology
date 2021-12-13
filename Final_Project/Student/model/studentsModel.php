<?php 
	require_once('db.php');
  
	function insertStudent($user){
		$con = getConnection();
		$sql = "insert into users values ('', '{$user['uid']}', '{$user['password']}', '{$user['name']}', '{$user['dob']}', '{$user['gender']}', '{$user['bloodgrp']}', '{$user['class']}', '{$user['address']}', '{$user['email']}', '{$user['picture']}', '{$user['type']}', '{$user['status']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAllStudents(){
		$con = getConnection();
		$sql = "select * from users where type='s'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAllValidStudents(){
		$con = getConnection();
		$sql = "select * from users where type='s' and status='a'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getStudentById($id){
		$con = getConnection();
		$sql = "select * from users where type='s' and id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editStudent($user){
		$con = getConnection();
		$sql = "update users set name='{$user['name']}', dob='{$user['dob']}', class='{$user['class']}', address='{$user['address']}', email='{$user['email']}', picture='{$user['picture']}' where type='s' and id={$user['id']}";
		/* 
		gender='{$user['gender']}',
		class='{$user['class']}',  

		password='{$user['password']}',*/
		//echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	

/*	function validateEdit($password){

		$con = getConnection();
		$sql = "select * from student where password='{$password}' and id={$user['id']} and status='a'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}*/


	function deleteStudent($id){
		$con = getConnection();
		$sql = "delete from users where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


?>