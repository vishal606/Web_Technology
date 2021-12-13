<?php
    include('headerL.php');
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Log-in Page </title>
	<style>
		
		body {background-color: lightblue;}
        .container{
        	border:3px solid #2F79F8;
            border-style: outset; width: 30%;
            box-shadow: 1px 1px 5px rgba(66,66,66,.75);
            outline: 5px ridge #1C6EA4;
			outline-offset: 3px;
        }
        .input {
		     padding: 5px;
		     font-size: 13px;
		     border-width: 2px;
		     border-color: #2F79F8;
		     background-color: #FFFFFF;
		     color: #000000;
		     border-style: groove;
		     border-radius: 20px;
		     box-shadow: 0px 0px 5px rgba(66,66,66,.75);
		     
		}
		 .input:focus {
		     outline:none;
		}
        .myButton {
			/*background-color:#2063b0;*/
			background-color:#2778d6;
			border-radius:30px;
			border:3px solid #08298a;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:17px;
			padding:15px 45px;
			text-decoration:none;
			text-shadow:0px 1px 0px #283966;
		}
		.myButton:hover,.myButton:active,.myButton:focus {
			background: #00aa00; /*43A047 00FF00*/
		}
    </style>
    	<script>

		function validateUid(){
			let uid = document.getElementById('uid').value;

			if (uid.length === 0) {
		        document.getElementById('err_uid').innerHTML = "Enter UID...";
		    } else if (uid.length < 4) {
		        document.getElementById('err_uid').innerHTML = "At least 4 digits...";
		    } /*else if (!uid.match(/^[a-zA-Z]/g)) {
		        document.getElementById('err_uid').innerHTML = "Name must start with a letter...";
		    }*/ else if (!uid.match(/^0[1-9]|[1-9]/)) {
		        document.getElementById('err_uid').innerHTML = 'UID must contain only Numbers from 1000-9999...';
		    } else {
		        document.getElementById('err_uid').innerHTML = '';
		        return true;
		    }
		    return false;
		}

		function validatePass(){
			let password = document.getElementById('password').value;

			if (password.length === 0) {
		        document.getElementById('err_password').innerHTML = "Enter Password...";
		    } else {
		        document.getElementById('err_password').innerHTML = '';
		        return true;
		    }
		    return false;
		}

		function returnToPreviousPage()
		{header('location: ../views/login.html');}

		function myValidation(){
		
		   if(validateUid()!=true || validatePass()!=true){
		      alert("Oops! Validation failed!");
		      returnToPreviousPage();
		      return false;
		   } else
			   /*alert("Validations successful!");*/
			   return true;
		}

	</script>

</head>
<body>
	<center>
	<h1><br></h1>
	
	
 <div>
	<form method="post" action="../controller/loginCheck.php" id="uid-form">
		<fieldset class="container">
		<center>
			<img src="../assets/mainLogo.png" width="150px" height="70px">
			<h2>LOG-IN</h2>
			<label style="font-size: 18px">User Id:</label><br>
			<small>
            <span id="err_uid" style="color:red"> </span>
        	</small>
			<br>
			<input type="text" class="input" id="uid" name="uid" value="" maxlength="4" placeholder=" Enter UID 1000 + ‣ " onkeyup="validateUid()">
			<br>
			<br>
			<label style="font-size: 18px">Password:</label><br>
			<small>
			<span id="err_password" style="color:red">  </span>
        	</small>
			<br>
			<input type="password" class="input" id="password" name="password" value="" placeholder=" Enter Password " onkeyup="validatePass()">
			<br>
			<br>
			<br>
			<input type="submit" class="myButton" name="submit" value="LOGIN" onclick="myValidation()">
		</center>
		</fieldset>
	</form>
	 </div>
</body>
</center>
</html>
