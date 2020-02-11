<?php

    include_once 'Database.php';
    
    checkConnection($conn);

    //so vse vrednosti podane?
    if (!empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['year'])) {
        $author = $_POST['author'];
        $title = $_POST['title'];
        $year = $_POST['year'];
        //insert to db
        $sql = "INSERT INTO books (author, title, year)
            VALUES ('$author', '$title', '$year')";

        if ($conn->query($sql) === true) {
            echo json_encode("New record created successfully");
        } else {
            echo json_encode('"Error: " . $sql . "<br>" . $conn->error');
        }
    }

$conn->close();

?>
