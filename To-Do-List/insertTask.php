<?php
require('function.php');

$listid = $_POST['listid'];
$name = $_POST['name'];
$description = $_POST['description'];
$status = $_POST['status'];
$time = $_POST['time'];

?>


<?php

 insertTask($listid, $name, $description, $status, $time);

 header("Location: index.php"); 
?>