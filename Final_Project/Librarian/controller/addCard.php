<?php 
	/*session_start();*/
	require_once('../model/Model.php');

	if(isset($_REQUEST['submit'])){
		$uid = $_REQUEST['uid'];
		$name = $_REQUEST['name'];
		$balance = $_REQUEST['balance'];
		
		
		if($uid != "" && $name != "" && $balance != ""){
			
						
					$user = ['uid'=> $uid, 'name'=> $name, 'balance'=> $balance];


					$status = addCard($user);
					if($status){
						header('location: ../views/LibraryCardView.php');		
					}else{
						echo "try again...";
					}

											
		}else{
			echo "Enter data in every sections";
		}
	}
?>