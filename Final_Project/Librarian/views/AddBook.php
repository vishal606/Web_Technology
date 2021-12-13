<?php
  /*session_start();*/
  if(isset($_COOKIE['flag'])){
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
  <form method="post" action="../controller/addBookCheck.php" name="addbook" enctype="multipart/form-data" onsubmit="ValidateAddBookForm()">
    <fieldset>
      <legend><b>Add Book</b></legend>
      <!-- <label>Book Id: </label>
      <input type="text" name="bid" value="" readonly><hr> -->
      <label>Book Name: </label>
      <input type="text" name="bname" id="bname" onkeyup="CheckName()" onblur="CheckName()">
      <span class="error" id="bnameErr"></span><hr>
      <label>Author Name: </label>
      <input type="text" name="author" id="author" onkeyup="CheckAuthor()" onblur="CheckAuthor()">
      <span class="error" id="authorErr"></span><hr>
      <label>Category: </label>
      <select name = "category" id="category">
        <option ></option>  
        <option value="History">History</option>
        <option value="Science">Science</option>  
        <option value="Technology">Technology</option>
        <option value="Religious">Religious</option>    
        <option value="Literature">Literature</option>  
        <option value="Fantasy">Fantasy</option>
        <option value="Biography">Biography</option>  
        <option value="Poetry Book">Poetry Book</option>
        <option value="Novel">Novel</option>
      </select>
      <span class="error"></span><hr>
      </fieldset><hr><br><br>
      <input type="submit" name="submit" value="Submit">
      <input type="reset" name="reset" value="Reset">
    </fieldset><br><br>

    
  </form>
 </body>
 </html>
 <?php
 
 }else{
  header('location: login.html');
 }

?>