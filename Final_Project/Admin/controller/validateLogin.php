<?php 
  require_once('../model/Model.php');
	session_start();
  
  if(isset($_REQUEST['login'])){
	  $uid = $_REQUEST['uid'];
	  $password = $_REQUEST['password'];
	  
		if($uid != "" && $password != ""){

				$status = validate($uid, $password);

				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../views/home.php');
				}else{
					header('location: ../views/login.php');
				}

			
		}else{
			echo "Invalid Username or Password.<br> Click here to <a href='../views/login.php'>try again</a>";
		}

	  
  	} else{
	  header("location: ../views/login.php");
    }
  
?>