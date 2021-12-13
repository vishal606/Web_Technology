<?php 
	require_once('../model/Model.php');

	
		$class = $_REQUEST['class'];
		$subject = $_REQUEST['subject'];
		$day = $_REQUEST['day'];
		$time = $_REQUEST['time'];



		$id = $_REQUEST['id'];
		
						
			$user = ['id'=> $id, 'class'=> $class, 'subject'=> $subject, 'day'=> $day, 'time'=>$time];

				
				$status = editSubject($user);

					if($status){
						header('location: ../views/class-info.php?id='.$id);
					}else{
						header('location: ../views/edit_Subject.php?id='.$id);
					}

?>