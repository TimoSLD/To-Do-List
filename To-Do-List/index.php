<?php 
require('function.php');
require('header.php');
$conn =  openDatabaseConnection();
$lists = getAllLists();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-List</title>
</head>
<body class="bg-dark">
    <div class="container img-thumbnail mt-3 mb-3">
        <h1 class="text-center ">To-Do-list:</h1>
    </div>
        <?php foreach ($lists as $list) { ?>
            <div class="container img-thumbnail mt-3 mb-3">
                <h1><?=$list['name']?></h1> 
                <p><?=$list['description']?></p><p class="float-right"><?=$list['listtime'] ?></p>
                <a class="lijsticons far fa-plus-square"  href="createTask.php?listid=<?php echo $list['id']; ?>"></a>
                <a class="lijsticons fas fa-minus-circle" href="deleteList.php?id=<?php echo $list['id']; ?>"></a>
                <a class="lijsticons fas fa-pen-square"   href="updatelist.php?id=<?php echo $list['id'];?>"></a>
                <?php 
                    $id = $list['id']; 
                    $tasks = getTasksWithId($id);
                    if(isset($_POST["sortOnStatus"]))
                    {
                     $tasks = getAllStatusOrderBy($id);
                    }else if(isset($_POST["sortOnTime"])){
                        $tasks = getAllTimeOrderBy($id);
                    }else{
                      $tasks = getTasksWithId($id);     
                    } 
                ?>
        <?php foreach ($tasks as $task) { ?>
            <div class="container img-thumbnail mt-3 mb-3">
                <h1><?=$task['name']?></h1>
                <p><?=$task['description']?></p><p class="float-right"><?=$task['time'] ?></p>
                <?php
                
            if($task['status'] == "voltooid"){
            ?>
                <a class="taskicons green fas fa-circle" style="color:green;"  href="changeStatus.php?id=<?php echo $task['id']?>&listid=<?php echo $task['listid']?>&name=<?php echo $task['name']?>&description=<?php echo $task['description']?>&status=<?php echo $task['status']?>&time=<?php echo $task['time']?>"></a>
                
            <?php
            }else{
            ?>
                <a class="taskicons red fas fa-circle" style="color:red;"  href="changeStatus.php?id=<?php echo $task['id']?>&listid=<?php echo $task['listid']?>&name=<?php echo $task['name']?>&description=<?php echo $task['description']?>&status=<?php echo $task['status']?>&time=<?php echo $task['time']?>"></a>
            <?php
            }
        ?>
                <a class="lijsticons fas fa-minus-circle" href="deleteTask.php?id=<?php echo $task['id']; ?>"></a>
                <a class="lijsticons fas fa-pen-square"   href="updateTask.php?id=<?php echo $task['id'];?>&listid=<?php echo $task['listid']?>"></a>     
            </div>
            <?php
            }
        ?>     
        </div>
    
            <?php
            }
        ?>   
    </div>
    <div class="container img-thumbnail mb-3">
        <p class="text-center">Timo Lemmen - 2020</p>
    </div>
</body>
</html>