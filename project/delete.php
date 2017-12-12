<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname= "project";

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sqlCrt = "DELETE FROM bio WHERE fName = '$_POST[delfName]' AND lName = '$_POST[dellName]'";
    
    if(mysqli_query($conn, $sqlCrt)){
    echo "<a href='adminLogin.php'> Go back to the Admin Log In page</a>";
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
    
    $conn->close();

?>