<?php 
	/*session_start();*/
	require_once('../model/studentsModel.php');

		/*$uid = $_REQUEST['uid'];
		$password = $_REQUEST['password'];*/
		$name = $_REQUEST['name'];
		$dob = $_REQUEST['dob'];
		/*$gender = $_REQUEST['gender'];
		$bloodgrp = $_REQUEST['bloodgrp'];*/
		$class = $_REQUEST['class'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		/*$picture = $_REQUEST['picture'];*/
		$picture = $_FILES['picture']['name'];
		$tmp_name = $_FILES['picture']['tmp_name'];

		/*$password = $_REQUEST['password'];*/
		$id = $_REQUEST['id'];
		
		
				if($name != ""){
					if($dob != ""){
						/*if($gender != ""){*/
							/*if($bloodgrp != ""){*/
								if($class != ""){
									if($address != ""){
										if($email != ""){
											if($picture != ""){
						
			$user = ['id'=>$id, /*'uid'=> $uid, 'password'=> $password,*/ 'name'=> $name, 'dob'=>$dob, /*'gender'=>$gender, 'bloodgrp'=>$bloodgrp,*/ 'class'=>$class, 'address'=>$address, 'email'=>$email, 'picture'=>$picture/*, 'type'=>'s',  'status'=>'p'*/];

				/*$validateEdit = validateEdit($password);
				if ($validateEdit) {*/
				
				$status = editStudent($user)/* && validateEdit($password)*/;

					if($status){
						header('location: ../views/profile.php?id='.$id);
						move_uploaded_file($tmp_name,"../assets/$picture");
					}else{
						header('location: ../views/profile-edit.php?id='.$id);
					}
				/*}
				else{
					header('location: ../views/profile-edit.php?id='.$id);
				}*/

				}else{
											/*echo "invalid Picture...";*/
											header('location: ../views/profile-edit.php?id='.$id);
											}
										}else{
										/*echo "invalid Email...";*/
										header('location: ../views/profile-edit.php?id='.$id);
										}
									}else{
									/*echo "invalid Address...";*/
									header('location: ../views/profile-edit.php?id='.$id);
									}
								}else{
									/*echo "invalid class...";*/
									header('location: ../views/profile-edit.php?id='.$id);
								}
							/*}else{
								echo "invalid Blood Group...";
								header('location: ../views/signup.php');
							}*/
						/*}else{
							echo "invalid gender...";
							header('location: ../views/signup.php');
						}*/
					}else{
						/*echo "invalid Date of Birth...";*/
						header('location: ../views/profile-edit.php?id='.$id);
					}
				}else{
					/*echo "invalid Name...";*/
					header('location: ../views/profile-edit.php?id='.$id);
				}

?>