<?php

require_once('../model/Model.php');




$bid = $_REQUEST['bid'];



$status = deleteBook($bid);



if($status){
header('location: ../views/FindBook.php');
}else{
header('location: ../views/DeleteBook.php?bid='.$bid);
}
?>