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
    
    $sqlCrt = "SELECT * FROM bio WHERE $_POST[colName] = $_POST[ageRange]";
    
    $retAll = mysqli_query($conn, $sqlCrt);
    
    echo "Results returned: " .  mysqli_num_rows($retAll);
    
    while($row = mysqli_fetch_array($retAll)) {
        echo "Name: " . $row['fName'] . " " . $row['lName'] . " " . $row['age'] . " " . $row['picture'];
    }
    
    if(mysqli_query($conn, $sqlCrt)){
    echo "<a href='adminLogin.php'> Go back to the Admin Log In page</a>";
    } else {
        echo "Error updating data: " . mysqli_error($conn);
    }
    
    $conn->close();

?>