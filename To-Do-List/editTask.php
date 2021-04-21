<?php
require('function.php');

$id = $_POST['id'];
$listid = $_POST['listid'];
$name = $_POST['name'];
$description = $_POST['description'];
$status = $_POST['status'];
$time = $_POST['time'];

editTask($id, $listid, $name, $description, $status, $time);

header("location: index.php");