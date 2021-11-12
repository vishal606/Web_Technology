<?php
	require_once('../model/productsModel.php');

	if(isset($_POST['save'])){

		$name = $_POST['name'];
		$buyingPrice = $_POST['buyingPrice'];
		$sellingPrice = $_POST['sellingPrice'];

		if($name != ""){
			if($buyingPrice != ""){
				if($sellingPrice !=""){

					$user = ['name'=> $name, 'buyingPrice'=>$buyingPrice, 'sellingPrice'=>$sellingPrice, 'profit'=>''.$sellingPrice-$buyingPrice];
					$status = addProduct($user);

					if($status){
						header('location: ../views/display.php');
					}else{
						echo "try again...";
					}

				}else{
					echo "invalid sellingPrice....";
				}
			}else{
				echo "invalid buyingPrice....";
			}
		}else{
			echo "invalid name....";
		}
	}
?>