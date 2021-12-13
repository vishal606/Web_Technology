<?php 
	require_once('../model/Model.php');

		$name = $_REQUEST['name'];
		$dob = $_REQUEST['dob'];
		$class = $_REQUEST['class'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$picture = $_REQUEST['picture'];
		$status = $_REQUEST['status'];



		$id = $_REQUEST['id'];
		
						
			$user = ['id'=>$id, 'name'=> $name, 'dob'=>$dob, 'class'=>$class, 'address'=>$address, 'email'=>$email, 'picture'=>$picture, 'status'=>$status];

				
				$status = editProfile($user);

					if($status){
						header('location: ../views/student-info.php?id='.$id);
					}else{
						header('location: ../views/sprofileEdit.php?id='.$id);
					}

?>