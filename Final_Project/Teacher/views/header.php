<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">

<head>
  <center><a href="home.php"><img src="../assets/eschool.png"></a> </center></head>
    <style>
.navbar-right {
  float: right;
}
body {background-color: lightblue;}
   </style>
</head>

<div class="navbar">
  <a href="home.php">Home</a>
<div class="dropdown">
    <button class="dropbtn">Teacher Panel
      <i class="fa fa-caret-down"></i>
    </button>
     <div class="dropdown-content">
     
  <a href="teachers-list.php">Teacher's List</a>
  <a href="student-info.php">Student's List</a>
  <a href="class-info.php">Class Information & Time</a>
  <a href="notice.php">Notice</a>
  <a href="uploadNotice.php">Upload Student Notice</a>
  <a href="addResult.php">Add Result</a>
  <a href="results.php">All Results</a>
  <a href="library.php">Library</a>
    </div>
</div>
<div class="navbar-right">
<div class="dropdown">
    <button class="dropbtn">Account
      <i class="fa fa-caret-down"></i>
    </button>
     <div class="dropdown-content">
                  

   <a href="allProfile.php" class="one">View Profile</a></li>
       
  </div>
</div>
 <a href="../../Student/controller/logout.php"class="one">Logout</a>
</div>
</div>

</body>
</html>
