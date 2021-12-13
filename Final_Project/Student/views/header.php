<?php
	if(!isset($_COOKIE['flag'])){
		header('location: login.html');
	}
/*  require_once('../model/studentsModel.php');
  $uid = $_REQUEST['uid'];
  $user = getStudentById($uid);*/
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}
body {background-color: lightblue;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.topnav-right {
  float: right;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  /*background-color: red;*/
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>
  <center><a href="home.php"><img src="../assets/mainlogo.png"></a></center>
  <!-- <h2><center>SCHOOL MANAGEMENT SYSTEM - STUDENT</center></h2> --> 
<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">۩ HOME ۩</a>
  
  <!--<a href="https://www.facebook.com/jihadshahariar.joy/">CONTACTↆ▼</a>-->
  
  <div class="dropdown">
    <button class="dropbtn">STUDENT ‣ 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="student-list.php">All STUDENTS</a>
      <a href="subject-info.php">SUBJECT INFORMATION</a>
      <a href="routine.php">ALL CLASS ROUTINES</a>
      <a href="teachers-info.php">TEACHER'S INFORMATION</a>
      <a href="result.php">RESULT / MARK SHEET</a>
      <a href="notice.php">NOTICES</a>
      <a href="library.php">LIBRARY</a>
    </div>  
  </div> 
  <div class="topnav-right">
  <a href="profiles.php"> ☺ PROFILES </a>
  <a href="../controller/logout.php">LOGOUT</a>
  <!-- <a href="profile.php">Welcome : <?=$data['id']?></a> -->
</div>
 </div> 
	

</body>
</html>