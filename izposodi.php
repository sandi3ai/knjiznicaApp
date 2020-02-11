<?php    
    include_once 'Database.php';
    
    checkConnection($conn);
    
    if (!empty($_POST['bookID']) && !empty ($_POST['studentID'])) {
        $bID = $_POST['bookID'];
        $sID = $_POST['studentID'];
        $sql = "INSERT INTO borrows (stdID, bookID)
            VALUES ('$sID', '$bID')";

        if ($conn->query($sql) === true) {
            echo json_encode("New record created successfully");
        } else {
            echo json_encode('"Error: " . $sql . "<br>" . $conn->error');
        }
    }

?>