<?php
require('function.php');

$name = $_POST['name'];
$description = $_POST['description'];
$listtime = $_POST['listtime'];

?>

<?php
 insertList($name, $description, $listtime);

 header("Location: index.php"); 
?>