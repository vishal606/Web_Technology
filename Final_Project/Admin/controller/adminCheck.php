<?php 
	require_once('../model/Model.php');

		$name = $_REQUEST['name'];
		$dob = $_REQUEST['dob'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$picture = $_REQUEST['picture'];
		$status = $_REQUEST['status'];



		$id = $_REQUEST['id'];
		
						
			$user = ['id'=>$id, 'name'=> $name, 'dob'=>$dob, 'address'=>$address, 'email'=>$email, 'picture'=>$picture, 'status'=>$status];

				
				$status = editProfile($user);

					if($status){
						header('location: ../views/profile.php?id='.$id);
					}else{
						header('location: ../views/editProfile.php?id='.$id);
					}

?>