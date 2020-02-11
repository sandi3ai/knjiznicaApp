<?php    
    include_once 'Database.php';
    
    checkConnection($conn);

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
    $jsonArray = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $jsonArray[] = $row;
        }
        echo json_encode($jsonArray);
    }

    $conn->close();
?>