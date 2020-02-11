<?php    
    include_once 'Database.php';
    
    checkConnection($conn);
    
    $sql = "SELECT borrows.borrowID, students.ID, students.stdName, students.stdSurname, books.bookID, books.title, books.author " .
    "FROM borrows JOIN students ON borrows.stdID = students.ID JOIN books ON books.bookID = borrows.bookID";
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