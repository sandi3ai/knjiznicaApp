<?php

    include_once 'Database.php';

    checkConnection($conn);

    $borrowID = $_POST['borrowID'];
    
    $sql = "DELETE FROM borrows WHERE borrowID = " . $borrowID;
    if ($conn->query($sql) === true) {
        echo json_encode("The order number ". $borrowID . " was returned successfully");
    } else {
        echo json_encode('"Error: " . $sql . "<br>" . $conn->error');
    }


$conn -> close();

?>