<?php 
	session_start();
	require_once('../model/Model.php');

	if(isset($_REQUEST['submit'])){
		$uid = $_REQUEST['uid'];
		$password = $_REQUEST['password'];
		$name = $_REQUEST['name'];
		$dob = $_REQUEST['dob'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$picture = $_REQUEST['picture'];
		
		


		if($uid != "" && $password != "" && $name != "" && $dob != "" && $gender != "" && $address != "" && $email != ""  && $picture != ""){
			
						
					$user = ['uid'=> $uid, 'password'=> $password, 'name'=> $name, 'dob'=>$dob, 'gender'=>$gender, 'address'=>$address, 'email'=>$email, 'picture'=>$picture, 'type'=>'l', 'status'=>'p'];


					$status = insertLibrarian($user);
					if($status){
						header('location: ../views/login.html');		
					}else{
						echo "try again...";
					}

											
		}else{
			echo "Enter data in every sections";
		}
	}
?>