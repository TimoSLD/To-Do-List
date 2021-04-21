<?php 
require('function.php');
  $conn =  openDatabaseConnection();
  $listtime = date("Y-m-d h:i:sa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>create list</h1>
</body>
</html>
<form action="insertList.php" method="POST" onSubmit="window.close()">
<label for="name">Name</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="description">Description</label>
  <input type="text" id="description" name="description"><br><br>
  <input type="hidden" id="listtime" name="listtime" Value="<?php echo $listtime; ?>"><br><br>
  <input type="submit">
</form>