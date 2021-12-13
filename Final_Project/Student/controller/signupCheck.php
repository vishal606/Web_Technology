<?php 
	session_start();
	require_once('../model/studentsModel.php');

	if(isset($_REQUEST['submit'])){
		$uid = $_REQUEST['uid'];
		$password = $_REQUEST['password'];
		$name = $_REQUEST['name'];
		$dob = $_REQUEST['dob'];
		$gender = $_REQUEST['gender'];
		$bloodgrp = $_REQUEST['bloodgrp'];
		$class = $_REQUEST['class'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$type = $_REQUEST['type'];
		/*$picture = $_REQUEST['picture'];*/
		$picture = $_FILES['picture']['name'];
		$tmp_name = $_FILES['picture']['tmp_name'];


		if($uid != ""){
			if($password != ""){
				if($name != ""){
					if($dob != ""){
						if($gender != ""){
							
									if($address != ""){
										if($email != ""){
											if($type != ""){
											if($picture != ""){
						
					$user = ['uid'=> $uid, 'password'=> $password, 'name'=> $name, 'dob'=>$dob, 'gender'=>$gender, 'bloodgrp'=>$bloodgrp, 'class'=>$class, 'address'=>$address, 'email'=>$email, 'picture'=>$picture, 'type'=>$type, 'status'=>'p'];
					$status = insertStudent($user);
					if($status){
						header('location: ../views/login.php');
						move_uploaded_file($tmp_name,"../assets/$picture");				
					}else{
						echo "The UID may have been taken.";
						echo "Try again...";
					}


												}else{
												/*echo "invalid Picture...";*/
												header('location: ../views/signup.php');
												}
											}else{
											/*echo "invalid Type...";*/
											header('location: ../views/signup.php');
											}
										}else{
										/*echo "invalid Email...";*/
										header('location: ../views/signup.php');
										}
									}else{
									/*echo "invalid Address...";*/
									header('location: ../views/signup.php');
									}
								
						}else{
							/*echo "invalid gender...";*/
							header('location: ../views/signup.php');
						}
					}else{
						/*echo "invalid Date of Birth...";*/
						header('location: ../views/signup.php');
					}
				}else{
					/*echo "invalid Name...";*/
					header('location: ../views/signup.php');
				}
			}else{
				/*echo "invalid Password...";*/
				header('location: ../views/signup.php');
			}
		}else{
			/*echo "invalid UID...";*/
			header('location: ../views/signup.php');
		}
	}
?>