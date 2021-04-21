<?php
require('function.php');
$conn =  openDatabaseConnection();
$id = $_GET['id'];
$listid = $_GET['listid'];
$name = $_GET['name'];
$description = $_GET['description'];
$status = $_GET['status'];

if($status == "voltooid"){
   $status = "onvoltooid";
}else{
   $status = "voltooid";
}

$time = $_GET['time'];

echo $status;

editTask($id, $listid, $name, $description, $status, $time);

header("location: index.php")
?>

