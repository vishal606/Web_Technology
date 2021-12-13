<?php
  session_start();
  if(isset($_COOKIE['flag'])){
  	include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>HOMEPAGE</title>
</head>
<body>

 
 
<div style="padding-left:16px">
  <h2>WELLCOME TO OUR SCHOOL</h2>
  <p>The pain itself may be a lot of pain, but the main reason is the pain, but I give it time to fall into it like some great pain and pain. In order for the least to come, what of ours to exercise any school of labor except to take advantage of the objectives from it to achieve. But the pain in the film is irure to condemn, in pleasure it wants to escape from the pain of being cillus with no result. Those who crave blacks do not see it, they are at fault for those who abandon their services, that is the hardships that soothes the soul.</p>
</div>
<center>
<div>
  <img src="../assets/aiub.jpg" width="100%">
</div>
</center>
</body>
</html>
<?php
 
 }else{
  header('location: login.html');
 }
?>