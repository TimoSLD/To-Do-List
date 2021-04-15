<?php
require('function.php');

$name = $_POST['name'];
$description = $_POST['description'];

?>

name: <?= $name?> <br>
description: <?= $description?>

<?php
 insertList($name, $description);

 header("Location: index.php"); 
?>