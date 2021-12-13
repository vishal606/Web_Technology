<?php 
	/*session_start();*/
	require_once('../model/Model.php');

	if(isset($_REQUEST['submit'])){
		$bname = $_REQUEST['bname'];
		$author = $_REQUEST['author'];
		$category = $_REQUEST['category'];
		
		
		if($bname != "" && $author != "" && $category != ""){
			
						
					$user = ['bname'=> $bname, 'author'=> $author, 'category'=> $category, 'status'=>'a'];


					$status = insertBook($user);
					if($status){
						header('location: ../views/FindBook.php');		
					}else{
						echo "try again...";
					}

											
		}else{
			echo "Enter data in every sections";
		}
	}
?>