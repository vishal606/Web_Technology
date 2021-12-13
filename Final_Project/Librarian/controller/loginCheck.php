<?php
	require_once('../model/Model.php');
	session_start();

if(isset($_REQUEST['submit'])){
	$uid = $_REQUEST['uid'];
	$password = $_REQUEST['password'];	

		if($uid != ""){
		if($password != ""){


			$status = validate($uid, $password);
			


			if($status){
				setcookie('flag', 'true', time()+3600, '/');
				header('location: ../views/home.php');
			}else{
				header('location: ../views/login.html');
			}



	}else{
		echo "invalid password...";
	}
	}else{
		echo "invalid username...";
	}
}



?>