<?php
	if(isset($_POST['submit'])){
	$name = $_POST['name'];
		if($name == ""){	
		echo "null submission...";
		}else{	
			echo $name;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Name</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
		<legend>Name</legend>
		<input type="text" name="name" value=""> <br>
		<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>