<?php 
	
	require_once('../model/Model.php');

		
		
		$bname = $_REQUEST['bname'];
		$author = $_REQUEST['author'];
		$category = $_REQUEST['category'];
		$status = $_REQUEST['status'];
		
		
		
		$bid = $_REQUEST['bid'];
		
						
			$user = ['bid'=>$bid,  'bname'=> $bname, 'author'=>$author, 'category'=>$category, 'status'=> $status];

				
				
				$status = editBook($user);

					if($status){
						header('location: ../views/FindBook.php?bid='.$bid);
						
					}else{
						header('location: ../views/EditBook.php?bid='.$bid);
					}
				

?>