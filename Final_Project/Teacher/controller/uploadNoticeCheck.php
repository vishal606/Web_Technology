<?php 
	session_start();
  require_once('../model/Model.php');
  
  if(isset($_REQUEST['submit'])){
	  $class = $_REQUEST['class'];
	  $subject = $_REQUEST['subject'];
	  $title = $_REQUEST['title'];
	  $notice = $_REQUEST['notice'];
	  $date = $_REQUEST['date'];
	  
		if($subject != "" && $title != "" && $notice != "" && $date != ""){

			$user = ['class'=>$class, 'subject'=>$subject, 'title'=>$title, 'notice'=>$notice, 'date'=>$date];

				$status = uploadStudentNotice($user);

				if($status){
					header('location: ../views/home.php');
						
					}else{
						echo "try again...";
					}

			
		}else{
			echo "Insert values in all sections";
		}

  	}
  
?>