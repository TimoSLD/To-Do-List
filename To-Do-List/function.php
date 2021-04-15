<?php
    function openDatabaseConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "to-do-list";
        
        $conn = new PDO('mysql:host=localhost;dbname=to-do-list', $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     // echo "Connected successfully";
            return $conn;
    }

    function insertList($name, $description){
        $conn = openDatabaseConnection();
        $stmt=$conn->prepare("INSERT INTO `lists` (`name`, `description`) Values (:name, :description)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);     
        $stmt->execute();
    }

    function getAllLists(){
        $conn = openDataBaseConnection();
        $stnt=$conn->prepare('SELECT * FROM lists');
        $stnt->execute();
        return $stnt->fetchAll();
    }

    function deleteList($id){
        $conn = openDataBaseConnection();
        $stmt=$conn->prepare("DELETE FROM lists WHERE id= :deleteid");
        $stmt->execute([":deleteid" => $id]);
    }

    function editList($id, $name, $description){
        $conn = openDataBaseConnection(); 
        $stmt = $conn->prepare("UPDATE `lists` SET id = :id, name = :name,  description = :description WHERE id = :id");
            
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
        }

    function insertTask($listid, $name, $description, $status, $time){
        $conn = openDatabaseConnection();
        $stnt=$conn->prepare("INSERT INTO `task` (`listid`,`name`, `description`, `status`, `time`) Values (:listid, :name, :description, :status, :time)");
        $stnt->bindParam(':listid', $listid);
        $stnt->bindParam(':name', $name);
        $stnt->bindParam(':description', $description);     
        $stnt->bindParam(':status', $status);
        $stnt->bindParam(':time', $time);
        $stnt->execute();
    }

    function deleteTaskID($id){
        $conn = openDataBaseConnection();
        $stnt=$conn->prepare("DELETE FROM task WHERE listid= :deleteid");
        $stnt->execute([":deleteid" => $id]);
    }

    function getAllTasks(){
        $conn = openDataBaseConnection();
        $stnt=$conn->prepare('SELECT * FROM task');
        $stnt->execute();
        return $stnt->fetchAll();
    }
    
    function getTasksWithId($id){
        $conn = openDataBaseConnection();
        $stnt = $conn->prepare("SELECT * FROM task WHERE listid = :id" );
        $stnt->execute([":id" => $id]);
        return $stnt->fetchAll();
        }  

    function deleteTask($id){
        $conn = openDataBaseConnection();
        $stnt=$conn->prepare("DELETE FROM task WHERE id= :taskid");
        $stnt->execute([":taskid" => $id]);
        }