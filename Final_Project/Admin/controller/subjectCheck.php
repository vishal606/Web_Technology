<?php 
	/*session_start();*/
	require_once('../model/Model.php');

	if(isset($_REQUEST['submit']))
	{
		$class = $_REQUEST['class'];
		$subject = $_REQUEST['subject'];
		$day = $_REQUEST['day'];
		$time = $_REQUEST['time'];



		
		
		if($class != "" && $subject != "" && $day != "" && $time != ""){
			
						
					$user = ['class'=> $class, 'subject'=> $subject, 'day'=> $day, 'time'=>$time];


					$status = addSubject($user);
					if($status){
						header('location: ../views/subject-info.php');		
					}else{
						echo "try again...";
					}

											
		}else{
			echo "Enter data in every sections";
		}
	}
?>