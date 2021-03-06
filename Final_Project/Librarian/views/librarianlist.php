<?php
  /*session_start();*/
  
    require_once('../model/Model.php');
    $result = getAllLibrarians();
    $count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
  
   <a href="../controller/logout.php">Logout</a>
   <hr></hr>
   
   <a class="active" href="home.php">Library Panel </a>  
     <a href="librarianlist.php">All Librarians</a>
    <hr></hr>
      <a href="AddBook.php">Add Book</a>
        
      <a href="FindBook.php">All Books</a>
      <a href="LibraryCardAdd.php">Library Card Add</a>
      <a href="LibraryCardView.php">Library Card View</a>
      <a href="Balance.php">Balance</a>
      <a href="ReturnBook.php">Return Book</a>
      
 </div>
 
</div>
<div class="content">
  <center><a href="home.php"><img src="../assets/mainlogo.png"></a></center>
        <hr></hr>
<body>
	
		<fieldset><center>
			<legend>LIBRARIAN LIST</legend><hr>
			<table width="100%">
				<tr>
                  <th>ID</th>
                  <th>UID</th>
                  <th>NAME</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>Picture</th>
                  <th>Status</th>
                  </tr>
                  <?php while($data =mysqli_fetch_assoc($result)){ ?>

                  <tr>
                  <td><?=$data['id']?></td>
                  <td><?=$data['uid']?></td>
                  <td><?=$data['name']?></td>
                  <td><?=$data['address']?></td>
                  <td><?=$data['email']?></td>
                  <td><?=$data['gender']?></td>
                  <td><?=$data['dob']?></td>
                  <td><?=$data['picture']?></td>
                  <td><?=$data['status']?></td>
                  </tr>

                  <?php } ?>
			</table>
		</fieldset></center>
</body>
</html>
