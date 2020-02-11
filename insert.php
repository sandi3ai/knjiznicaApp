<?php

    include_once 'Database.php';
    
    checkConnection($conn);

    //so vse vrednosti podane?
    if (!empty($_POST['imeStudenta']) && !empty($_POST['priimekStudenta']) && !empty($_POST['letnicaStudenta'])) {
        $name = $_POST['imeStudenta'];
        $surname = $_POST['priimekStudenta'];
        $birthYear = $_POST['letnicaStudenta'];
        //insert to db
        $sql = "INSERT INTO students (stdName, stdSurname, stdBirthYear)
            VALUES ('$name', '$surname', '$birthYear')";

        if ($conn->query($sql) === true) {
            echo json_encode("New record created successfully");
        } else {
            echo json_encode('"Error: " . $sql . "<br>" . $conn->error');
        }
    }


$conn->close();

?>
