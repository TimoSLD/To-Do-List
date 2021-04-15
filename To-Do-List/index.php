<?php 
require('function.php');
require('header.php');
$conn =  openDatabaseConnection();
$lists = getAllLists();
$tasks = getAllTasks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-List</title>
</head>
<body class="bg-dark">
    
    </div>
    <div class="container img-thumbnail mt-3 mb-3">
        <h1 class="text-center ">To-Do-list:</h1>
    </div>
    <div class="row">
    <?php foreach ($lists as $list) { ?>
    <div class="container img-thumbnail mt-3 mb-3">
        <h1><?=$list['name']?></h1>
        <p><?=$list['description']?></p> 
        <a class="lijsticons far fa-plus-square"  href="createTask.php?listid=<?php echo $list['id']; ?>"></a>
        <a class="lijsticons fas fa-minus-circle" href="deleteList.php?listid=<?php echo $list['id']; ?>"></a>
        <a class="lijsticons fas fa-pen-square"   href="updatelist.php?id=<?php echo $list['id'];?>"></a>
        <?php foreach ($tasks as $task) { ?>
    <div class="container img-thumbnail mt-3 mb-3">
        <h1><?=$task['name']?></h1>
        <p><?=$task['description']?> , <?=$task['time'] ?></p>

        <a class="lijsticons fas fa-minus-circle" href="deleteTask.php?taskid=<?php echo $task['id']; ?>"></a>
        <a class="lijsticons fas fa-pen-square"   href="updateTask.php?id=<?php echo $task['id'];?>"></a>     
        </div>
            <?php
            }
        ?>     
        </div>
    
            <?php
            }
        ?>
         
</div>
</div>
        


        
    <div class="container img-thumbnail mb-3">
        <p class="text-center">Timo Lemmen - 2020</p>
    </div>
</body>
</html>