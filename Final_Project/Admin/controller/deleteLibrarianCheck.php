<?php

require_once('../model/Model.php');




$id = $_REQUEST['id'];



$status =  deleteProfile($id);



if($status){
header('location: ../views/librarian-info.php');
}else{
header('location: ../views/lprofileDelete.php?id='.$id);
}
?>