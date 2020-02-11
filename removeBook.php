<?php
    include_once 'Database.php';

    checkConnection($conn);
    
    $bookID = $_POST['bookID'];
    $sql = "DELETE FROM books WHERE bookID = " . $bookID;

    if ($conn->query($sql) === true) {
        echo json_encode("Book". $bookID . " was deleted successfully");
    } else {
        echo json_encode('"Error: " . $sql . "<br>" . $conn->error');
    }

    $conn -> close();

?>