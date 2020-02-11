<?php
    include_once 'Database.php';

    checkConnection($conn);
    
    $userID = $_POST['userID'];
    $sql = "DELETE FROM students WHERE ID = " . $userID;

    if ($conn->query($sql) === true) {
     echo json_encode("New record deleted successfully");
    } else {
        echo json_encode('"Error: " . $sql . "<br>" . $conn->error');
    }

    $conn -> close();

?>