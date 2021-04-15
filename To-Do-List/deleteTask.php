<?php
require('function.php');

$id = $_GET['taskid'];

deleteTask($id);

echo $id;



 header("Location: index.php");  
?> 
