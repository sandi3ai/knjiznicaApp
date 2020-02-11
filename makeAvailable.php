<?php    
    include_once 'Database.php';
    
    checkConnection($conn);
    
    $bookID = $_POST['bookID'];
    var_dump($bookID);

    $sql = "UPDATE books SET available = 1 WHERE " . $bookID . " = bookID";

    if ($conn->query($sql) === true) {
        echo json_encode("Availability changed");
    } else {
        echo json_encode('"Error: " . $sql . "<br>" . $conn->error');
    }


    $conn -> close();
?>