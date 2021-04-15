<?php 
require('function.php');
  $conn =  openDatabaseConnection();
?>

<form action="insertList.php" method="POST" target="submit">
<label for="name">Name</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="description">Description</label>
  <input type="text" id="description" name="description"><br><br>
  <input type="submit" value="Submit">
</form>