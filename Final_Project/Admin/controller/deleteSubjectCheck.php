<?php

require_once('../model/Model.php');




$id = $_REQUEST['id'];



$status =  deleteSubject($id);



if($status){
header('location: ../views/class-info.php');
}else{
header('location: ../views/delete_Subject.php?id='.$id);
}
?>