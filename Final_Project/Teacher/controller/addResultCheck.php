<?php 
	session_start();
  require_once('../model/Model.php');
  
  if(isset($_REQUEST['submit'])){
  	  $uid = $_REQUEST['uid'];
	  $class = $_REQUEST['class'];
	  $subject = $_REQUEST['subject'];
	  $mid = $_REQUEST['mid'];
	  $final = $_REQUEST['final'];
	  $total = $_REQUEST['total'];
	  $tid = $_REQUEST['tid'];

	  
		if($uid != "" && $subject != "" && $class != "" && $tid != ""){

			$user = ['uid'=>$uid, 'class'=>$class, 'subject'=>$subject, 'mid'=>$mid, 'final'=>$final, 'total'=>$total, 'tid'=>$tid];

				$status = uploadResult($user);

				if($status){
					header('location: ../views/results.php');
						
					}else{
						echo "try again...";
					}

			
		}else{
			echo "Insert values in all sections...";
		}

  	}
  
?>