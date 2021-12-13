<?php 
	
	require_once('../model/studentsModel.php');

	
	$id = $_REQUEST['id'];

	$status = deleteStudent($id);

	if($status){
		header('location: ../views/profiles.php');
	}else{
		header('location: ../views/profile-edit.php?id='.$id);
	}
?>