<?php 
	session_start();
  require_once('../model/Model.php');
  
  if(isset($_REQUEST['submit'])){
	
	  $title = $_REQUEST['title'];
	  $notice = $_REQUEST['notice'];
	  $date = $_REQUEST['date'];
	  
		if($title != "" && $notice != "" && $date != ""){

			$user = ['title'=>$title, 'notice'=>$notice, 'date'=>$date];

				$status = uploadTeacherNotice($user);

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