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
						header('location: ../views/teachers-list.php?id='.$id);
					}else{
						header('location: ../views/tprofileEdit.php?id='.$id);
					}

?>