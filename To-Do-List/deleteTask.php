<?php
require('function.php');

$id = $_GET['id'];

deleteTask($id);

 header("Location: index.php");  
?> 
