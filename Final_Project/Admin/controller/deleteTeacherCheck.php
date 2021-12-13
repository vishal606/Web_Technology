<?php

require_once('../model/Model.php');




$id = $_REQUEST['id'];



$status =  deleteProfile($id);



if($status){
header('location: ../views/teachers-list.php');
}else{
header('location: ../views/tprofileDelete.php?id='.$id);
}
?>