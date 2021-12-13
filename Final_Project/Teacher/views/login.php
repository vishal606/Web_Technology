<?php include('headerL.php');?>

<!DOCTYPE HTML> 
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Teacher Login Page</title>
   <style>
    body {background-color: lightblue;}
        .container{
            border-style: outset; width: 30%;
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

    function returnToPreviousPage()
    {header('location: ../views/login.html');}

    function myValidation(){
      let password = document.getElementById('password').value;
       if(validateUid()!=true){
          alert("Oops! Validation failed!");
          returnToPreviousPage();
          return false;
       } else if(password.length === 0){
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
 
 
<?php
  if(isset($_COOKIE['uid']) and isset($_COOKIE['password'])){
	  $uid = $_COOKIE['uid'];
	  $password = $_COOKIE['password'];
	  echo $uid;
  }
?>
   <center>
    <br>
<div class="container" style="text-align:center">
 
<form action="../controller/validateLogin.php" method="post" >
<br>
<img src="../assets/logo.png" width="140px" height="70px">
   <h2>Teacher Login</h2>

     <h3 class = "info">User ID</h3>
    <input type="text" class = "info" name="uid">
    <h3 class = "info">Password</h3>
    <input type="text" class = "info" name="password">	 <br> <br>

    <input type="submit" value="Login" name="login">	
 	<br><br>
 	  </center>
  
 </form>
</div>
 </body>
</html>