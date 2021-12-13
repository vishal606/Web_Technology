<?php 
	require_once('../model/Model.php');

		$mid = $_REQUEST['mid'];
		$final = $_REQUEST['final'];
		$total = $_REQUEST['total'];


		$id = $_REQUEST['id'];
		
						
			$user = ['id'=>$id, 'mid'=> $mid, 'final'=>$final, 'total'=>$total];

				
				$status = editResult($user);

					if($status){
						header('location: ../views/results.php');
					}else{
						header('location: ../views/editResult.php?id='.$id);
					}

?>