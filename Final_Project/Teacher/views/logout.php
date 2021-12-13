<?php
  session_start();
  session_destroy();
?>
<?php include('headerL.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Log Out Message</title>
</head>
<body>
	<center>
	<h1>Congratulations, You Are Successfully Logged Out!!!</h1><br>
	<h2>Click here to <a href='../../Student/views/login.html'>LOG-IN</a></h2>
	</center>
</body>
</html>