<?php 
	require_once('../model/loginModel.php');
	session_start();

	if(isset($_REQUEST['submit'])){
		$uid = $_REQUEST['uid'];
		$password = $_REQUEST['password'];
	
		if($uid != ""){
			if($password != ""){

				$status = validate($uid, $password);
				$status1 = validate1($uid, $password);
				$status2 = validate2($uid, $password);
				$status3 = validate3($uid, $password);

				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../views/home.php');
				}
				else if($status1){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../../Teacher/views/home.php');
				}
				else if($status2){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../../Librarian/views/home.php');
				}
				else if($status3){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../../Admin/views/home.php');
				}
				else{
					header('location: ../views/login.php');
				}

			}else{
				/*echo "invalid password...";*/
				header('location: ../views/login.php');
			}
		}else{
			/*echo "invalid username...";*/
			header('location: ../views/login.php');
		}
	}

?>