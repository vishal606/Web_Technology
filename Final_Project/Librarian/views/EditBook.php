<?php
  /*session_start();*/
  if(isset($_COOKIE['flag'])){
    require_once('../model/Model.php');
$bid = $_REQUEST['bid'];
$user = getBookById($bid);
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



 </head>
 <body>
  <form method="post" action="../controller/editbookcheck.php" enctype="multipart/form-data" name="editbook" onsubmit="ValidateEditBookForm()">
    <fieldset>
      <legend><b>Edit Book</b></legend>
      <label>Book Id:  Non changable. </label>
      <p><?=$user['bid']?>  </p>  
      <label>Book Name: </label>
      <input type="text" name="bname" value="<?=$user['bname']?>" id="bname" onkeyup="CheckName()" onblur="CheckName()">
      <span class="error" id="bnameErr"></span><hr>
      <label>Author Name: </label>
      <input type="text" name="author" value="<?=$user['author']?>" id="author" onkeyup="CheckAuthor()" onblur="CheckAuthor()">
      <span class="error" id="authorErr"></span><hr>
       <label>Status: </label>
      <input type="text" name="status" value="<?=$user['status']?>" id="status" onkeyup="CheckStatus()" onblur="CheckStatus()">
      a/p only.
      <span class="error" id="statusErr"></span><hr>
      <label>Category:  Non changable. </label>
      <p><?=$user['category']?>  </p>   
      <span class="error"></span><hr>
      </fieldset><hr><br><br>
       <input type="hidden" name="bid" value="<?=$bid?>">
      <input type="submit" name="submit" value="Submit">
    </fieldset><br><br>

   
  </form>
 </body>
 </html>
 <?php
 
 }else{
  header('location: login.html');
 }

?>