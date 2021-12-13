<?php 
	session_start();
	require_once('../model/Model.php');

	if(isset($_REQUEST['submit'])){
		$uid = $_REQUEST['uid'];
		$password = $_REQUEST['password'];
		$name = $_REQUEST['name'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$picture = $_REQUEST['picture'];
		
		


		if($uid != "" && $password != "" && $name != "" && $address != "" && $email != "" && $gender != "" && $dob != "" && $picture != ""){
			
						
					$user = ['uid'=> $uid, 'password'=> $password, 'name'=> $name, 'dob'=>$dob, 'gender'=>$gender, 'address'=>$address, 'email'=>$email, 'picture'=>$picture, 'type'=>'t', 'status'=>'p'];


					$status = insertTeacher($user);
					if($status){
						header('location: ../views/login.php');		
					}else{
						echo "try again...";
					}

											
		}else{
			echo "Enter data in every sections";
		}
	}
?>