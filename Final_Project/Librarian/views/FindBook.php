<?php

/*session_start();*/
if(isset($_COOKIE['flag'])){
require_once('../model/Model.php');
$result = getAllBooks();
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
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Find Books</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 </head>
 <body>
     <h1>SEARCH BOOKS</h1><hr>
 
     <label style="font-size: 20px">Search:</label>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Book Name"><hr>
   <div id="result"></div>

  <table border="1" align="center" width="100%">
    <tr>
      <td>ID</td>
      <td>Book Name</td>
      <td>Author Name</td>
      <td>Category</td>
      <td>Avaiability</td>
      <td>Action</td>

    </tr>

    <?php while($data =mysqli_fetch_assoc($result)){ ?>
  <tr>
      <td><?=$data['bid']?></td>
      <td><?=$data['bname']?></td>
      <td><?=$data['author']?></td>
      <td><?=$data['category']?></td>
      <td><?=$data['status']?></td>
      <td>
        <a href="EditBook.php?bid=<?=$data['bid']?>">Edit</a> |
        <a href="DeleteBook.php?bid=<?=$data['bid']?>">Delete</a>
      </td>
    </tr>
<?php } ?>
  </table> 
 </body>
</html>
<?php
 
 }else{
  header('location: login.html');
 }

?>

