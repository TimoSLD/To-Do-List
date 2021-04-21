<?php
require('function.php');
$conn =  openDatabaseConnection();
$id = $_GET['id'];
$listid = $_GET['listid'];
$time = date("Y-m-d h:i:sa");
?>

<form action="edittask.php" method="POST">
  <input name="id" type="hidden" Value="<?php echo $id; ?>">
  <input name="listid" type="hidden" Value="<?php echo $listid; ?>">
  <label for="name">Naam</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="description">Beschrijving</label>
  <input type="text" id="description" name="description"><br><br>
  <input type="hidden" id="status" name="status" Value="onvoltooid"><br><br>
  <input type="hidden" id="time" name="time" Value="<?php echo $time; ?>"><br><br>
  <input type="submit" value="Submit">
</form>