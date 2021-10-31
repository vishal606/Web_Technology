<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Times, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
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

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
#borderimg {
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(border.png) 30 round;
}
</style>
<head> <center><a href="home.html"><img src="assets/eschool.png"></a> </center></head>
<body>

<div class="navbar">
  <a href="home.php">Home</a>
  <a href="https://www.aiub.edu/about">About</a>
   <a href="contact.php">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Addministration
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="student_info.php">Student Info</a>
      <a href="teachers-info.php">Teacher Info</a>
      <a href="add_sub.php">Add New Subject</a>
      <a href="Assign_teacher.php">Assign Teacher to Subject</a>
      <a href="notice.php">Upload Notice</a>
      <a href="teacher.php">Add New Teacher</a>
      <a href="add_student.php">Add New Student</a>
      <a href="result.php">Student Result</a>
      <a href="teacher_attendence.php">Teacher Attendence</a>
    </div>
</div>
 <a href="logout.php">Logout Admin</a>
  </div>
  </div>
  </div> 
</div>




</body>
</html>