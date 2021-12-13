<?php

require_once('../model/Model.php');




$id = $_REQUEST['id'];



$status =  deleteProfile($id);



if($status){
header('location: ../views/student-info.php');
}else{
header('location: ../views/sprofileDelete.php?id='.$id);
}
?>