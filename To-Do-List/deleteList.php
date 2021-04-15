<?php
require('function.php');
$id = $_GET['listid'];
deleteList($id);
header("Location: index.php");  
?> 
